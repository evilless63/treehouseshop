<?php

namespace App\Http\Controllers\Admin;


use App\Http\Requests\AdminProductsCreateRequest;
use App\Models\Category;
use App\Models\Product;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use MetaTag;
use Illuminate\Support\Facades\File;
use App\SBlog\Core\BlogApp;
use ElForastero\Transliterate\Transliterator;
use ElForastero\Transliterate\Map;
use App\Models\Color;
use App\Models\Size;
use App\Models\PriceAndStock;


class ProductController extends AdminBaseController
{

    private $productRepository;


    public function __construct()
    {
        parent::__construct();
        $this->productRepository = app(ProductRepository::class);
    }

    /**
     * INDEX PAGE
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perpage = 10;
        $getAllProducts = $this->productRepository->getAllProducts($perpage);
        $count = $this->productRepository->getCountProducts();
        MetaTag::setTags(['title' => 'Список товаров']);
        return view('blog.admin.product.index', compact('getAllProducts', 'count'));
    }


    /**
     * Show the form for creating a new resource.
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //\Session::flush();
        $item = new Category();
        MetaTag::setTags(['title' => 'Создание нового товара']);
        return view('blog.admin.product.create', [
            'categories' => Category::with('children')->where('parent_id', '0')->withLocalization('ru')
                ->get(),
            'delimiter' => '-',
            'item' => $item,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param AdminProductsCreateRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(AdminProductsCreateRequest $request)
    {
        $data = $request->input();
        $product = (new Product())->create($data);
        $id = $product->id;
        $product->status = $request->status ? '1' : '0';
        $product->hit = $request->hit ? '1' : '0';
        $product->is_new = $request->is_new ? '1' : '0';
        $product->category_id = $request->parent_id ?? '0';
        $this->productRepository->getImg($product);
        $save = $product->save();

        if ($save) {

            foreach ($request->input('localization', []) as $k => $i) {
                /** @var PostLocalization $locale */
                $locale = $product->localizations()
                    ->create($i + ['lang' => $k]);
            }

            $product->categories()->attach($product->category_id);
            $this->productRepository->editFilter($id, $data);
            $this->productRepository->editRelatedProduct($id, $data);
            $this->productRepository->saveGallery($id);
            return redirect()
                ->route('blog.admin.products.create', [$product->id])
                ->with(['success' => 'Успешно сохранено']);
        } else {
            return back()
                ->withErrors(['msg' => 'Ошибка сохранения'])
                ->withInput();
        }
    }


    /**
     * EDIT One Product
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = $this->productRepository->getInfoProduct($id)->withLocalization('ru')->first();
        $ruLoc = $product
            ->localization()
            ->where('lang', 'ru')
            ->first();

        $enLoc = $product
            ->localization()
            ->where('lang', 'en')
            ->first();

        $id = $product->id;
        BlogApp::get_instance()->setProperty('parent_id', $product->category_id);
        $filter = $this->productRepository->getFiltersProduct($id);
        $related_products = $this->productRepository->getRelatedProducts($id);
        $images = $this->productRepository->getGallery($id);

        MetaTag::setTags(['title' => "Редактирование товара № {$id}"]);
        return view('blog.admin.product.edit', compact('product', 'images', 'filter', 'related_products', 'id'), [
            'categories' => Category::with('children')->where('parent_id', '0')->withLocalization('ru')
                ->get(),
            'delimiter' => '-',
            'product' => $product,
            'ruLoc' => $ruLoc,
            'enLoc' => $enLoc,
        ]);
    }


    /**
     * Update Product
     * @param AdminProductsCreateRequest $request
     * @param $id
     * @return $this
     */
    public function update(AdminProductsCreateRequest $request, $id)
    {
        $product = $this->productRepository->getEditId($id);
        if (empty($product)) {
            return back()
                ->withErrors(['msg' => "Запись = [{$id}] не найдена"])
                ->withInput();
        }
        $data = $request->all();
        $result = $product->update($data);
        $product->status = $request->status ? '1' : '0';
        $product->hit = $request->hit ? '1' : '0';
        $product->is_new = $request->is_new ? '1' : '0';
        $product->category_id = $request->parent_id ?? $product->category_id;
        $this->productRepository->getImg($product);
        $save = $product->save();

        if ($result && $save) {
            $product->categories()->attach($product->category_id);
            $this->productRepository->editFilter($id, $data);
            $this->productRepository->editRelatedProduct($id, $data);
            $this->productRepository->saveGallery($id);
            return redirect()
                ->route('blog.admin.products.edit', [$product->id])
                ->with(['success' => 'Успешно сохранено']);
        } else {
            return back()
                ->withErrors(['msg' => 'Ошибка сохранения'])
                ->withInput();
        }
    }


    /** Upload Single Image from my.js
     * @param Request $request
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function ajaxImage(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('blog.admin.product.include.image_single_edit');
        } else {
            $validator = \Validator::make(
                $request->all(),
                [
                    'file' => 'image|max:5000',
                ],
                [
                    'file.image' => 'Файл должен быть картинкой (jpeg, png, bmp, gif, or svg)',
                    'file.max' => 'Ошибка! Максимальный вес файла - 5 Мб!',
                ]
            );
            if ($validator->fails()) {
                return array(
                    'fail' => true,
                    'errors' => $validator->errors()
                );
            }
            $extension = $request->file('file')->getClientOriginalExtension();
            $dir = 'uploads/single/';
            $filename = uniqid() . '_' . time() . '.' . $extension;
            $request->file('file')->move($dir, $filename);
            $wmax = BlogApp::get_instance()->getProperty('img_width');
            $hmax = BlogApp::get_instance()->getProperty('img_height');
            $this->productRepository->uploadImg($filename, $wmax, $hmax);
            return $filename;
        }
    }

    /**
     * Add Photo for Gallery Ajax from my.js
     * @param Request $request
     * @return array
     */
    public function gallery(Request $request)
    {
        $validator = \Validator::make(
            $request->all(),
            [
                'file' => 'image|max:5000',
            ],
            [
                'file.image' => 'Файл должен быть картинкой (jpeg, png, bmp, gif, or svg)',
                'file.max' => 'Ошибка! Максимальный вес файла - 5 Мб!',
            ]
        );
        if ($validator->fails()) {
            return array(
                'fail' => true,
                'errors' => $validator->errors()
            );
        }
        if (isset($_GET['upload'])) {
            $wmax = BlogApp::get_instance()->getProperty('gallery_width');
            $hmax = BlogApp::get_instance()->getProperty('gallery_height');
            $name = $_POST['name'];
            $this->productRepository->uploadGallery($name, $wmax, $hmax);
        }
    }


    /** Delete Image */
    public function deleteImage($filename)
    {
        File::delete('uploads/single/' . $filename);
    }


    /** Delete Gallery */
    public function deleteGallery()
    {
        $id = isset($_POST['id']) ? $_POST['id'] : null;
        $src = isset($_POST['src']) ? $_POST['src'] : null;
        if (!$id || !$src) {
            return;
        }
        if (\DB::delete("DELETE FROM galleries WHERE product_id = ? AND img = ?", [$id, $src])) {
            @unlink("uploads/gallery/$src");
            exit('1');
        }
        return;
    }


    /** Related Products
     * @param Request $request
     */
    public function related(Request $request)
    {
        $q = isset($request->q) ? htmlspecialchars(trim($request->q)) : '';
        $data['items'] = [];
        $products = $this->productRepository->getProducts($q);
        if ($products) {
            $i = 0;
            foreach ($products as $id => $title) {
                $data['items'][$i]['id'] = $title->id;
                $data['items'][$i]['text'] = $title->title;
                $i++;
            }
        }
        echo json_encode($data);
        die;
    }


    /** Return product status status = 1 */
    public function returnStatus($id)
    {
        if ($id) {
            $st = $this->productRepository->returnStatusOne($id);
            if ($st) {
                return redirect()
                    ->route('blog.admin.products.index')
                    ->with(['success' => 'Успешно сохранено']);
            } else {
                return back()
                    ->withErrors(['msg' => 'Ошибка сохранения'])
                    ->withInput();
            }
        }
    }

    /** Return product status status = 0 */
    public function deleteStatus($id)
    {
        if ($id) {
            $st = $this->productRepository->deleteStatusOne($id);
            if ($st) {
                return redirect()
                    ->route('blog.admin.products.index')
                    ->with(['success' => 'Успешно сохранено']);
            } else {
                return back()
                    ->withErrors(['msg' => 'Ошибка сохранения'])
                    ->withInput();
            }
        }
    }


    /** Delete One Product from DB */
    public function deleteProduct($id)
    {
        if ($id) {
            $gal = $this->productRepository->deleteImgGalleryFromPath($id);
            $db = $this->productRepository->deleteFromDB($id);;
            if ($db) {
                return redirect()
                    ->route('blog.admin.products.index')
                    ->with(['success' => 'Успешно удалено']);
            } else {
                return back()
                    ->withErrors(['msg' => 'Ошибка удаления'])
                    ->withInput();
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function storeFrom1c(Request $request)
    {
        
        $stack = $request->toArray();
        $transliterator = new Transliterator(Map::LANG_RU, Map::DEFAULT);
        foreach($stack as $data) {
            // return($transliterator->slugify(preg_replace('/[^a-zA-ZА-Яа-я0-9\s]/u', '', $data['title'])));
            // return(preg_replace('/[^a-zA-ZА-Яа-я0-9\s]/u', '', $data['title']));
            $data['alias'] = strtolower($transliterator->slugify(preg_replace('/[^a-zA-ZА-Яа-я0-9\s]/u', '', $data['title'])));
            $item = Product::where('code', $data['code'])->first();
            if($item == null) {
                $item = new Product();
                $item->code = $data['code'];
                $item->sku = $data['sku'];
                $item->alias = $data['alias'];
                $item->weight = $data['weight'];
                $item->dimension_x = $data['dimension_x']; 
                $item->dimension_y = $data['dimension_y']; 
                $item->dimension_z = $data['dimension_z']; 
                $savedItem = $item->save();
        
                if($savedItem) {
                    $dataLocalize = [];
                    $dataLocalize['lang'] = 'ru';
                    $dataLocalize['title'] = $data['title'];
                    $dataLocalize['unit'] = $data['unit'];
                    $locale = $item->localizations()->create($dataLocalize);
                }  
            } else {
                $item->sku = $data['sku'];
                $item->weight = $data['weight'];
                $item->dimension_x = $data['dimension_x']; 
                $item->dimension_y = $data['dimension_y']; 
                $item->dimension_z = $data['dimension_z']; 
                $savedItem = $item->update();
            }
        }
    }    

    public function makeProductsTableWithPriceAndStock(Request $request) {
        $stack = $request->toArray();
        $transliterator = new Transliterator(Map::LANG_RU, Map::DEFAULT);
        foreach($stack as $data) {

            if($data['color'] == "") {
                $data['color'] = "Без цвета";
            }

            if($data['size'] == "") {
                $data['size'] = "Без размера";
            }

            $itemData = [];
            $itemData['product_id'] = Product::where('code', $data['code'])->first()->id;
            $itemData['color_id'] = Color::where('alias', strtolower($transliterator->slugify(preg_replace('/^[A-ZА-Яa-zа-я0-9_]$/u', '', $data['color']))))->first()->id;
            $itemData['size_id'] = Size::where('alias', strtolower($transliterator->slugify(preg_replace('/^[A-ZА-Яa-zа-я0-9_]$/u', '', $data['size']))))->first()->id;
            $itemData['stock'] = $data['stock'];
            $itemData['price'] = $data['price'];

            if($data['stock'] <= 0) {
                $itemData['is_active'] = 0;
            }
            
            $item = PriceAndStock::where('product_id', $itemData['product_id'])
            ->where('color_id', $itemData['color_id'])
            ->where('size_id', $itemData['size_id'])
            ->first();
            if($item == null) {
                $item = new PriceAndStock();
                $item->create($itemData);
            } else {
                $item->update($itemData);
            }
        }
    }

    
    // public function postRequestCategoryFrom1c(Request $request) {
    //     //Обработка категорий

    //         try {
    //             $stack = $request->toArray();
    //             foreach($stack as $s) {
    //                 $category = Category::where('category_id', $s['category_id'])->first();
    //                 $transliterator = new Transliterator(Map::LANG_RU, Map::DEFAULT);
    //                 $s['slug'] = strtolower($transliterator->slugify(preg_replace('/^[a-zа-я0-9_]$/', '', $s['name'])));
    //                 if($category == null) {
    //                     $category = new Category();
    //                     $category->create($s);
    //                 } else {
    //                     $category->update($s);
    //                 }
    //             }

    //             return response('OK', 200);

    //         } catch (Exception $e) {
    //             Log::info($e);
    //             return response('ERROR', 500);
    //         }

    // }

    // public function postRequestProductFrom1c(Request $request) {
    //     //Обработка товаров
    //         try {
    //             $stack = $request->toArray();
    //             foreach($stack as $s) {
    //                 $product = Product::where('product_id', $s['product_id'])->first();
    //                 $transliterator = new Transliterator(Map::LANG_RU, Map::DEFAULT);
    //                 $s['slug'] = strtolower($transliterator->slugify(preg_replace('/^[a-zа-я0-9_]$/', '', $s['name'])));
    //                 if($product == null) {
    //                     $product = new Product();
    //                     $product->create($s);
    //                 } else {
    //                     $product->update($s);
    //                 }
    //             }

    //             return response('OK', 200);

    //         } catch (Exception $e) {
    //             Log::info($e);
    //             return response('ERROR', 500);
    //         }

    // }

}

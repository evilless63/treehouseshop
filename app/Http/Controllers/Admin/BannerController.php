<?php

namespace App\Http\Controllers\Admin;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Repositories\BannerRepository;
use App\SBlog\Core\BlogApp;
use MetaTag;

class BannerController extends AdminBaseController
{
    private $bannerRepository;

    public function __construct()
    {
        parent::__construct();
        $this->bannerRepository = app(Bannerrepository::class);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perpage = 10;
        $getAllBanners = $this->bannerRepository->getAllBanners($perpage);
        $count = $this->bannerRepository->getCountBanners();
        MetaTag::setTags(['title' => 'Список баннеров']);
        return view('blog.admin.banner.index', compact('getAllBanners', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        MetaTag::setTags(['title' => 'Создание нового баннера']);
        return view('blog.admin.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->input();
        $banner = (new Banner())->create($data);
        $banner->is_active = $request->status ? '1' : '0';
        $this->bannerRepository->getImg($banner);
        $save = $banner->save();
        if ($save) {
            return redirect()
                ->route('blog.admin.banners.index')
                ->with(['success' => 'Успешно сохранено']);
        } else {
            return back()
                ->withErrors(['msg' => 'Ошибка сохранения'])
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = $this->bannerRepository->getInfoBanner($id);
        $id = $banner->id;
        MetaTag::setTags(['title' => "Редактирование  баннера {$banner->title}"]);
        return view('blog.admin.banner.edit', compact('banner', 'id'), [
            'banner' => $banner,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $banner = $this->bannerRepository->getEditId($id);
        if (empty($banner)) {
            return back()
                ->withErrors(['msg' => "Запись = [{$id}] не найдена"])
                ->withInput();
        }
        $data = $request->all();
        $result = $banner->update($data);
        $banner->is_active = $request->is_active ? '1' : '0';
        $this->bannerRepository->getImg($banner);
        $save = $banner->save();

        if ($result && $save) {
            return redirect()
                ->route('blog.admin.banners.edit', [$banner->id])
                ->with(['success' => 'Успешно сохранено']);
        } else {
            return back()
                ->withErrors(['msg' => 'Ошибка сохранения'])
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        //
    }

    /** Upload Single Image from my.js
     * @param Request $request
     * @return array|\Illuminate\Contracts\View\Factory|\Illuminate\View\View|string
     */
    public function ajaxImage(Request $request)
    {
        if ($request->isMethod('get')) {
            return view('blog.admin.banner.include.image_single_edit');
        } else {
            $validator = \Validator::make($request->all(),
                [
                    'file' => 'image|max:5000',
                ],
                [
                    'file.image' => 'Файл должен быть картинкой (jpeg, png, bmp, gif, or svg)',
                    'file.max' => 'Ошибка! Максимальный вес файла - 5 Мб!',
                ]);
            if ($validator->fails()) {
                return array(
                    'fail' => true,
                    'errors' => $validator->errors()
                );
            }
            $extension = $request->file('file')->getClientOriginalExtension();
            $dir = 'uploads/banners_media/';
            $filename = uniqid() . '_' . time() . '.' . $extension;
            $request->file('file')->move($dir, $filename);
            $wmax = BlogApp::get_instance()->getProperty('img_width');
            $hmax = BlogApp::get_instance()->getProperty('img_height');
            $this->bannerRepository->uploadImg($filename, $wmax, $hmax);
            return $filename;
        }
    }

     /** Delete Image */
     public function deleteImage($filename)
     {
         File::delete('uploads/banners_media/' . $filename);
     }

     /** Return banner status status = 1 */
     public function returnStatus($id)
     {
         if ($id) {
             $st = $this->bannerRepository->returnStatusOne($id);
             if ($st) {
                 return redirect()
                     ->route('blog.admin.banners.index')
                     ->with(['success' => 'Успешно сохранено']);
             } else {
                 return back()
                     ->withErrors(['msg' => 'Ошибка сохранения'])
                     ->withInput();
             }
         }
     }

     /** Return banner status status = 0 */
     public function deleteStatus($id)
     {
         if ($id) {
             $st = $this->bannerRepository->deleteStatusOne($id);
             if ($st) {
                 return redirect()
                     ->route('blog.admin.banners.index')
                     ->with(['success' => 'Успешно сохранено']);
             } else {
                 return back()
                     ->withErrors(['msg' => 'Ошибка сохранения'])
                     ->withInput();
             }
         }
     }

     /** Delete One banner from DB */
     public function deleteBanner($id)
     {
         if ($id) {
             $gal = $this->bannerRepository->deleteImgGalleryFromPath($id);
             $db = $this->bannerRepository->deleteFromDB($id);;
             if ($db) {
                 return redirect()
                     ->route('blog.admin.banners.index')
                     ->with(['success' => 'Успешно удалено']);
             } else {
                 return back()
                     ->withErrors(['msg' => 'Ошибка удаления'])
                     ->withInput();
             }
         }
     }
}

<?php

namespace App\Http\Controllers\Admin;


use App\Http\Requests\BlogCategoryUpdateRequest;
use App\Models\Category;
use App\Repositories\CategoryRepository;
use MetaTag;

/**
 *  Управление категориями блога
 * Class CategoryController
 * @package App\Http\Controllers\Blog\Admin
 */
class CategoryController extends AdminBaseController
{


    private $categoryRepository;

    /**
     * CategoryController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->categoryRepository = app(CategoryRepository::class);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $arrMenu = Category::withLocalization('ru')->get();

        $menu = $this->categoryRepository->buildMenu($arrMenu);

        MetaTag::setTags(['title' => 'Список категорий']);
        return view('blog.admin.category.index',['menu' => $menu]);

    }


    /**
     * Show the form for creating a new resource.
     *
     * @param BlogCategoryUpdateRequest $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = new Category();
        $categoryList = $this->categoryRepository->getComboBoxCategories();

        MetaTag::setTags(['title' => 'Добавление категории']);
        return view('blog.admin.category.create', [
            'categories' => Category::with('children')->where('parent_id', '0')->withLocalization('ru')->get(),
            'delimiter' => '-',
            'item' => $item,
        ]);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BlogCategoryUpdateRequest $request)
    {

        $name = $this->categoryRepository->checkUniqueName($request->title,$request->parent_id);

        if($name){
            return back()
                ->withErrors(['msg'=>'Не может быть в одной и той же Категории двух одинаковых. Выбирите другую Категорию.'])
                ->withInput();
        }

        $data = $request->input();
        $item = new Category();
        $data['in_header'] = $request->in_header ? '1' : '0';
        $item->fill($data)->save();

        foreach($request->input('localization', []) as $k => $i) {
            /** @var PostLocalization $locale */
            $locale = $item->localizations()
                ->create($i + ['lang' => $k]);
        }


        if ($item) {
            return redirect()
                ->route('blog.admin.categories.create', [$item->id])
                ->with(['success' => 'Успешно сохранено']);
        } else {
            return back()
                ->withErrors(['msg'=>'Ошибка сохранения'])
                ->withInput();
        }
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @param CategoryRepository $categoryRepository
     * @return \Illuminate\Http\Response
     */
    public function edit($id, CategoryRepository $categoryRepository)
    {
        $item = $this->categoryRepository->getEditId($id);
        if (empty($item)){
            abort(404);
        }

        $item = Category::where('id', $id)->first();

        $ruLoc = $item
        ->localization()
        ->where('lang', 'ru')
        ->first();

        $enLoc = $item
        ->localization()
        ->where('lang', 'en')
        ->first();

        $categoryList = $this->categoryRepository->getComboBoxCategories();

        MetaTag::setTags(['title' => 'Редактирование категории']);
        return view('blog.admin.category.edit',[
            'categories' => Category::with('children')->where('parent_id', '0')->withLocalization('ru')->get(),
            'delimiter' => '-',
            'item' => $item,
            'ruLoc' => $ruLoc,
            'enLoc' => $enLoc,
        ]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function update(BlogCategoryUpdateRequest $request, $id)
    {
        $item = $this->categoryRepository->getEditId($id);
        if (empty($item)){
            return back()
                ->withErrors(['msg' => "Запись = [{$id}] не найдена"])
                ->withInput();
        }

        $data = $request->all();
        $data['in_header'] = $request->in_header ? '1' : '0';
        $result = $item->update($data);

        foreach($request->input('localization', []) as $k => $i) {
            /** @var PostLocalization $locale */
            $locale = $item->localizations()
                ->updateOrCreate($i + ['lang' => $k]);
        }

        if ($result){
            return redirect()
                ->route('blog.admin.categories.edit', $item->id)
                ->with(['success' => "Успешно сохранено"]);
        } else {
            return back()
                ->withErrors(['msg' => 'Ошибка сохранения!'])
                ->withInput();
        }
    }


    /** @throws \Exception */
    public function mydel()
    {
        $id = $this->categoryRepository->getRequestID();
        if (!$id){
            return back()
                ->withErrors(['msg'=>'Ошибка с ID']);
        }

        $children = $this->categoryRepository->checkChildren($id);
        if ($children){
                return back()
                    ->withErrors(['msg'=>'Удаление невозможно, в категории есть вложенные категории']);
        }

        $parents = $this->categoryRepository->checkParentsInProducts($id);
        if ($parents){
            return back()
                ->withErrors(['msg'=>'Удаление невозможно, в категории есть товары']);
        }

        $delete = $this->categoryRepository->deleteCategory($id);
        if ($delete){
            return redirect()
                ->route('blog.admin.categories.index')
                ->with(['success' => "Запись id [$id] удалена"]);
        }   else {
            return back()->withErrors(['msg' => 'Ошибка удаления']);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return view('blog.admin.category.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
}

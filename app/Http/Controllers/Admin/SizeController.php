<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminPostsCreateRequest;
use App\Models\Size;
use Illuminate\Http\Request;
use MetaTag;
use ElForastero\Transliterate\Transliterator;
use ElForastero\Transliterate\Map;

class SizeController extends AdminBaseController
{
    /**
     * CategoryController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sizes = Size::withLocalization('ru')->paginate(20);
        $count = Size::count();
        MetaTag::setTags(['title' => 'Список размеров']);
        return view('blog.admin.size.index',compact('sizes', 'count'));

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  AdminPostsCreateRequest $request
     * @return void
     */
    public function store(AdminPostsCreateRequest $request)
    {

    }

    public function storeFrom1c(AdminPostsCreateRequest $request)
    {
        $stack = $request->toArray();
        $transliterator = new Transliterator(Map::LANG_RU, Map::DEFAULT);
        foreach($stack as $data) {

            $dataArr = [];
            if($data == "") {
                $data = "Без размера";
            }
            $dataArr['name'] = $data;
            $dataArr['alias'] = strtolower($transliterator->slugify(preg_replace('/^[A-ZА-Яa-zа-я0-9_]$/u', '', $data)));
            if(Size::where('alias', $dataArr['alias'])->count() == 0) {
                $item = new Size();
                $savedItem = $item->fill($dataArr)->save();
        
                if($savedItem) {
                    $dataLocalize = [];
                    $dataLocalize['lang'] = 'ru';
                    $dataLocalize['title'] = $dataArr['name'];
                    $locale = $item->localizations()->create($dataLocalize);
                }  
            }
        }    
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @param CategoryRepository $categoryRepository
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $item = Size::findOrFail($id);

        $ruLoc = $item
            ->localization()
            ->where('lang', 'ru')
            ->first();

        $enLoc = $item
            ->localization()
            ->where('lang', 'en')
            ->first();

        MetaTag::setTags(['title' => 'Редактирование размера']);
        return view('blog.admin.size.edit',[
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
    public function update(AdminPostsCreateRequest $request, $id)
    {
        $item = Size::findOrFail($id);

        $data = $request->all();
        $result = $item->update($data);

        foreach($request->input('localization', []) as $k => $i) {
            /** @var PostLocalization $locale */
            $locale = $item->localizations()
                ->updateOrCreate($i + ['lang' => $k]);
        }

        if ($result){
            return redirect()
                ->route('blog.admin.sizes.edit', $item->id)
                ->with(['success' => "Успешно сохранено"]);
        } else {
            return back()
                ->withErrors(['msg' => 'Ошибка сохранения!'])
                ->withInput();
        }
    }



}

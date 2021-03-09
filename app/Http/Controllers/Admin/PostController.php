<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\AdminPostsCreateRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use MetaTag;

class PostController extends AdminBaseController
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
        $posts = Post::withLocalization('ru')->paginate(20);
        $count = Post::count();
        MetaTag::setTags(['title' => 'Список статей']);
        return view('blog.admin.post.index',compact('posts', 'count'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @param AdminPostsCreateRequest $request
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $item = new Post();

        MetaTag::setTags(['title' => 'Добавление статьи']);
        return view('blog.admin.post.create', [
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
    public function store(AdminPostsCreateRequest $request)
    {
        $data = $request->input();
        $item = new Post();
        $data['for_visitors'] = $request->for_visitors ? '1' : '0';
        $data['about_company'] = $request->about_company ? '1' : '0';
        $data['status'] = $request->status ? '1' : '0';
        $item->fill($data)->save();

        foreach($request->input('localization', []) as $k => $i) {
            /** @var PostLocalization $locale */
            $locale = $item->localizations()
                ->create($i + ['lang' => $k]);
        }


        if ($item) {
            return redirect()
                ->route('blog.admin.posts.create', [$item->id])
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
    public function edit($id) {
        $item = Post::findOrFail($id);

        $ruLoc = $item
            ->localization()
            ->where('lang', 'ru')
            ->first();

        $enLoc = $item
            ->localization()
            ->where('lang', 'en')
            ->first();

        MetaTag::setTags(['title' => 'Редактирование статьи']);
        return view('blog.admin.post.edit',[
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
        $item = Post::findOrFail($id);

        $data = $request->all();
        $data['for_visitors'] = $request->for_visitors ? '1' : '0';
        $data['about_company'] = $request->about_company ? '1' : '0';
        $data['status'] = $request->status ? '1' : '0';
        $result = $item->update($data);

        foreach($request->input('localization', []) as $k => $i) {
            /** @var PostLocalization $locale */
            $locale = $item->localizations()
                ->updateOrCreate($i + ['lang' => $k]);
        }

        if ($result){
            return redirect()
                ->route('blog.admin.posts.edit', $item->id)
                ->with(['success' => "Успешно сохранено"]);
        } else {
            return back()
                ->withErrors(['msg' => 'Ошибка сохранения!'])
                ->withInput();
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
        $delete = Post::findOrFail($id)->delete();
        if ($delete){
            return redirect()
                ->route('blog.admin.posts.index')
                ->with(['success' => "Запись id [$id] удалена"]);
        }   else {
            return back()->withErrors(['msg' => 'Ошибка удаления']);
        }
    }

    /** Return product status status = 1 */
    public function returnStatus($id)
    {
        if ($id) {
            $st = Post::first($id);
            $st->status = 1;
            $st = $st->update();
            if ($st) {
                return redirect()
                    ->route('blog.admin.posts.index')
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
            $st = Post::first($id);
            $st->status = 0;
            $st = $st->update();
            if ($st) {
                return redirect()
                    ->route('blog.admin.posts.index')
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
            $delete = Post::findOrFail($id)->delete();
            if ($delete) {
                return redirect()
                    ->route('blog.admin.posts.index')
                    ->with(['success' => 'Успешно удалено']);
            } else {
                return back()
                    ->withErrors(['msg' => 'Ошибка удаления'])
                    ->withInput();
            }
        }
    }


}

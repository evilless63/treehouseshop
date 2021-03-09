
@extends('layouts.app_admin')

@section('content')


    <section class="content-header">
        @component('blog.admin.components.breadcrumb')
            @slot('title') Список статей @endslot
            @slot('parent') Главная @endslot
            @slot('active') Список статей @endslot
        @endcomponent
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Наименование</th>
                                    <th>Статус</th>
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($posts as $post)

                                    <tr @if($post->status == 0) style="font-weight: bold"; @endif>
                                        <td>{{$post->id}}</td>
                                        <td>{{$post->localization->title}}</td>
                                        <!--если статут true или 1 то On если false или 0 то Off-->
                                        <td>{{$post->status ? 'On' : 'Off'}}</td>

                                        <td>
                                            <a href="{{route('blog.admin.posts.edit',$post->id)}}" title="Редактировать"><i class="fa fa-fw fa-eye"></i></a>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            @if ($post->status == 0)
                                                <a class="delete" href="{{route('blog.admin.posts.returnstatus',$post->id)}}" title="Отображать на сайте"><i class="fa fa-fw fa-refresh"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;

                                            @else
                                                <a class="delete" href="{{route('blog.admin.posts.deletestatus',$post->id)}}" title="Не отображать на сайте"><i class="fa fa-fw fa-close"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                                            @endif

                                            @if ($post)
                                                <a class="delete" href="{{route('blog.admin.posts.deleteproduct', $post->id)}}" title="Удалить из БД"><i class="fa fa-fw fa-close text-danger"></i></a>
                                            @endif

                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center">
                            <p>{{count($posts)}} статей из {{$count}} </p>

                            @if ($posts->total() > $posts->count())
                                <br>
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                {{$posts->links()}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->

@endsection

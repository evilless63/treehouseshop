@extends('layouts.app_admin')

@section('content')


    <section class="content-header">
        @component('blog.admin.components.breadcrumb')
            @slot('title') Редактирование продукта @endslot
            @slot('parent') Главная @endslot
            @slot('banner') Список баннеров @endslot
                @slot('active') Редактирование баннера {{$banner->title}} @endslot
        @endcomponent
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <form method="POST"  action="{{route('blog.admin.banners.update', $banner->id)}}" data-toggle="validator">
                        @method('PATCH')
                        @csrf
                        <div class="box-body">
                            <div class="form-group has-feedback">
                                <label for="title">Наименование баннера</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Наименование баннера" value="{{$banner->title}}" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>

                            <div class="form-group">
                                <label for="content">Текст на баннере (опционально)</label>
                                <input type="text" name="content" class="form-control" id="content" placeholder="Текст" value="{{$banner->content}}">
                            </div>

                            <div class="form-group">
                                <label>
                                    <input type="checkbox" name="is_active" {{$banner->is_active ? 'checked' : null}}> Активен
                                </label>
                            </div>


                            <br>

                            <div class="form-group">
                                <div class="col-md-4">
                                    @include('blog.admin.banner.include.image_single_edit',['banner' => $banner])
                                </div>
                            </div>

                            <input type="hidden" id="_token" value="{{ csrf_token() }}">

                        </div>
                        <div class="box-footer">
                            <button type="submit" class="btn btn-success">Сохранить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
    <div class = 'hidden' data-name='{{$id}}'></div>

@endsection




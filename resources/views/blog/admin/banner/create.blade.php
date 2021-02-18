@extends('layouts.app_admin')

@section('content')


    <section class="content-header">
        @component('blog.admin.components.breadcrumb')
            @slot('title') Добавление нового баннера @endslot
            @slot('parent') Главная @endslot
            @slot('banner') Список баннеров @endslot
            @slot('active') Новый баннер @endslot
        @endcomponent
    </section>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <form method="POST"  action="{{route('blog.admin.banners.store')}}" data-toggle="validator">
                        @csrf

                        <div class="box-body">
                            <div class="form-group has-feedback">
                                <label for="title">Наименование баннера</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Наименование баннера" value="{{old('title')}}" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>

                            <div class="form-group">
                                <label for="description">Текст на баннере (опционально)</label>
                                <input type="text" name="content" class="form-control" id="content" placeholder="Текст" value="{{old('content')}}">
                            </div>

                            <div class="form-group">
                                <label>
                                    <input type="checkbox" name="is_active" checked> Активен
                                </label>
                            </div>


                            <div class="form-group">
                                <div class="col-md-4">
                                    @include('blog.admin.banner.include.image_single_create')
                                </div>
                            </div>


                        </div>

                        <input type="hidden" id="_token" value="{{ csrf_token() }}">

                        <div class="box-footer">
                            <button type="submit" class="btn btn-success">Добавить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <!-- /.content -->




@endsection



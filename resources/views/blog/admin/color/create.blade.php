@extends('layouts.app_admin')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    @component('blog.admin.components.breadcrumb')
    @slot('title') Создание цвета @endslot
    @slot('parent') Главная @endslot
    @slot('category') Список цветов @endslot
    @slot('active') Создание цвета @endslot
    @endcomponent
</section>


<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form action="{{route('blog.admin.colors.store',$item->id)}}" method="post" data-toggle="validator">
                    @csrf
                    <div class="box-body">
                        <div class="form-group has-feedback">
                            <label for="title">Цвет (в hex формате)</label>
                            <input type="text" name="hex" class="form-control" id="ru_title" placeholder="Наименование категории" required value="{{old('hex', $item->hex ?? "")}}">
                            <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                        </div>
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#ru_lang" aria-controls="ru_lang" role="tab" data-toggle="tab">Русский перевод(обязательно)</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Английский перевод</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="ru_lang">
                                <div class="form-group has-feedback">
                                    <label for="title">Название цвета (должно в точности совпадать с таковым в 1С!!!!) (RU)</label>
                                    <input type="text" name="localization[ru][title]" class="form-control" id="ru_title" placeholder="Название цвета" required value="{{old('title', $item->title)}}">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <div class="form-group has-feedback">
                                    <label for="title">Название цвета (EN)</label>
                                    <input type="text" name="localization[en][title]" class="form-control" id="title" placeholder="Название цвета" required value="{{old('title', $item->title)}}">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                            </div>
                        </div>


                    </div>
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

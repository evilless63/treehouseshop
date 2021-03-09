@extends('layouts.app_admin')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    @component('blog.admin.components.breadcrumb')
    @slot('title') Редактирование категории {{$item->title}}@endslot
    @slot('parent') Главная @endslot
    @slot('category') Список категорий @endslot
    @slot('active') Редактирование категории {{$item->title}} @endslot
    @endcomponent
</section>


<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form action="{{route('blog.admin.posts.update', $item->id)}}" method="post" data-toggle="validator">
                    @method('PATCH')
                    @csrf
                    <div class="box-body">

                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="in_header" {{$item->for_visitors ? 'checked' : null}}> Использовать в группе "Покупателям"
                            </label>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="in_header" {{$item->about_company ? 'checked' : null}}> Использовать в группе "О компании"
                            </label>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="in_header" {{$item->status ? 'checked' : null}}> Опубликовать ?
                            </label>
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
                                    <label for="title">Заголовок статьи (RU)</label>
                                    <input type="text" name="localization[ru][title]" class="form-control" id="ru_title" placeholder="Наименование категории" required value="{{old('title', $ruLoc->title ?? "")}}">
                                    <!-- галочки при валидации справа -это
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  -->
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="keywords">Ключевые слова (RU)</label>
                                    <input type="text" name="localization[ru][keywords]" class="form-control" id="keywords" placeholder="Ключевые слова" value="{{old('keywords', $ruLoc->keywords ?? "")}}" required>

                                </div>
                                <div class="form-group">
                                    <label for="description">Описание (RU)</label>
                                    <input type="text" name="localization[ru][description]" class="form-control" id="description" placeholder="Описание" value="{{old('description', $ruLoc->description ?? "")}}" required>
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="content">Контент (RU)</label>
                                    <textarea name="localization[ru][content]" id="editor_post_ru" cols="80" rows="10">{{$enLoc->content ?? ""}}</textarea>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <div class="form-group has-feedback">
                                    <label for="title">Заголовок статьи (EN)</label>
                                    <input type="text" name="localization[en][title]" class="form-control" id="title" placeholder="Наименование категории"  value="{{old('title', $enLoc->title ?? "")}}">
                                    <!-- галочки при валидации справа -это
                  <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                  -->
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>
                                <div class="form-group">
                                    <label for="keywords">Ключевые слова (EN)</label>
                                    <input type="text" name="localization[en][keywords]" class="form-control" id="keywords" placeholder="Ключевые слова" value="{{old('keywords', $enLoc->keywords ?? "")}}">

                                </div>
                                <div class="form-group">
                                    <label for="description">Описание (EN)</label>
                                    <input type="text" name="localization[en][description]" class="form-control" id="description" placeholder="Описание" value="{{old('description', $enLoc->description ?? "")}}">
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="content">Контент (EN)</label>
                                    <textarea name="localization[en][content]" id="editor_post_en" cols="80" rows="10">{{$enLoc->content ?? ""}}</textarea>
                                </div>
                            </div>
                        </div>
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



@endsection

@extends('layouts.app_admin')

@section('content')


<section class="content-header">
    @component('blog.admin.components.breadcrumb')
    @slot('title') Редактирование продукта @endslot
    @slot('parent') Главная @endslot
    @slot('product') Список продуктов @endslot
    @slot('active') Редактирование продукта {{$product->title}} @endslot
    @endcomponent
</section>


<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form method="POST" action="{{route('blog.admin.products.update', $product->id)}}" data-toggle="validator" id="add">
                    @method('PATCH')
                    @csrf
                    <div class="box-body">

                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#ru_lang" aria-controls="ru_lang" role="tab" data-toggle="tab">Русский перевод(обязательно)</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Английский перевод</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="ru_lang">
                                <div class="form-group has-feedback">
                                    <label for="title">Наименование товара (RU)</label>
                                    <input type="text" name="localization[ru][title]" class="form-control" id="title" placeholder="Наименование товара" value="{{$ruLoc->title ?? ""}}" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>

                                <div class="form-group">
                                    <label for="keywords">Ключевые слова (RU)</label>
                                    <input type="text" name="localization[ru][keywords]" class="form-control" id="keywords" placeholder="Ключевые слова" value="{{$ruLoc->keywords ?? ""}}">
                                </div>

                                <div class="form-group">
                                    <label for="description">Описание (RU)</label>
                                    <input type="text" name="localization[ru][description]" class="form-control" id="description" placeholder="Описание" value="{{$ruLoc->description ?? ""}}">
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="content">Описание (RU)</label>
                                    <textarea name="localization[ru][content]" id="editor1" cols="80" rows="10">{{$ruLoc->content ?? ""}}</textarea>
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="details">Детали (RU)</label>
                                    <textarea name="localization[ru][details]" id="editor2" cols="80" rows="10">{{$ruLoc->details ?? ""}}</textarea>
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="composition_and_care">Состав и уход (RU)</label>
                                    <textarea name="localization[ru][composition_and_care]" id="editor3" cols="80" rows="10">{{$ruLoc->composition_and_care ?? ""}}</textarea>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <div class="form-group has-feedback">
                                    <label for="title">Наименование товара (EN)</label>
                                    <input type="text" name="localization[en][title]" class="form-control" id="title" placeholder="Наименование товара" value="{{$enLoc->title ?? ""}}" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>

                                <div class="form-group">
                                    <label for="keywords">Ключевые слова (EN)</label>
                                    <input type="text" name="localization[en][keywords]" class="form-control" id="keywords" placeholder="Ключевые слова" value="{{$enLoc->keywords ?? ""}}">
                                </div>

                                <div class="form-group">
                                    <label for="description">Описание (EN)</label>
                                    <input type="text" name="localization[en][description]" class="form-control" id="description" placeholder="Описание" value="{{$enLoc->description ?? ""}}">
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="content">Описание (EN)</label>
                                    <textarea name="localization[en][content]" id="editor4" cols="80" rows="10">{{$enLoc->content ?? ""}}</textarea>
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="details">Детали (EN)</label>
                                    <textarea name="localization[en][details]" id="editor5" cols="80" rows="10">{{$enLoc->details ?? ""}}</textarea>
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="composition_and_care">Состав и уход (EN)</label>
                                    <textarea name="localization[en][composition_and_care]" id="editor6" cols="80" rows="10">{{$enLoc->composition_and_care ?? ""}}</textarea>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="title">Категория товара</label>
                            <select name="parent_id" id="parent_id" class="form-control" required>
                                <option disabled>-- выберите категорию --</option>

                                @include('blog.admin.product.include.categories_for_prod',['categories' => $categories])

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="description">Артикул</label>
                            <input type="text" name="sku" class="form-control" id="sku" placeholder="Артикул" value="{{$product->sku}}">
                        </div>

                        <div class="form-group">
                            <label for="description">Вес (кг)</label>
                            <input type="number" step="0.01" name="weight" class="form-control" id="weight" placeholder="Вес" value="{{$product->weight}}">
                        </div>

                        <div class="form-group">
                            <label for="description">Длина (м)</label>
                            <input type="number" step="0.01" name="dimension_x" class="form-control" id="dimension_x" placeholder="Длина" value="{{$product->dimension_x}}">
                        </div>

                        <div class="form-group">
                            <label for="description">Ширина (м)</label>
                            <input type="number" step="0.01" name="dimension_y" class="form-control" id="dimension_y" placeholder="Ширина" value="{{$product->dimension_y}}">
                        </div>

                        <div class="form-group">
                            <label for="description">Высота (м)</label>
                            <input type="number" step="0.01" name="dimension_z" class="form-control" id="dimension_z" placeholder="Высота" value="{{$product->dimension_z}}">
                        </div>

                        <div class="form-group has-feedback">
                            <label for="price">Цена</label>
                            <input type="text" name="price" class="form-control" id="price" placeholder="Цена" pattern="^[0-9.]{1,}$" value="{{$product->price}}" required data-error="Допускаются цифры и десятичная точка">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="old_price">Цена</label>
                            <input type="text" name="old_price" class="form-control" id="old_price" placeholder="Старая цена" pattern="^[0-9.]{1,}$" value="{{$product->old_price}}" data-error="Допускаются цифры и десятичная точка">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="status" {{$product->status ? 'checked' : null}}> Показывать на сайте
                            </label>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="is_new" {{$product->is_new ? 'checked' : null}}> Новинка
                            </label>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="hit" {{$product->hit ? 'checked' : null}}> Бестселлер
                            </label>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="related">Связанные товары</label>
                            <p><small>Начните вводить наименование товара...</small></p>
                            <select name="related[]" class="select2 form-control" id="related" multiple>

                                @if (!empty($related_products))
                                @foreach($related_products as $prod)
                                <option value="{{$prod->related_id}}" selected>
                                    {{$prod->title}}
                                </option>
                                @endforeach
                                @endif

                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="related">Фильтры продукта</label>
                            {{ Widget::run('filter',
                            [
                            'tpl' => 'widgets.filter',
                            'filter' => $filter,
                            ])
                        }}
                        </div>
                        <div class="form-group">
                            <div class="col-md-4">
                                @include('blog.admin.product.include.image_single_edit',['product' => $product])
                            </div>

                            <div class="col-md-8">
                                @include('blog.admin.product.include.image_gallery_edit',['images' => $images])
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
<div class='hidden' data-name='{{$id}}'></div>

@endsection

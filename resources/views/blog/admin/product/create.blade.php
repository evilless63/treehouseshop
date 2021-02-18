@extends('layouts.app_admin')

@section('content')


<section class="content-header">
    @component('blog.admin.components.breadcrumb')
    @slot('title') Добавление нового товара @endslot
    @slot('parent') Главная @endslot
    @slot('product') Список заказов @endslot
    @slot('active') Новый товар @endslot
    @endcomponent
</section>


<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form method="POST" action="{{route('blog.admin.products.store',$item->id)}}" data-toggle="validator" id="add">
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
                                    <input type="text" name="localization[ru][title]" class="form-control" id="title" placeholder="Наименование товара" value="{{old('title')}}" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>

                                <div class="form-group">
                                    <label for="keywords">Ключевые слова (RU)</label>
                                    <input type="text" name="localization[ru][keywords]" class="form-control" id="keywords" placeholder="Ключевые слова" value="{{old('keywords')}}">
                                </div>

                                <div class="form-group">
                                    <label for="description">Описание (RU)</label>
                                    <input type="text" name="localization[ru][description]" class="form-control" id="description" placeholder="Описание" value="{{old('description')}}">
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="content">Описание (RU)</label>
                                    <textarea name="localization[ru][content]" id="editor1" cols="80" rows="10">{{old('content')}}</textarea>
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="details">Детали (RU)</label>
                                    <textarea name="localization[ru][details]" id="editor2" cols="80" rows="10">{{old('details')}}</textarea>
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="composition_and_care">Состав и уход (RU)</label>
                                    <textarea name="localization[ru][composition_and_care]" id="editor3" cols="80" rows="10">{{old('composition_and_care')}}</textarea>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                            <div class="form-group has-feedback">
                                    <label for="title">Наименование товара (EN)</label>
                                    <input type="text" name="localization[en][title]" class="form-control" id="title" placeholder="Наименование товара" value="{{old('title')}}" required>
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>

                                <div class="form-group">
                                    <label for="keywords">Ключевые слова (EN)</label>
                                    <input type="text" name="localization[en][keywords]" class="form-control" id="keywords" placeholder="Ключевые слова" value="{{old('keywords')}}">
                                </div>

                                <div class="form-group">
                                    <label for="description">Описание (EN)</label>
                                    <input type="text" name="localization[en][description]" class="form-control" id="description" placeholder="Описание" value="{{old('description')}}">
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="content">Описание (EN)</label>
                                    <textarea name="localization[en][content]" id="editor4" cols="80" rows="10">{{old('content')}}</textarea>
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="details">Детали (EN)</label>
                                    <textarea name="localization[en][details]" id="editor5" cols="80" rows="10">{{old('details')}}</textarea>
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="composition_and_care">Состав и уход (EN)</label>
                                    <textarea name="localization[en][composition_and_care]" id="editor6" cols="80" rows="10">{{old('composition_and_care')}}</textarea>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <select name="parent_id" id="parent_id" class="form-control" required>
                                <option>-- выберите категорию --</option>

                                @include('blog.admin.category.include.edit_categories_all_list',['categories' => $categories])

                            </select>
                        </div>

                        <div class="form-group">
                            <label for="description">Артикул</label>
                            <input type="text" name="sku" class="form-control" id="sku" placeholder="Артикул" value="{{old('sku')}}">
                        </div>

                        <div class="form-group">
                            <label for="description">Вес (кг)</label>
                            <input type="number" step="0.01" name="weight" class="form-control" id="weight" placeholder="Вес" value="{{old('weight')}}">
                        </div>

                        <div class="form-group">
                            <label for="description">Длина (м)</label>
                            <input type="number" step="0.01" name="dimension_x" class="form-control" id="dimension_x" placeholder="Длина" value="{{old('dimension_x')}}">
                        </div>

                        <div class="form-group">
                            <label for="description">Ширина (м)</label>
                            <input type="number" step="0.01" name="dimension_y" class="form-control" id="dimension_y" placeholder="Ширина" value="{{old('dimension_y')}}">
                        </div>

                        <div class="form-group">
                            <label for="description">Высота (м)</label>
                            <input type="number" step="0.01" name="dimension_z" class="form-control" id="dimension_z" placeholder="Высота" value="{{old('dimension_z')}}">
                        </div>

                        <div class="form-group has-feedback">
                            <label for="price">Цена</label>
                            <input type="text" name="price" class="form-control" id="description" placeholder="Цена" pattern="^[0-9.]{1,}$" value="{{old('price')}}" required data-error="Допускаются цифры и десятичная точка">
                            <div class="help-block with-errors"></div>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="old_price">Цена</label>
                            <input type="text" name="old_price" class="form-control" id="description" placeholder="Старая цена" pattern="^[0-9.]{1,}$" value="{{old('old_price')}}" data-error="Допускаются цифры и десятичная точка">
                            <div class="help-block with-errors"></div>
                        </div>



                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="status" checked> Показывать на сайте
                            </label>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="hit"> Бестселлер
                            </label>
                        </div>

                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="is_new" checked> Новинка
                            </label>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="related">Связанные товары</label>
                            <p><small>Начните вводить наименование товара...</small></p>
                            <select name="related[]" class="select2 form-control" id="related" multiple></select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="related">Фильтры продукта</label>
                            {{ Widget::run('filter',['tpl' => 'widgets.filter','filter' => null, ])}}

                        </div>


                        <div class="form-group">
                            <div class="col-md-4">
                                @include('blog.admin.product.include.image_single_create')
                            </div>

                            <div class="col-md-8">
                                @include('blog.admin.product.include.image_gallery_create')
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
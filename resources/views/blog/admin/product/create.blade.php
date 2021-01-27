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
                    <form method="POST"  action="{{route('blog.admin.products.store',$item->id)}}" data-toggle="validator" id="add">
                        @csrf

                        <div class="box-body">
                            <div class="form-group has-feedback">
                                <label for="title">Наименование товара</label>
                                <input type="text" name="title" class="form-control" id="title" placeholder="Наименование товара" value="{{old('title')}}" required>
                                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                            </div>

                            <div class="form-group">
                                <select name="parent_id" id="parent_id" class="form-control" required>
                                    <option>-- выберите категорию --</option>

                                    @include('blog.admin.category.include.edit_categories_all_list',['categories' => $categories])

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="keywords">Ключевые слова</label>
                                <input type="text" name="keywords" class="form-control" id="keywords" placeholder="Ключевые слова" value="{{old('keywords')}}">
                            </div>

                            <div class="form-group">
                                <label for="description">Описание</label>
                                <input type="text" name="description" class="form-control" id="description" placeholder="Описание" value="{{old('description')}}">
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

                            <div class="form-group has-feedback">
                                <label for="content">Контент</label>
                                <textarea name="content" id="editor1" cols="80" rows="10">{{old('content')}}</textarea>
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



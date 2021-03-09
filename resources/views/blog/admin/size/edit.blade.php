@extends('layouts.app_admin')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    @component('blog.admin.components.breadcrumb')
    @slot('title') Редактирование размера {{$item->title}}@endslot
    @slot('parent') Главная @endslot
    @slot('category') Список размеров @endslot
    @slot('active') Редактирование размера {{$item->title}} @endslot
    @endcomponent
</section>


<!-- Main content -->
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <form action="{{route('blog.admin.sizes.update', $item->id)}}" method="post" data-toggle="validator">
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
                                    <label for="title">Название размера (не редактируется, берется из 1с) (RU)</label>
                                    <input disabled type="text" name="localization[ru][title]" class="form-control" id="ru_title" placeholder="Название цвета" required value="{{old('title', $ruLoc->title ?? "")}}">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                                </div>

                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <div class="form-group has-feedback">
                                    <label for="title">Название размера (EN)</label>
                                    <input type="text" name="localization[en][title]" class="form-control" id="title" placeholder="Название цвета"  value="{{old('title', $enLoc->title ?? "")}}">
                                    <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
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

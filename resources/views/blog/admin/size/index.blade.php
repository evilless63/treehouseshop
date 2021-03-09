
@extends('layouts.app_admin')

@section('content')


    <section class="content-header">
        @component('blog.admin.components.breadcrumb')
            @slot('title') Список размеров @endslot
            @slot('parent') Главная @endslot
            @slot('active') Список размеров @endslot
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
                                    <th>Действия</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sizes as $size)

                                    <tr>
                                        <td>{{$size->id}}</td>
                                        <td>{{$size->localization->title}}</td>
                                        <td>
                                            <a href="{{route('blog.admin.sizes.edit',$size->id)}}" title="Редактировать"><i class="fa fa-fw fa-eye"></i></a>
                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="text-center">
                            <p>{{count($sizes)}} размеров из {{$count}} </p>

                            @if ($sizes->total() > $sizes->count())
                                <br>
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                {{$sizes->links()}}
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

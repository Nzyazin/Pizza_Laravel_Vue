@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Пицца</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Пицца</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid overflow-auto">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('pizza.create') }}" class="btn btn-primary">Добавить</a>
                            </div>

                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Наименование</th>
                                        <th>Ингредиенты</th>
                                        <th>Картинка</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($pizzas as $pizza)
                                        <tr>
                                            <td>{{ $pizza->id }}</td>
                                            <td><a href="{{ route('pizza.show', $pizza->id) }}">{{ $pizza->title }}</a></td>
                                            <td>{{ $pizza->description }}</td>
                                            <td><img style="max-width: 96px;" src="http://zyazinng.beget.tech/storage/{{ $pizza->preview_image }}"></td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

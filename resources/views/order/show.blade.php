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
                        <li class="breadcrumb-item">Главная</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-header d-flex p-3">
                                            <div class="mr-4">
                                                <a href="{{ route('pizza.edit', $pizzas->id) }}" class="btn btn-primary">Редактировать</a>
                                            </div>
                                            <form action="{{ route('pizza.delete', $pizzas->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" class="btn btn-danger" value="Удалить">
                                            </form>
                                        </div>

                                        <div class="card-body table-responsive p-0">
                                            <table class="table table-hover text-nowrap">
                                                <tbody>
                                                    <tr>
                                                        <td>ID</td>
                                                        <td>{{ $pizzas->id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Наименование</td>
                                                        <td>{{ $pizzas->title }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Описание</td>
                                                        <td>{{ $pizzas->description }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Картинка</td>
                                                        <td>{{ $pizzas->preview_image }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Цена</td>
                                                        <td>{{ $pizzas->price }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Старая цена</td>
                                                        <td>{{ $pizzas->old_price }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Добавлен</td>
                                                        <td>{{ $pizzas->is_published }}</td>
                                                    </tr>
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
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

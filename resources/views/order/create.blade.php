@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить заказ</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Заказы</li>
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
                <form action="{{ route('order.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="user_id" class="form-control" placeholder="ИД клиента">
                    </div>
                    <div class="form-group">
                        <table class="table table-hover text-nowrap">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Наименование</th>
                                <th>Описание</th>
                                <th>Картинка</th>
                                <th>Цена</th>
                                <th>Количество</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pizzas as $pizza)
                                <tr>
                                    <td data-id={{$pizza->id}}>{{ $pizza->id }}</td>
                                    <td><a href="{{ route('pizza.show', $pizza->id) }}">{{ $pizza->title }}</a></td>
                                    <td>{{ $pizza->description }}</td>
                                    <td>{{ $pizza->preview_image }}</td>
                                    <td>{{ $pizza->price }}</td>
                                    <td></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="form-group">
                        <input type="text" name="payment_status" class="form-control" placeholder="Статус заказа">
                    </div>
                    <div class="form-group">
                        <input type="text" name="total_price" class="form-control" placeholder="Общая стоимость">
                    </div>                  
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection

@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать заказ</h1>
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
                <form action="{{ route('order.update', $orders->id) }}" method="post">
                    @csrf
                    @method('patch')
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
                                    <td name="">{{ $pizza->id }}</td>
                                    <td name=""><a href="{{ route('pizza.show', $pizza->id) }}">{{ $pizza->title }}</a></td>
                                    <td name="">{{ $pizza->description }}</td>
                                    <td name=""><img style="max-width: 96px;" src="http://admin.pizza.local/storage/{{ $pizza->preview_image }}"></td>
                                    <td name="">{{ $pizza->price }}</td>
                                    <td><input type="text" name="products[quantity][]" class="form-control" placeholder="Количество"></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>              
                    <div class="form-group">                        
                        <select name="payment_status" class="custom-select" id="exampleSelectRounded0">
                            <option disabled selected>Статус</option>
                            <option {{ old('payment_status') == 1 ? 'selected' : '' }} value="1">Оплачено</option>
                            <option {{ old('payment_status') == 0 ? 'selected' : '' }} value="0">Не оплачено</option>
                        </select>
                    </div>                     
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Редактировать">
                    </div>
                </form>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->    
@endsection

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
                        <input type="text" value="{{ old("name") }}" name="name" class="form-control" placeholder="Имя">
                    </div>
                    <div class="form-group">
                        <input type="date" value="{{ old("date_of_birth") }}" name="date_of_birth" class="form-control" placeholder="Дата рождения">
                    </div>
                    <div class="form-group">
                        <input type="tel" value="{{ old("mob_number") }}" name="mob_number" class="form-control" placeholder="Сотовый телефон">
                    </div>
                    <div class="form-group">
                        <input type="text" value="{{ old("address") }}" name="address" class="form-control" placeholder="Адрес">
                    </div>
                    <div class="form-group">                        
                        <select name="payment_status" class="custom-select" id="exampleSelectRounded0">
                            <option disabled selected>Статус</option>
                            <option {{ old('payment_status') == 1 ? 'selected' : '' }} value="1">Оплачено</option>
                            <option {{ old('payment_status') == 0 ? 'selected' : '' }} value="0">Не оплачено</option>
                        </select>
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
                                    <td>{{ $pizza->id }}</td>
                                    <td><a href="{{ route('pizza.show', $pizza->id) }}">{{ $pizza->title }}</a></td>
                                    <td>{{ $pizza->description }}</td>
                                    <td><img style="max-width: 96px;" src="http://admin.pizza.local/storage/{{ $pizza->preview_image }}"></td>
                                    <td>{{ $pizza->price }}</td>
                                    <td><input type="text" name="products[quantity][]" class="form-control" placeholder="Количество"></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
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

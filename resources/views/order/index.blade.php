@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Заказы</h1>
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
        <div class="container-fluid overflow-auto">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <a href="{{ route('order.create') }}" class="btn btn-primary">Добавить</a>
                            </div>

                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID заказа</th>
                                        <th>Заказчик</th>
                                        <th>Статус оплаты</th>
                                        <th>Продукты</th>
                                        <th>Общая стоимость</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    
                                    @foreach($orders as $order)                                                                    
                                        <tr>
                                            <td><a href="{{ route('order.show', $order->id) }}">{{ $order->id }}</a></td>
                                            <td><a href="{{ route('user.show', $order->user_id) }}">@foreach($users as $user) @if($order->user_id == $user->id ) {{ $user->name; }} @endif @endforeach</td>
                                            <td>{{ $order->statusTitle }}</a></td>
                                            <td>@for($i = 0; $i < count($order->products); $i++)<a href="{{ route('pizza.show', $order->products[$i]['product']['id']) }}">{{ substr(print_r($order->products[$i]['product']['title']), 0, -1) }}</a> : шт. {{ substr(print_r($order->products[$i]['quantity']), 0, -1) }};<br> @endfor</a></td>
                                            <td>{{ $order->total_price }} Р</a></td>
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

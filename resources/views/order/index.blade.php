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
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="row">
                    <div class="col-12">
                        <div class="card">


                            <div class="card-body table-responsive p-0">
                                <table class="table table-hover text-nowrap">
                                    <thead>
                                    <tr>
                                        <th>ID заказа</th>
                                        <th>ID пользователя</th>
                                        <th>Статус оплаты</th>
                                        <th>Продукты</th>
                                        <th>Общая стоимость</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach(dd($orders) as $order)
                                        <tr>
                                            <td>{{ $order->id }}</td>
                                            <td><a href="{{ route('user.show', $order->user_id) }}">{{ $order->user_id }}</td>
                                            <td>{{ $order->payment_status }}</a></td>
                                            <td>{{ count(explode(' ', $order->products)) }}</a></td>
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

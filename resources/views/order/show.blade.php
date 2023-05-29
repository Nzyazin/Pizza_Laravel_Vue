@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Заказ</h1>
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
                                                <a href="{{ route('order.edit', $orders->id) }}" class="btn btn-primary">Редактировать</a>
                                            </div>
                                            <form action="{{ route('order.delete', $orders->id) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <input type="submit" class="btn btn-danger" value="Удалить">
                                            </form>
                                        </div>

                                        <div class="card-body table-responsive p-0">
                                            <table class="table table-hover text-nowrap">
                                                <tbody>
                                                    <tr>
                                                        <td>ID заказа</td>
                                                        <td>{{ $orders->id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Заказчик</td>
                                                        <td><a href="{{ route('user.show', $orders->user_id) }}">@foreach($users as $user) @if($orders->user_id == $user->id ) {{ $user->name; }} @endif @endforeach</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Продукты</td>
                                                        <td>@for($i = 0; $i < count($orders->products); $i++)<a href="{{ route('pizza.show', $orders->products[$i]['product']['id']) }}">{{ substr(print_r($orders->products[$i]['product']['title']), 0, -1) }}</a> : шт. {{ substr(print_r($orders->products[$i]['quantity']), 0, -1) }};<br> @endfor</a></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Общая стоимость</td>
                                                        <td>{{ $orders->total_price }} Р</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Статус оплаты</td>
                                                        <td>{{ $orders->statusTitle }}</td>
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

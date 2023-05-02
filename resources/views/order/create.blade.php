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
                        <div class="col-12 product-image-thumbs">
                            @foreach($orders as $order)
                                <div>
                                    <div class="product-image-thumb active">                                
                                        <img src="{{}}" alt="Product Image">                
                                    </div>
                                    <div class="input-group quantity_goods">
                                        <input type="number" step="1" min="1" max="10" id="num_count" name="quantity" value="1" title="Qty">
                                        <input type="button" value="-" id="button_minus">
                                        <input type="button" value="+" id="button_plus">
                                    </div>  
                                </div>        
                            @endforeach
                                                                          
                            <div class="product-image-thumb">
                                <img src="../../dist/img/prod-2.jpg" alt="Product Image">
                            </div>
                            <div class="product-image-thumb">
                                <img src="../../dist/img/prod-3.jpg" alt="Product Image">
                            </div>
                            <div class="product-image-thumb">
                                <img src="../../dist/img/prod-4.jpg" alt="Product Image">
                            </div>
                            <div class="product-image-thumb">
                                <img src="../../dist/img/prod-5.jpg" alt="Product Image">
                            </div>
                        </div>
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

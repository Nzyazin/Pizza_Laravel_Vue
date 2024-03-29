@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Редактировать продукт</h1>
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
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <form action="{{ route('pizza.update', $pizzas->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" value="{{ $pizzas->title }}" placeholder="Наименование">
                    </div>
                    <div class="form-group">
                        <textarea name="description" class="form-control" cols="30" rows="10" id="myTextarea" placeholder="Описание"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="text" name="price" class="form-control" value="{{ $pizzas->price }}" placeholder="Цена">
                    </div>
                    <div class="form-group">
                        <input type="text" name="old_price" class="form-control" value="{{ $pizzas->old_price }}" id="exampleInputFile" placeholder="Старая цена">
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="custom-file">
                                <input name="preview_image" type="file" class="custom-file-input" >
                                <label class="custom-file-label" for="exampleInputFile" value="{{ $pizzas->preview_image }}">Выберите файл</label>
                            </div>
                        </div>
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
    <script>
        document.getElementById("myTextarea").defaultValue = "{{ $pizzas->description }}";
    </script>
@endsection

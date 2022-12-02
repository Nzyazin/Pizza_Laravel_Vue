@extends('layouts.main')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Клиенты</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">Пользователи</li>
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
                                                <a href="{{ route('user.edit', $users->id) }}" class="btn btn-primary">Редактировать</a>
                                            </div>
                                            <form actio="{{ route('user.delete', $users->id) }}" method="post">
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
                                                        <td>{{ $users->id }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Имя</td>
                                                        <td>{{ $users->name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Создан</td>
                                                        <td>{{ $users->created_at }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Обновлен</td>
                                                        <td>{{ $users->updated_at }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>День рождения</td>
                                                        <td>{{ $users->date_of_birth }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Телефон</td>
                                                        <td>{{ $users->mob_number }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Адрес</td>
                                                        <td>{{ $users->address }}</td>
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

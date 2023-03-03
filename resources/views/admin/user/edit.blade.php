@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
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
                    <div class="col-12">
                        <h6>
                            Редактирование пользователя
                        </h6>
                    </div>
                    <div class="col-12">
                        <form action=" {{ route('admin.user.update', $user->id) }} " method="post" class="col-4">
                            @csrf
                            @method('PATCH')
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" value="{{ $user->name }}">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" value="{{ $user->email }}">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <select class="form-control w-50" name="role">
                                @foreach($roles as $id => $role)
                                    <option
                                        value="{{ $id }}" {{ $id == $user->role ? ' selected' : "" }}> {{ $role}} </option>
                                @endforeach
                            </select>
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                            <div class="form-group mt-3">
                                <input type="submit" value="Отправить" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection

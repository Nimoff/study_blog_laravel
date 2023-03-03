@extends('admin.layouts.main')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Посты</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Пост</li>
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
                            Добавление постов
                        </h6>
                    </div>
                    <div class="col-12">
                        <form action="{{ route('admin.post.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group col-4">
                                <input type="text" name="title" class="form-control"
                                       placeholder="Наименование категории" value=" {{ old('title') }} ">
                                @error('title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <textarea id="summernote" name="content">{{ old('content') }}</textarea>
                            </div>
                            @error('content')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="form-group w-50">
                                <label for="exampleInputFile">Добавить изображение превью</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="preview_image">
                                        <label class="custom-file-label" for="exampleInputFile">Выбрать файл</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                </div>
                                @error('preview_image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group w-50">
                                <label for="exampleInputFile">Добавить главное изображение</label>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="main_image">
                                        <label class="custom-file-label" for="exampleInputFile">Выбрать файл</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                </div>
                                @error('main_image')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <select class="form-control w-50" name="category_id">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $category->id == old('category_id') ? ' selected' : "" }}> {{ $category->title }} </option>
                                @endforeach
                            </select>
                            <div class="form-group mt-3">
                                <select class="select2 w-50" multiple="multiple" name="tag_ids[]"
                                        data-placeholder="Выберите теги">
                                    @foreach($tags as $tag)
                                        <option value="{{ $tag->id }}" {{ is_array(old('tag_ids')) && in_array($tag->id,  old('tag_ids')) ? ' selected' : '' }}>{{ $tag->title }}</option>
                                    @endforeach
                                </select>
                            </div>
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

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
                            Редактирование поста
                        </h6>
                    </div>
                    <div class="col-12">
                        <form action=" {{ route('admin.post.update', $post->id) }} " method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                            <div class="form-group col-4">
                                <input type="text" name="title" class="form-control"
                                       placeholder="Наименование категории" value=" {{ $post->title }} ">
                            </div>
                            <div class="form-group">
                                <textarea id="summernote" name="content">{{ $post->content }}</textarea>
                            </div>
                            <div class="form-group w-50">
                                <label for="exampleInputFile">Изменить изображение превью</label>
                                <div>
                                    <img src=" {{ asset('storage/'. $post->preview_image) }} " alt="" class="w-50">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="preview_image">
                                        <label class="custom-file-label" for="exampleInputFile">Выбрать файл</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group w-50">
                                <label for="exampleInputFile">Изменить главное изображение</label>
                                <div>
                                    <img src=" {{ asset('storage/'. $post->main_image) }} " alt="" class="w-50">
                                </div>
                                <div class="input-group">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="main_image">
                                        <label class="custom-file-label" for="exampleInputFile">Выбрать файл</label>
                                    </div>
                                    <div class="input-group-append">
                                        <span class="input-group-text">Загрузка</span>
                                    </div>
                                </div>
                            </div>
                            <select class="form-control w-50" name="category_id">
                                @foreach($categories as $category)
                                    <option
                                        value="{{ $category->id }}" {{ $category->id == $post->category_id ? ' selected' : ''}} > {{ $category->title }} </option>
                                @endforeach
                            </select>
                            <div class="form-group mt-3">
                                <select class="select2 w-50" multiple="multiple" name="tag_ids[]"
                                        data-placeholder="Выберите теги">
                                    @foreach($tags as $tag)
                                        <option
                                            value="{{ $tag->id }}" {{ is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? ' selected' : '' }}>{{ $tag->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
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

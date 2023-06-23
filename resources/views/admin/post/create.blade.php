@extends('layouts.admin_layouts')
@section('title', 'Добавить статью')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить статью</h1>
                </div><!-- /.col -->
                @if (session('success'))
                    <div class="alert alert-success col-lg-12" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                    </div>
                @endif
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-primary">
                        <form action="{{ route('post.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Название</label>
                                    <input type="text" class="form-control" name="title" id="exampleInputEmail1"
                                        placeholder="Введите название категории" required>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-6 col-lg-12">
                                        <!-- select -->
                                        <label>Выберите категорию</label>
                                        <select class="form-control" required>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <textarea class="editor" name="text">
                                        Введите текст поста.
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="feature_image">Feature Image</label>
                                    <img src="" alt="" class="img-uploaded" style="display: block; max-width: 300px;">
                                    <input type="text" class="form-control" id="feature_image" name="feature_image" value="" readonly>
                                    <a href="" class="popup_selector btn btn-primary mt-1" data-inputid="feature_image">Select Image</a>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Добавить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content -->
@endsection

@extends('layouts.admin_layouts')
@section('title', 'Все статьи')

@section('content')

    <!-- [ Main Content ] start -->
    <section class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12 d-flex justify-content-between">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Панель администратора: показать все статьи</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home_admin') }}"><b><i
                                                class="feather icon-home"></i></b></a></li>
                                <li class="breadcrumb-item"><a href="{{ route('home_admin') }}"><b>Dashboard
                                            Analytics</b></a></li>
                                <li class="breadcrumb-item">Показать все статьи</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            <!-- [ Main Content ] start -->
            <div class="row">

                <!-- [ stiped-table ] start -->
                <div class="col-xl-12">
                    <div class="card">

                        <div class="card-body table-border-style">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Название</th>
                                            <th>Категория</th>
                                            {{-- <th>Текст</th> --}}
                                            <th>Дата создания</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($posts as $post)
                                            <tr>
                                                <td>{{ $post->id }}</td>
                                                <td>{{ $post->title }}</td>
                                                <td>{{ $post->category->title }}</td>
                                                {{-- <td>{{ $post->text }}</td> --}}
                                                <td>{{ $post->created_at }}</td>
                                                <td >
                                                    <a class="btn btn-info btn-sm mr-1"
                                                        href="{{ route('post.edit', $post->id) }}">
                                                        <i class="fas fa-pencil-alt">
                                                        </i>
                                                        Редактировать
                                                    </a>
                                                    <form action="{{ route('post.destroy', $post->id) }}"
                                                        method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm delete-btn"
                                                            href="#">
                                                            <i class="fas fa-trash"></i>
                                                            Удалить
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ stiped-table ] end -->

            </div>
            <!-- [ Main Content ] end -->
        </div>
    </section>
    <!-- [ Main Content ] end -->

@endsection

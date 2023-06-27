@extends('layouts.admin_layouts')
@section('title', 'Редактировать категорию')

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
                                <h5 class="m-b-10">Панель администратора: редактировать категорию</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home_admin') }}"><b><i
                                                class="feather icon-home"></i></b></a></li>
                                <li class="breadcrumb-item"><a href="{{ route('home_admin') }}"><b>Dashboard
                                            Analytics</b></a></li>
                                <li class="breadcrumb-item">Редактировать категорию</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->

            {{-- Success output start --}}
            @if (session('success'))
                <div class="alert alert-success col-lg-12" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check mr-2"></i>{{ session('success') }}</h4>
                </div>
            @endif
            {{-- Success output end --}}

            <!-- [ Main Content ] start -->
            <div class="row">

                <!-- [ stiped-table ] start -->
                <div class="col-xl-12">
                    <div class="card">
                        <form action="{{ route('category.update', $category->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Название</label>
                                    <input type="text" value="{{ $category['title'] }}" class="form-control"
                                        name="title" id="exampleInputEmail1" required>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Обновить</button>
                            </div>
                        </form>

                    </div>
                </div>
                <!-- [ stiped-table ] end -->

            </div>
            <!-- [ Main Content ] end -->
        </div>
    </section>
    <!-- [ Main Content ] end -->

@endsection

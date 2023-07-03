@extends('layouts.admin_layouts')
@section('title', 'Все пользователи')

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
                                <h5 class="m-b-10">Панель администратора: показать всех пользователей</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('home_admin') }}"><b><i
                                                class="feather icon-home"></i></b></a></li>
                                <li class="breadcrumb-item"><a href="{{ route('home_admin') }}"><b>Dashboard
                                            Analytics</b></a></li>
                                <li class="breadcrumb-item">Показать всех пользователей</li>
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
                                            <th>Имя</th>
                                            <th>Почта</th>
                                            {{-- <th>Текст</th> --}}
                                            <th>Статус</th>
                                            <th>Дата создания</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    @if ($user->roles->contains('id', 1))
                                                        User
                                                    @elseif ($user->roles->contains('id', 2))
                                                        Admin
                                                    @endif
                                                </td>
                                                <td>{{ $user->created_at }}</td>
                                                <td>
                                                    @php
                                                        $userId = $user->id
                                                    @endphp
                                                    <a class="btn btn-info btn-sm mr-1" href="{{ route('users-edit', $userId) }}">
                                                        <i class="fas fa-pencil-alt">
                                                        </i>
                                                        Редактировать
                                                    </a>
                                                    <form action="#" method="POST" class="d-inline">
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

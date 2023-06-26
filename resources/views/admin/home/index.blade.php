@extends('layouts.admin_layouts')
@section('title', 'Главная')

@section('content')
    <!-- [ Main Content ] start -->
    <div class="pcoded-main-container">
        <div class="pcoded-content">
            <!-- [ breadcrumb ] start -->
            <div class="page-header">
                <div class="page-block">
                    <div class="row align-items-center">
                        <div class="col-md-12">
                            <div class="page-header-title">
                                <h5 class="m-b-10">Dashboard Analytics</h5>
                            </div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-home"></i></a></li>
                                <li class="breadcrumb-item"><a href="#!">Dashboard Analytics</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ breadcrumb ] end -->
            <!-- [ Main Content ] start -->
            <div class="row">

                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning d-flex flex-column  justify-content-between">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="inner ml-2 ">
                                <h3>{{ $post_count }}</h3>
                                <p>Посты</p>
                            </div>
                            <div class="text-center mr-2 mt-3 mb-2">
                                <i class="icon feather icon-file-text text-c-red mb-1 d-block"
                                    style="font-size: 120px;"></i>
                            </div>
                        </div>

                        <a href="#" class="small-box-footer w-100">Все посты <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success d-flex flex-column  justify-content-between">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="inner ml-2 ">
                                <h3>{{ $categories_count }}</h3>
                                <p>Категории</p>
                            </div>
                            <div class="text-center mr-2 mt-3 mb-2">
                                <i class="icon feather icon-align-left text-c-yellow mb-1 d-block"
                                    style="font-size: 120px; color: #61179E;"></i>
                            </div>
                        </div>

                        <a href="#" class="small-box-footer w-100">Все категории <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info d-flex flex-column  justify-content-between">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="inner ml-2 ">
                                <h3>4</h3>
                                <p>Пользователи</p>
                            </div>
                            <div class="text-center mr-2 mt-3 mb-2">
                                <i class="icon feather icon-user text-c-red mb-1 d-block"
                                    style="font-size: 120px; color: #C0DE5D"></i>
                            </div>
                        </div>

                        <a href="#" class="small-box-footer w-100">Все посты <i
                                class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <!-- table card-1 start -->
                <div class="col-md-12 col-xl-4">
                    <div class="card flat-card">
                        <div class="row-table">
                            <div class="col-sm-6  card-body br">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="icon feather icon-file-text text-c-red mb-1 d-block"></i>
                                    </div>
                                    <div class="col-sm-8 text-md-center">
                                        <h3>Посты</h3>
                                        <h3>{{ $post_count }}</h3>

                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="icon feather icon-music text-c-red mb-1 d-block"></i>
                                    </div>
                                    <div class="col-sm-8 text-md-center">
                                        <h3>100%</h3>
                                        <span>Volume</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row-table">
                            <div class="col-sm-6 card-body br">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="icon feather icon-file-text text-c-blue mb-1 d-block"></i>
                                    </div>
                                    <div class="col-sm-8 text-md-center">
                                        <h3>{{ $post_count }}</h3>
                                        <h3>Посты</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="icon feather icon-mail text-c-yellow mb-1 d-block"></i>
                                    </div>
                                    <div class="col-sm-8 text-md-center">
                                        <h3>120</h3>
                                        <span>Mails</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- widget primary card start -->
                    <div class="card flat-card widget-primary-card">
                        <div class="row-table">
                            <div class="col-sm-3 card-body">
                                <i class="feather icon-star-on"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4>4000 +</h4>
                                <h6>Ratings Received</h6>
                            </div>
                        </div>
                    </div>
                    <!-- widget primary card end -->
                </div>
                <!-- table card-1 end -->
                <!-- table card-2 start -->
                <div class="col-md-12 col-xl-4">
                    <div class="card flat-card">
                        <div class="row-table">
                            <div class="col-sm-6 card-body br">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="icon feather icon-share-2 text-c-blue mb-1 d-block"></i>
                                    </div>
                                    <div class="col-sm-8 text-md-center">
                                        <h5>1000</h5>
                                        <span>Shares</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="icon feather icon-wifi text-c-blue mb-1 d-block"></i>
                                    </div>
                                    <div class="col-sm-8 text-md-center">
                                        <h5>600</h5>
                                        <span>Network</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row-table">
                            <div class="col-sm-6 card-body br">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="icon feather icon-rotate-ccw text-c-blue mb-1 d-block"></i>
                                    </div>
                                    <div class="col-sm-8 text-md-center">
                                        <h5>3550</h5>
                                        <span>Returns</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 card-body">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <i class="icon feather icon-shopping-cart text-c-blue mb-1 d-blockz"></i>
                                    </div>
                                    <div class="col-sm-8 text-md-center">
                                        <h5>100%</h5>
                                        <span>Order</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- widget-success-card start -->
                    <div class="card flat-card widget-purple-card">
                        <div class="row-table">
                            <div class="col-sm-3 card-body">
                                <i class="fas fa-trophy"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4>17</h4>
                                <h6>Achievements</h6>
                            </div>
                        </div>
                    </div>
                    <!-- widget-success-card end -->
                </div>
                <!-- table card-2 end -->
                <!-- Widget primary-success card start -->
                <div class="col-md-12 col-xl-4">
                    <div class="card support-bar overflow-hidden">
                        <div class="card-body pb-0">
                            <h2 class="m-0">350</h2>
                            <span class="text-c-blue">Support Requests</span>
                            <p class="mb-3 mt-3">Total number of support requests that come in.</p>
                        </div>
                        <div id="support-chart"></div>
                        <div class="card-footer bg-primary text-white">
                            <div class="row text-center">
                                <div class="col">
                                    <h4 class="m-0 text-white">10</h4>
                                    <span>Open</span>
                                </div>
                                <div class="col">
                                    <h4 class="m-0 text-white">5</h4>
                                    <span>Running</span>
                                </div>
                                <div class="col">
                                    <h4 class="m-0 text-white">3</h4>
                                    <span>Solved</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Widget primary-success card end -->



                <!-- prject ,team member start -->
                <!-- seo start -->
                <div class="col-xl-4 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h3>$16,756</h3>
                                    <h6 class="text-muted m-b-0">Visits<i class="fa fa-caret-down text-c-red m-l-10"></i>
                                    </h6>
                                </div>
                                <div class="col-6">
                                    <div id="seo-chart1" class="d-flex align-items-end"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h3>49.54%</h3>
                                    <h6 class="text-muted m-b-0">Bounce Rate<i
                                            class="fa fa-caret-up text-c-green m-l-10"></i></h6>
                                </div>
                                <div class="col-6">
                                    <div id="seo-chart2" class="d-flex align-items-end"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-6">
                                    <h3>1,62,564</h3>
                                    <h6 class="text-muted m-b-0">Products<i
                                            class="fa fa-caret-down text-c-red m-l-10"></i></h6>
                                </div>
                                <div class="col-6">
                                    <div id="seo-chart3" class="d-flex align-items-end"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- seo end -->




                










            </div>
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->
@endsection

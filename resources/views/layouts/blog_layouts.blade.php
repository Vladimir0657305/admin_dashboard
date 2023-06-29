<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Site Metas -->
<title>Cloapedia - Stylish Magazine Blog Template</title>
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="author" content="">

<!-- Site Icons -->
<link rel="shortcut icon" href="/blogs/images/favicon.ico" type="image/x-icon" />
<link rel="apple-touch-icon" href="/blogs/images/apple-touch-icon.png">

<!-- Design fonts -->
<link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,400i,500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">

<!-- Bootstrap core CSS -->
<link href="/blogs/css/bootstrap.css" rel="stylesheet">

<!-- FontAwesome Icons core CSS -->
<link href="/blogs/css/font-awesome.min.css" rel="stylesheet">

<!-- Custom styles for this template -->
<link href="/blogs/css/style.css" rel="stylesheet">

<!-- Responsive styles for this template -->
<link href="/blogs/css/responsive.css" rel="stylesheet">

<!-- Colors for this template -->
<link href="/blogs/css/colors.css" rel="stylesheet">

<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="/blogs/images/loader.gif" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">




        <div class="collapse top-search" id="collapseExample">
            <div class="card card-block">
                <div class="newsletter-widget text-center">
                    <form class="form-inline">
                        <input type="text" class="form-control" placeholder="What you are looking for?">
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                    </form>
                </div><!-- end newsletter -->
            </div>
        </div><!-- end top-search -->

        <div class="topbar-section">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-4 col-md-6 col-sm-6 hidden-xs-down">
                        <div class="topsocial">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i
                                    class="fa fa-facebook"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i
                                    class="fa fa-youtube"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Pinterest"><i
                                    class="fa fa-pinterest"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i
                                    class="fa fa-twitter"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Flickr"><i
                                    class="fa fa-flickr"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i
                                    class="fa fa-instagram"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Google+"><i
                                    class="fa fa-google-plus"></i></a>
                        </div><!-- end social -->
                    </div><!-- end col -->

                    <div class="col-lg-4 hidden-md-down">
                        <div class="topmenu text-center">
                            <ul class="list-inline">
                                <li class="list-inline-item"><a href="blog-category-01.html"><i class="fa fa-star"></i>
                                        Trends</a></li>
                                <li class="list-inline-item"><a href="blog-category-02.html"><i class="fa fa-bolt"></i>
                                        Hot Topics</a></li>
                                <li class="list-inline-item"><a href="page-contact.html"><i
                                            class="fa fa-user-circle-o"></i> Write for us</a></li>
                            </ul><!-- end ul -->
                        </div><!-- end topmenu -->
                    </div><!-- end col -->

                    {{-- LOG IN & REGISTER START ----------------------------------------------------------------------------- --}}
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="text-right">
                            @if (isset(Auth::user()->name))
                                <p>Вы вошли как {{ Auth::user()->name }}</p>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-link custom_btn_logout">
                                        <i class="feather icon-log-out m-r-5"></i>Logout</button>
                                </form>
                            @else
                                @if (Route::has('login'))
                                    <a href="{{ route('login') }}" class="mr-3"
                                        style="text-decoration: underline;">Log in</a>
                                @endif

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="">Register</a>
                                @endif
                            @endif

                        </div>
                    </div><!-- end col -->
                    {{-- LOG IN & REGISTER END -__---------------------------------------------------------------------------- --}}


                </div><!-- end row -->
            </div><!-- end header-logo -->
        </div><!-- end topbar -->

        <div class="header-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo">
                            <a href="index.html"><img src="/blogs/images/logo.png" alt=""></a>
                        </div><!-- end logo -->
                    </div>
                </div><!-- end row -->
            </div><!-- end header-logo -->
        </div><!-- end header -->

        <header class="header">
            <div class="container">
                <nav class="navbar navbar-inverse navbar-toggleable-md">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#cloapediamenu" aria-controls="cloapediamenu" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-md-center" id="cloapediamenu">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link color-pink-hover" href="index.html">Главная</a>
                            </li>
                            <li
                                class="nav-item dropdown has-submenu menu-large hidden-md-down hidden-sm-down hidden-xs-down">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown01"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Категории</a>
                                <ul class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                                    <li>
                                        <div class="mega-menu-content clearfix">
                                            <div class="tab">
                                                <button class="tablinks active"
                                                    onclick="openCategory(event, 'cat01')">Новости</button>
                                                <button class="tablinks"
                                                    onclick="openCategory(event, 'cat02')">Путешествия</button>
                                                <button class="tablinks"
                                                    onclick="openCategory(event, 'cat03')">Природа</button>
                                                <button class="tablinks"
                                                    onclick="openCategory(event, 'cat04')">Лайфстайл</button>
                                                <button class="tablinks"
                                                    onclick="openCategory(event, 'cat05')">Фотография</button>
                                            </div>

                                            <div class="tab-details clearfix">
                                                <div id="cat01" class="tabcontent active">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="single.html" title="">
                                                                        <img src="/storage/003_cartoon_vector_couple_lovers_ktqrj_2018.jpg"
                                                                            alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat">Spa</span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="single.html" title="">Top 10+
                                                                            care advice for your toenails</a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="single.html" title="">
                                                                        <img src="/storage/5daysinparis1.jpg"
                                                                            alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat">Beauty</span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="single.html" title="">The
                                                                            secret of your beauty is handmade soap</a>
                                                                    </h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="single.html" title="">
                                                                        <img src="/storage/20edd003f9cc48bfb1e6d2a43fc98753.jpg"
                                                                            alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat">Beauty</span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="single.html" title="">Benefits
                                                                            of face mask made from mud</a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="single.html" title="">
                                                                        <img src="/storage/1233505967.jpg"
                                                                            alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat">Spa</span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="single.html" title="">Relax
                                                                            with the unique warmth of candle flavor</a>
                                                                    </h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>
                                                    </div><!-- end row -->
                                                </div>
                                                <div id="cat02" class="tabcontent">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="single.html" title="">
                                                                        <img src="/storage/1679792651-659800-harold-feng-vatican-city-basilica.jpg"
                                                                            alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat">Fashion</span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="single.html" title="">2017
                                                                            summer stamp will have design models
                                                                            here</a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="single.html" title="">
                                                                        <img src="/storage/american-crow-portrait-01.jpg"
                                                                            alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat">Collections</span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="single.html" title="">Which
                                                                            color is the most suitable color for
                                                                            you?</a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="single.html" title="">
                                                                        <img src="/storage/bdab847f18eff3f84c4de868b0d6c384.webp"
                                                                            alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat">Fashion</span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="single.html" title="">Subscribe
                                                                            to these sites to keep an eye on the
                                                                            fashion</a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="single.html" title="">
                                                                        <img src="/storage/butter-cake_gooey-butter-cake-291.jpg"
                                                                            alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat">Trends</span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="single.html" title="">The most
                                                                            trends of this year with color
                                                                            combination</a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>
                                                    </div><!-- end row -->
                                                </div>
                                                <div id="cat03" class="tabcontent">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="single.html" title="">
                                                                        <img src="/storage/Choice1.jpg" alt=""
                                                                            class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat">Tourism</span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="single.html" title="">I visited
                                                                            the architects of Istanbul for you</a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="single.html" title="">
                                                                        <img src="/storage/Free-man.png"
                                                                            alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat">Travel</span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="single.html" title="">Prepared
                                                                            handmade dish dish in the Netherlands</a>
                                                                    </h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="single.html" title="">
                                                                        <img src="/storage/gray-wolf-593711917-72def2bd8ba74adaae39e817bbe45113.jpg"
                                                                            alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat">City Tours</span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="single.html" title="">I
                                                                            recommend you visit the fairy chimneys</a>
                                                                    </h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="single.html" title="">
                                                                        <img src="/storage/Happy-toast.png"
                                                                            alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat">Tourism</span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="single.html" title="">One of
                                                                            the most beautiful ports in the world</a>
                                                                    </h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>
                                                    </div><!-- end row -->
                                                </div>
                                                <div id="cat04" class="tabcontent">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="single.html" title="">
                                                                        <img src="/storage/hero-image.fill.size_1248x702.v1687809371.png"
                                                                            alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat">Places</span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="single.html" title="">A
                                                                            collection of the most beautiful shop
                                                                            designs</a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="single.html" title="">
                                                                        <img src="/storage/honey-toast-186.webp"
                                                                            alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat">Designs</span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="single.html" title="">America's
                                                                            and Canada's most beautiful wine houses</a>
                                                                    </h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="single.html" title="">
                                                                        <img src="/storage/lisbonwalkingtours.jpg"
                                                                            alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat">Minimalism</span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="single.html" title="">The most
                                                                            professional ways to color your walls</a>
                                                                    </h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="single.html" title="">
                                                                        <img src="/storage/mac1header.jpg"
                                                                            alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat">Furnishings</span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="single.html" title="">Stylish
                                                                            cabinet designs and furnitures</a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>
                                                    </div><!-- end row -->
                                                </div>
                                                <div id="cat05" class="tabcontent">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="single.html" title="">
                                                                        <img src="/storage/nolathings.jpeg"
                                                                            alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat">Vegetables</span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="single.html" title="">Grilled
                                                                            vegetable with fish prepared with fish</a>
                                                                    </h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="single.html" title="">
                                                                        <img src="/storage/raccoon-posing.jpg"
                                                                            alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat">Restaurants</span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="single.html" title="">The
                                                                            world's finest and clean meat
                                                                            restaurants</a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="single.html" title="">
                                                                        <img src="/storage/shark-selfie.jpg"
                                                                            alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat">Meat foods</span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="single.html" title="">Fried
                                                                            veal and vegetable dish</a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="single.html" title="">
                                                                        <img src="/storage/tarsier-clutching-tree-branch.jpg"
                                                                            alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat">Pastas</span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="single.html" title="">Tasty
                                                                            pasta sauces and recipes</a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>
                                                    </div><!-- end row -->
                                                </div>
                                            </div><!-- end tab-details -->
                                        </div><!-- end mega-menu-content -->
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown has-submenu">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown02"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Features</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown02">
                                    <li><a class="dropdown-item" href="single.html">Single Blog <span
                                                class="hidden-md-down hidden-sm-down hidden-xs-down"><i
                                                    class="fa fa-angle-right"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="single.html">Single Default</a></li>
                                            <li><a class="dropdown-item" href="single-fullwidth.html">Single
                                                    Fullwidth</a></li>
                                            <li><a class="dropdown-item" href="single-slider.html">Single Gallery</a>
                                            </li>
                                            <li><a class="dropdown-item" href="single-video.html">Single Video</a>
                                            </li>
                                            <li><a class="dropdown-item" href="single-audio.html">Single Audio</a>
                                            </li>
                                            <li><a class="dropdown-item" href="single-no-media.html">Single No
                                                    Media</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="single.html">Blog Category <span
                                                class="hidden-md-down hidden-sm-down hidden-xs-down"><i
                                                    class="fa fa-angle-right"></i></span></a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="blog-category-01.html">Blog Category
                                                    A</a></li>
                                            <li><a class="dropdown-item" href="blog-category-02.html">Blog Category
                                                    B</a></li>
                                            <li><a class="dropdown-item" href="blog-category-03.html">Blog Category
                                                    C</a></li>
                                            <li><a class="dropdown-item" href="blog-category-04.html">Blog Category
                                                    D</a></li>
                                            <li><a class="dropdown-item" href="blog-category-05.html">Blog Category
                                                    E</a></li>
                                            <li><a class="dropdown-item" href="blog-category-06.html">Blog Category
                                                    F</a></li>
                                        </ul>
                                    </li>
                                    <li><a class="dropdown-item" href="blog-author.html">Blog Author</a></li>
                                    <li><a class="dropdown-item" href="page-contact.html">Contact Page</a></li>
                                    <li><a class="dropdown-item" href="page.html">Default Page</a></li>
                                    <li><a class="dropdown-item" href="page-fullwidth.html">Fullwidth Page</a></li>
                                    <li><a class="dropdown-item" href="page-404.html">Not Found Page</a></li>
                                    <li><a class="dropdown-item" href="page-sitemap.html">Sitemap & Archives</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-pink-hover" href="blog-category-01.html">Новости</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-red-hover" href="blog-category-02.html">Рецепты</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-aqua-hover" href="blog-category-03.html">Природа</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-green-hover" href="blog-category-04.html">Путешествия</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-yellow-hover" href="blog-category-05.html"> Дизайн</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-yellow-hover" href="blog-category-05.html"> Лайфстайл</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-grey-hover" href="blog-category-06.html">Фотография</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div><!-- end container -->
        </header><!-- end header -->







        {{-- SECTION CONTENT START ------------------------------------------------------------------------------------ --}}

        @yield('content_blog')

        {{-- SECTION CONTENT END --------------------------------------------------------------------------------------- --}}






        <footer class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <h2 class="widget-title">Recent Posts</h2>
                            <div class="blog-list-widget">
                                <div class="list-group">
                                    @foreach ($posts->take(3) as $post)
                                        <a href="single.html"
                                            class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="{{ $post->img }}" alt=""
                                                    class="img-fluid float-left">
                                                <h5 class="mb-1">{{ $post->title }}</h5>
                                                <small>{{ $post->created_at->format('d F, Y') }}</small>
                                            </div>
                                        </a>
                                    @endforeach
                                </div>
                            </div><!-- end blog-list -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <h2 class="widget-title">Popular Posts</h2>
                            <div class="blog-list-widget">
                                <div class="list-group">

                                    @foreach ($posts->skip(3)->take(3) as $post)
                                        <a href="single.html"
                                            class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-100 justify-content-between">
                                                <img src="{{ $post->img }}" alt=""
                                                    class="img-fluid float-left">
                                                <h5 class="mb-1">{{ $post->title }}</h5>
                                                <span class="rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </span>
                                            </div>
                                        </a>
                                    @endforeach

                                </div>
                            </div><!-- end blog-list -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                        <div class="widget">
                            <h2 class="widget-title">Popular Categories</h2>
                            <div class="link-widget">
                                <ul>
                                    @php
                                    dd($categories_count);
                                    @endphp
                                    @foreach ($categories_count as $category_count)
                                        <li>
                                            {{ $category_count->title }} ({{ $category_count->posts_count }})
                                        </li>
                                    @endforeach
                                </ul>

                                <ul>
                                    <li><a href="#">Новости <span>(21)</span></a></li>
                                    <li><a href="#">Рецепты <span>(15)</span></a></li>
                                    <li><a href="#">Лайфстайл <span>(31)</span></a></li>
                                    <li><a href="#">Путешествия <span>(22)</span></a></li>
                                    <li><a href="#">Дизайн <span>(66)</span></a></li>
                                    <li><a href="#">Природа <span>(11)</span></a></li>
                                    <li><a href="#">Фотография <span>(87)</span></a></li>
                                </ul>
                            </div><!-- end link-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div><!-- end row -->

                <hr class="invis1">

                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="widget">
                            <div class="footer-text text-center">
                                <a href="index.html"><img src="/blogs/images/flogo.png" alt=""
                                        class="img-fluid"></a>
                                <p>Cloapedia is a personal blog for handcrafted, cameramade photography content, fashion
                                    styles from independent creatives around the world.</p>
                                <div class="social">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom"
                                        title="Facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom"
                                        title="Twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom"
                                        title="Instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom"
                                        title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom"
                                        title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                </div>

                                <hr class="invis">

                                <div class="newsletter-widget text-center">
                                    <form class="form-inline">
                                        <input type="text" class="form-control"
                                            placeholder="Enter your email address">
                                        <button type="submit" class="btn btn-primary">Subscribe <i
                                                class="fa fa-envelope-open-o"></i></button>
                                    </form>
                                </div><!-- end newsletter -->
                            </div><!-- end footer-text -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
                        <div class="copyright">&copy; Cloapedia. Design: <a href="http://html.design">HTML
                                Design</a>.</div>
                    </div>
                </div>
            </div><!-- end container -->
        </footer><!-- end footer -->

        <div class="dmtop">Scroll to Top</div>

    </div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->
    <script src="/blogs/js/jquery.min.js"></script>
    <script src="/blogs/js/tether.min.js"></script>
    <script src="/blogs/js/bootstrap.min.js"></script>
    <script src="/blogs/js/custom.js"></script>

</body>

</html>

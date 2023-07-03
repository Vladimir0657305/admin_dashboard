<!DOCTYPE html>
<html lang="en">

<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Site Metas -->
<title>Go Blog - Stylish Magazine Blog</title>
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
<link href="/blogs/css/style.css" rel="stylesheet">
<link href="/blogs/css/responsive.css" rel="stylesheet">
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
                    {{-- @php
                        dd(Auth::user());
                    @endphp --}}
                    {{-- LOG IN & REGISTER START ----------------------------------------------------------------------------- --}}
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="text-right ">
                            @if (isset(Auth::user()->name))
                                <nav class="navbar  navbar-toggleable-md">
                                    <div class="collapse navbar-collapse justify-content-md-end">
                                        <ul class="navbar-nav">
                                            <li class="nav-item dropdown has-submenu">
                                                <div class="nav-link " data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">You entered as {{ Auth::user()->name }}</div>
                                                <ul class="dropdown-menu" aria-labelledby="dropdown02">
                                                    @if (Auth::user()->hasRole('admin'))
                                                        <li><a class="dropdown-item"
                                                                href="{{ route('home_admin') }}">Admin dashboard</a>
                                                        </li>
                                                    @endif
                                                    <li>
                                                        <form id="logout-form" action="{{ route('logout') }}"
                                                            method="POST" class="dropdown-item btn-link">
                                                            @csrf
                                                            <button type="submit"
                                                                class="btn-link custom_btn_logout">Logout</button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
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
                            <a href="{{ route('main') }}"><img src="/storage/logo.png" alt=""></a>
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
                                <a class="nav-link color-pink-hover" href="{{ route('main') }}">Главная</a>
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
                                                    onclick="openCategory(event, 'cat05')">Рецепты</button>
                                            </div>

                                            <div class="tab-details clearfix">
                                                <div id="cat01" class="tabcontent active">
                                                    <div class="row">
                                                        @foreach ($posts->where('cat_id', 1)->take(4) as $post)
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="{{ route('single_post', $post->id) }}"
                                                                            title="">
                                                                            <img src="{{ $post->img }}"
                                                                                alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span
                                                                                class="menucat">{{ $post->category->title }}</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="{{ route('single_post', $post->id) }}"
                                                                                title="">{{ $post->title }}</a>
                                                                        </h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>
                                                        @endforeach
                                                    </div><!-- end row -->
                                                </div>

                                                <div id="cat02" class="tabcontent">
                                                    <div class="row">
                                                        @foreach ($posts->where('cat_id', 3)->take(4) as $post)
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="{{ route('single_post', $post->id) }}"
                                                                            title="">
                                                                            <img src="{{ $post->img }}"
                                                                                alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span
                                                                                class="menucat">{{ $post->category->title }}</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="{{ route('single_post', $post->id) }}"
                                                                                title="">{{ $post->title }}</a>
                                                                        </h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>
                                                        @endforeach


                                                    </div><!-- end row -->
                                                </div>
                                                <div id="cat03" class="tabcontent">
                                                    <div class="row">
                                                        @foreach ($posts->where('cat_id', 6)->take(4) as $post)
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="{{ route('single_post', $post->id) }}"
                                                                            title="">
                                                                            <img src="{{ $post->img }}"
                                                                                alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span
                                                                                class="menucat">{{ $post->category->title }}</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="{{ route('single_post', $post->id) }}"
                                                                                title="">{{ $post->title }}</a>
                                                                        </h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>
                                                        @endforeach


                                                    </div><!-- end row -->
                                                </div>
                                                <div id="cat04" class="tabcontent">
                                                    <div class="row">
                                                        @foreach ($posts->where('cat_id', 5)->take(4) as $post)
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="{{ route('single_post', $post->id) }}"
                                                                            title="">
                                                                            <img src="{{ $post->img }}"
                                                                                alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span
                                                                                class="menucat">{{ $post->category->title }}</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="{{ route('single_post', $post->id) }}"
                                                                                title="">{{ $post->title }}</a>
                                                                        </h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>
                                                        @endforeach


                                                    </div><!-- end row -->
                                                </div>
                                                <div id="cat05" class="tabcontent">
                                                    <div class="row">
                                                        @foreach ($posts->where('cat_id', 2)->take(4) as $post)
                                                            <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                                <div class="blog-box">
                                                                    <div class="post-media">
                                                                        <a href="{{ route('single_post', $post->id) }}"
                                                                            title="">
                                                                            <img src="{{ $post->img }}"
                                                                                alt="" class="img-fluid">
                                                                            <div class="hovereffect">
                                                                            </div><!-- end hover -->
                                                                            <span
                                                                                class="menucat">{{ $post->category->title }}</span>
                                                                        </a>
                                                                    </div><!-- end media -->
                                                                    <div class="blog-meta">
                                                                        <h4><a href="{{ route('single_post', $post->id) }}"
                                                                                title="">{{ $post->title }}</a>
                                                                        </h4>
                                                                    </div><!-- end meta -->
                                                                </div><!-- end blog-box -->
                                                            </div>
                                                        @endforeach


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
                                            <li><a class="dropdown-item" href="{{ route('blog-category-01') }}">Blog
                                                    Category
                                                    A</a></li>
                                            <li><a class="dropdown-item" href="{{ route('blog-category-02') }}">Blog
                                                    Category
                                                    B</a></li>
                                            <li><a class="dropdown-item" href="{{ route('blog-category-03') }}">Blog
                                                    Category
                                                    C</a></li>
                                            <li><a class="dropdown-item" href="{{ route('blog-category-04') }}">Blog
                                                    Category
                                                    D</a></li>
                                            <li><a class="dropdown-item" href="{{ route('blog-category-05') }}">Blog
                                                    Category
                                                    E</a></li>
                                            <li><a class="dropdown-item" href="{{ route('blog-category-06') }}">Blog
                                                    Category
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
                                <a class="nav-link color-pink-hover"
                                    href="{{ route('blog-category-01') }}">Новости</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-red-hover"
                                    href="{{ route('blog-category-02') }}">Рецепты</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-aqua-hover"
                                    href="{{ route('blog-category-03') }}">Путешествия</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-green-hover"
                                    href="{{ route('blog-category-04') }}">Дизайн</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-yellow-hover" href="{{ route('blog-category-05') }}">
                                    Лайфстайл</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-grey-hover" href="{{ route('blog-category-06') }}">
                                    Природа</a>
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
                                        <a href="{{ route('single_post', $post->id) }}"
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
                                        <a href="{{ route('single_post', $post->id) }}"
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
                            <h2 class="widget-title">Категории</h2>
                            <div class="link-widget">
                                <ul>
                                    @foreach ($categories_count as $category_count)
                                        <li><a href="{{ route('blog-category-0' . $category_count->id) }}">{{ $category_count->title }}
                                                <span>({{ $category_count->posts_count }})</span></a></li>
                                    @endforeach
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
                                <a href="{{ route('main') }}"><img src="/storage/logo.png" alt=""
                                        class="img-fluid"></a>
                                <p>Go blog is a personal blog for handcrafted, cameramade photography content, fashion
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
                        <div class="copyright">&copy; Go Blog. Design: <a href="#">Go Blog</a>.</div>
                    </div>
                </div>
            </div><!-- end container -->
        </footer><!-- end footer -->

        <div class="dmtop" style="buttom:25px;">Scroll to Top</div>

    </div><!-- end wrapper -->

    <!-- Core JavaScript
================================================== -->
    <script src="/blogs/js/jquery.min.js"></script>
    <script src="/blogs/js/tether.min.js"></script>
    <script src="/blogs/js/bootstrap.min.js"></script>
    <script src="/blogs/js/custom.js"></script>

</body>

</html>

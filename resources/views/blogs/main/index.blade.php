@extends('layouts.blog_layouts')
@section('title', 'Главная')

@section('content_blog')

    {{-- SECTION CONTENT START ------------------------------------------------------------------------------------ --}}
    {{-- SECTION 1 START 5 POST ------------------------------------------------------------------------------------ --}}

    <section class="section first-section">
        <div class="container-fluid">
            <div class="masonry-blog clearfix">

                @foreach ($posts->take(5) as $key => $post)
                    @if ($key < 1)
                        <div class="left-side">
                            <div class="masonry-box post-media">
                                {{-- <img src="/storage/003_cartoon_vector_couple_lovers_ktqrj_2018.jpg" alt="" --}}
                                <img src="{{ $post->img }}" alt="" class="img-fluid">
                                <div class="shadoweffect">
                                    <div class="shadow-desc">
                                        <div class="blog-meta">
                                            <span class="bg-aqua"><a href="blog-category-01.html"
                                                    title="">{{ $post->category->title }}</a></span>
                                            <h4><a href="single.html" title="">{{ $post->title }}</a></h4>
                                            <small><a href="single.html" title="">24 July, 2017</a></small>
                                            <small><a href="blog-author.html" title="">by Amanda</a></small>
                                        </div><!-- end meta -->
                                    </div><!-- end shadow-desc -->
                                </div><!-- end shadow -->
                            </div><!-- end post-media -->
                        </div><!-- end left-side -->
                    @elseif($key < 2)
                        <div class="center-side">
                            <div class="masonry-box post-media">
                                {{-- <img src="/storage/5daysinparis1.jpg" alt="" class="img-fluid"> --}}
                                <img src="{{ $post->img }}" alt="" class="img-fluid">
                                <div class="shadoweffect">
                                    <div class="shadow-desc">
                                        <div class="blog-meta">
                                            <span class="bg-green"><a href="blog-category-01.html"
                                                    title="">{{ $post->category->title }}</a></span>
                                            <h4><a href="single.html" title="">{{ $post->title }}</a></h4>
                                            <small><a href="single.html" title="">24 July, 2017</a></small>
                                            <small><a href="blog-author.html" title="">by Amanda</a></small>
                                        </div><!-- end meta -->
                                    </div><!-- end shadow-desc -->
                                </div><!-- end shadow -->
                            </div><!-- end post-media -->
                        @elseif($key < 3)
                            <div class="masonry-box small-box post-media">
                                {{-- <img src="/storage/5896103449_fa2c7a168d_b.jpg" alt="" class="img-fluid"> --}}
                                <img src="{{ $post->img }}" alt="" class="img-fluid">
                                <div class="shadoweffect">
                                    <div class="shadow-desc">
                                        <div class="blog-meta">
                                            <span class="bg-green"><a href="blog-category-01.html"
                                                    title="">{{ $post->category->title }}</a></span>
                                            <h4><a href="single.html" title="">{{ $post->title }}</a></h4>
                                        </div><!-- end meta -->
                                    </div><!-- end shadow-desc -->
                                </div><!-- end shadow -->
                            </div><!-- end post-media -->
                        @elseif($key < 4)
                            <div class="masonry-box small-box post-media">
                                {{-- <img src="/storage/hero-image.fill.size_1248x702.v1687809371.png" alt="" --}}
                                <img src="{{ $post->img }}" alt="" class="img-fluid">
                                <div class="shadoweffect">
                                    <div class="shadow-desc">
                                        <div class="blog-meta">
                                            <span class="bg-green"><a href="blog-category-01.html"
                                                    title="">{{ $post->category->title }}</a></span>
                                            <h4><a href="single.html" title="">{{ $post->title }}</a></h4>
                                        </div><!-- end meta -->
                                    </div><!-- end shadow-desc -->
                                </div><!-- end shadow -->
                            </div><!-- end post-media -->
                        </div><!-- end left-side -->
                    @else
                        <div class="right-side hidden-md-down">
                            <div class="masonry-box post-media">
                                <img src="{{ $post->img }}" alt="" class="img-fluid">
                                <div class="shadoweffect">
                                    <div class="shadow-desc">
                                        <div class="blog-meta">
                                            <span class="bg-aqua"><a href="blog-category-01.html"
                                                    title="">{{ $post->category->title }}</a></span>
                                            <h4><a href="single.html" title="">{{ $post->title }}</a></h4>
                                            <small><a href="single.html" title="">03 July, 2017</a></small>
                                            <small><a href="blog-author.html" title="">by Jessica</a></small>
                                        </div><!-- end meta -->
                                    </div><!-- end shadow-desc -->
                                </div><!-- end shadow -->
                            </div><!-- end post-media -->
                        </div><!-- end right-side -->
                    @endif
                @endforeach

            </div><!-- end masonry -->
        </div>
    </section>
    {{-- SECTION 1 END  ------------------------------------------------------------------------------------ --}}

    {{-- SECTION 2 START 2 POSTS ------------------------------------------------------------------------------------ --}}
    <section class="section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    @foreach ($posts->skip(5)->take(2) as $key => $post)
                        <div class="section-title">
                            <h3 class="color-aqua"><a href="blog-category-01.html"
                                    title="">{{ $post->category->title }}</a></h3>
                        </div><!-- end title -->

                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="single.html" title="">
                                            {{-- <img src="/storage/business-blog-politic-news-image-2.jpg" alt=""class="img-fluid"> --}}
                                            <img src="{{ $post->img }}" alt=""class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta big-meta">
                                        <h4><a href="single.html" title="">{{ $post->title }}</a></h4>
                                        <p>{{ Str::limit(strip_tags($post->text), 160) }}</p>
                                        <a href="#">Read More </a> <br>
                                        <small><a href="blog-category-01.html"
                                                title="">{{ $post->category->title }}</a></small>
                                        <small><a href="single.html"
                                                title="">{{ $post->created_at->format('d F, Y') }}</a></small>
                                        <small><a href="blog-author.html" title="">by Amanda</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->

                                <hr class="invis">


                            </div><!-- end col -->
                        </div><!-- end row -->
                    @endforeach
                </div><!-- end col -->
                {{-- SECTION 2 END ------------------------------------------------------------------------------------ --}}

                {{-- SECTION 3 START ------------------------------------------------------------------------------------ --}}
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="row">

                        @foreach ($posts->skip(7)->take(4) as $post)
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="blog-box">
                                    <div class="section-title">
                                        <h3 class="color-pink"><a href="blog-category-01.html"
                                                title="">{{ $post->category->title }}</a>
                                        </h3>
                                    </div><!-- end title -->
                                    <div class="post-media">
                                        <a href="single.html" title="">
                                            <img src="{{ $post->img }}" alt="" class="img-fluid">
                                            <div class="hovereffect">
                                                <span></span>
                                            </div><!-- end hover -->
                                        </a>
                                    </div><!-- end media -->
                                    <div class="blog-meta">
                                        <h4><a href="single.html" title="">{{ $post->title }}</a></h4>
                                        <small><a href="blog-category-01.html"
                                                title="">{{ $post->category->title }}</a></small>
                                        <small><a href="blog-category-01.html"
                                                title="">{{ $post->created_at->format('d F, Y') }}</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                                {{-- <hr class="invis"> --}}
                            </div>
                        @endforeach

                    </div><!-- end row -->
                </div><!-- end col -->
            </div><!-- end row -->
            {{-- SECTION 3 END ------------------------------------------------------------------------------------ --}}

            <hr class="invis1">


            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="banner-spot clearfix">
                        <div class="banner-img">
                            <img src="/storage/banner_01.jpg" alt="" class="img-fluid">
                        </div><!-- end banner-img -->
                    </div><!-- end banner -->
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="invis1">

            {{-- SECTION 4 START 3 POSTS ------------------------------------------------------------------------------------ --}}
            <div class="row">
                <div class="col-lg-9">
                    <div class="blog-list clearfix">
                        @foreach ($posts->skip(11)->take(3) as $post)
                            <div class="section-title">
                                <h3 class="color-green"><a href="blog-category-01.html"
                                        title="">{{ $post->category->title }}</a>
                                </h3>
                            </div><!-- end title -->

                            <div class="blog-box row">
                                <div class="col-md-4">
                                    <div class="post-media">
                                        <a href="single.html" title="">
                                            <img src="{{ $post->img }}" alt="" class="img-fluid">
                                            <div class="hovereffect"></div>
                                        </a>
                                    </div><!-- end media -->
                                </div><!-- end col -->

                                <div class="blog-meta big-meta col-md-8">
                                    <h4><a href="single.html" title="">{{ $post->title }}</a></h4>
                                    <p>{{ Str::limit(strip_tags($post->text), 160) }}</p>
                                    <a href="#">Read More </a> <br>
                                    <small><a href="blog-category-01.html"
                                            title="">{{ $post->category->title }}</a></small>
                                    <small><a href="single.html"
                                            title="">{{ $post->created_at->format('d F, Y') }}</a></small>
                                    <small><a href="blog-author.html" title="">by Boby</a></small>
                                </div><!-- end meta -->
                            </div><!-- end blog-box -->

                            <hr class="invis">
                        @endforeach
                        <hr class="invis">

                    </div><!-- end blog-list -->
                    {{-- SECTION 4 END ------------------------------------------------------------------------------------ --}}




                    <hr class="invis">

                    {{-- SECTION 5 START 3 POSTS ------------------------------------------------------------------------------------ --}}
                    <div class="blog-list clearfix">
                        @foreach ($posts->skip(14)->take(3) as $post)
                        <div class="section-title">
                            <h3 class="color-red"><a href="blog-category-01.html" title="">{{ $post->category->title }}</a></h3>
                        </div><!-- end title -->

                        <div class="blog-box row">
                            <div class="col-md-4">
                                <div class="post-media">
                                    <a href="single.html" title="">
                                        <img src="{{ $post->img }}" alt=""
                                            class="img-fluid">
                                        <div class="hovereffect"></div>
                                    </a>
                                </div><!-- end media -->
                            </div><!-- end col -->

                            <div class="blog-meta big-meta col-md-8">
                                <h4><a href="single.html" title="">{{ $post->title }}</a>
                                </h4>
                                <p>{{ Str::limit(strip_tags($post->text), 160) }}</p>
                                    <a href="#">Read More </a> <br>
                                <small><a href="blog-category-01.html" title="">{{ $post->category->title }}</a></small>
                                <small><a href="single.html" title="">{{ $post->created_at->format('d F, Y') }}</a></small>
                                <small><a href="blog-author.html" title="">by Matilda</a></small>
                            </div><!-- end meta -->
                        </div><!-- end blog-box -->

                        @endforeach
                        <hr class="invis">
                        {{-- SECTION 5 END 3 POSTS ------------------------------------------------------------------------------------ --}}

                    </div><!-- end blog-list -->
                </div><!-- end col -->

                {{-- SECTION 6 START 3 POSTS ------------------------------------------------------------------------------------ --}}
                <div class="col-lg-3">
                    @foreach ($posts->skip(17)->take(3) as $post)
                    <div class="section-title">
                        <h3 class="color-yellow"><a href="blog-category-01.html" title="">{{ $post->category->title }}</a></h3>
                    </div><!-- end title -->

                    <div class="blog-box">
                        <div class="post-media">
                            <a href="single.html" title="">
                                <img src="{{ $post->img }}" alt="" class="img-fluid">
                                <div class="hovereffect">
                                    <span class="videohover"></span>
                                </div><!-- end hover -->
                            </a>
                        </div><!-- end media -->
                        <div class="blog-meta">
                            <h4><a href="single.html" title="">{{ $post->title }}</a>
                            </h4>
                            <small><a href="blog-category-01.html" title="">{{ $post->category->title }}</a></small>
                            <small><a href="blog-category-01.html" title="">{{ $post->created_at->format('d F, Y') }}</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    @endforeach
                    <hr class="invis">
                    {{-- SECTION 6 END 3 POSTS ------------------------------------------------------------------------------------ --}}

                    {{-- SECTION 7 START 3 POSTS ------------------------------------------------------------------------------------ --}}
                    @foreach ($posts->skip(20)->take(3) as $post)
                    <div class="section-title">
                        <h3 class="color-grey"><a href="blog-category-01.html" title="">{{ $post->category->title }}</a></h3>
                    </div><!-- end title -->

                    <div class="blog-box">
                        <div class="post-media">
                            <a href="single.html" title="">
                                <img src="{{ $post->img }}" alt="" class="img-fluid">
                                <div class="hovereffect">
                                    <span></span>
                                </div><!-- end hover -->
                            </a>
                        </div><!-- end media -->
                        <div class="blog-meta">
                            <h4><a href="single.html" title="">{{ $post->title }}</a></h4>
                            <small><a href="blog-category-01.html" title="">{{ $post->category->title }}</a></small>
                            <small><a href="blog-category-01.html" title="">{{ $post->created_at->format('d F, Y') }}</a></small>
                        </div><!-- end meta -->
                    </div><!-- end blog-box -->

                    @endforeach
                    <hr class="invis">

                    {{-- SECTION 7 END 3 POSTS ------------------------------------------------------------------------------------ --}}
                    

                    
                </div><!-- end col -->
            </div><!-- end row -->

            <hr class="invis1">

            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="banner-spot clearfix">
                        <div class="banner-img">
                            <img src="/storage/banner_01.jpg" alt="" class="img-fluid">
                        </div><!-- end banner-img -->
                    </div><!-- end banner -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
    {{-- SECTION CONTENT END --------------------------------------------------------------------------------------- --}}





@endsection

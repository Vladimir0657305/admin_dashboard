@extends('layouts.blog_layouts')
@section('title', 'Посты категории новости')

@section('content_blog')

    <div class="page-title wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2><i class="fa fa-newspaper-o " style=" background-color: {{ $categories[0]->category_color }}"></i> {{ $categories[0]->title }} <small
                            class="hidden-xs-down hidden-sm-down">Лучше делать новости, чем рассказывать о них. </small></h2>
                </div><!-- end col -->
                <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('main') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('main') }}">Blog</a></li>
                        <li class="breadcrumb-item active">{{ $posts[1]->category->title }}</li>
                    </ol>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end page-title -->

    <section class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        @include('/widgets/_recent_posts_widget')
                    </div><!-- end sidebar -->
                </div><!-- end col -->

                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="/storage/728X90N.gif" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <hr class="invis">

                        <div class="portfolio row">
                            @foreach ($posts->where('cat_id', 1) as $post)
                                <div class="pitem item-w1 item-h1">
                                    <div class="blog-box">
                                        <div class="post-media">
                                            <a href="{{ route('single_post', $post->id) }}" >
                                                <img src="{{ $post->img }}" alt="" class="img-fluid">
                                                <div class="hovereffect">
                                                </div><!-- end hover -->
                                            </a>
                                        </div><!-- end media -->
                                        <div class="blog-meta">
                                            <span class="bg-pink"><a href="{{ route('blog-category-01') }}"
                                                    style=" background-color: {{ $post->category->category_color }}">{{ $post->category->title }}</a></span>
                                            <h4><a href="single.html" title="">{{ $post->title}}</a></h4>
                                            <small><a href="" title="">By: Jessica</a></small>
                                            <small><a href="" title="">{{ $post->created_at->format('d F, Y') }}</a></small>
                                        </div><!-- end meta -->
                                    </div><!-- end blog-box -->
                                </div><!-- end col -->
                            @endforeach


                        </div><!-- end portfolio -->
                    </div><!-- end page-wrapper -->

                    <hr class="invis">

                    <div class="row">
                        <div class="col-md-12">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-start">
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection

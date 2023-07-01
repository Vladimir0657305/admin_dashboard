@extends('layouts.blog_layouts')
@section('title', 'Посты категории дизайн')

@section('content_blog')
    @php
        $categoryId = 3;
    @endphp

    <div class="page-title wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2><i class="fa fa-car" style=" background-color:{{ $categories[$categoryId]->category_color }}"></i>
                        {{ $categories[$categoryId]->title }} <small class="hidden-xs-down hidden-sm-down">Хороший дизайн
                            виден сразу. Отличный дизайн незаметен. Джо Спарано </small></h2>
                </div><!-- end col -->
                <div class="col-lg-4 col-md-4 col-sm-12 hidden-xs-down hidden-sm-down">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('main') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('main') }}">Blog</a></li>
                        <li class="breadcrumb-item active">{{ $categories[$categoryId]->title }}</li>
                    </ol>
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end page-title -->

    <section class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="row">
                            <div class="col-lg-10 offset-lg-1">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="/storage/00081-728X90.gif" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <hr class="invis">

                        <div class="blog-grid-system">
                            <div class="row">
                                @foreach ($posts->where('cat_id', $categoryId + 1) as $post)
                                    <div class="col-md-6">
                                        <div class="blog-box">
                                            <div class="post-media">
                                                <a href="{{ route('single_post', $post->id) }}" title="">
                                                    <img src="{{ $post->img }}" alt="" class="img-fluid">
                                                    {{-- <div class="hovereffect">
                                                        <span></span>
                                                    </div> --}}
                                                </a>
                                            </div><!-- end media -->
                                            <div class="blog-meta big-meta">
                                                <h4><a href="{{ route('single_post', $post->id) }}"
                                                        title="">{{ $post->title }}</a></h4>
                                                <p>{{ Str::limit(strip_tags($post->text), 160) }}</p>
                                                <small><a href="{{ route('blog-category-04') }}"
                                                        title="">{{ $categories[$categoryId]->title }}</a></small>
                                                <small><a href=""
                                                        title="">{{ $post->created_at->format('d F, Y') }}</a></small>
                                                <small><a href="blog-author.html" title="">by Amanda</a></small>
                                            </div><!-- end meta -->
                                        </div><!-- end blog-box -->
                                    </div><!-- end col -->
                                @endforeach


                            </div><!-- end row -->
                        </div><!-- end blog-grid-system -->
                    </div><!-- end page-wrapper -->

                    <hr class="invis3">

                    <div class="row">
                        <div class="col-md-12">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-start">
                                    {{ $posts->links() }}
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </nav>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end col -->

                <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
                    <div class="sidebar">
                        @include('/widgets/_recent_posts_widget')
                    </div><!-- end sidebar -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection

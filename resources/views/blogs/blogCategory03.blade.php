@extends('layouts.blog_layouts')
@section('title', 'Посты категории рецепты')

@section('content_blog')
    @php
        $categoryId = 2;
    @endphp

    <div class="page-title wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2><i class="fa fa-leaf" style=" background-color:{{ $categories[$categoryId]->category_color }}"></i>
                        {{ $categories[$categoryId]->title }} <small class="hidden-xs-down hidden-sm-down">Не все, кто странствуют, сбились с пути Дж. Р. Толкиен </small></h2>
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
                        <div class="blog-custom-build">
                            @foreach ($posts->where('cat_id', $categoryId + 1) as $post)
                                <div class="blog-box">
                                    <div class="post-media">
                                        <a href="{{ route('single_post', $post->id) }}" title="">
                                            <img src="{{ $post->img }}" alt="" class="img-fluid">
                                            {{-- <div class="hovereffect">
                                                <span></span>
                                            </div> --}}
                                        </a>
                                    </div>
                                    <!-- end media -->
                                    <div class="blog-meta big-meta text-center"
                                        style="border: 2px solid {{ $post->category->category_color }};">

                                        <div class="post-sharing">
                                            <ul class="list-inline">
                                                <li><a href="#" class="fb-button btn btn-primary"><i
                                                            class="fa fa-facebook"></i> <span class="down-mobile">Share on
                                                            Facebook</span></a></li>
                                                <li><a href="#" class="tw-button btn btn-primary"><i
                                                            class="fa fa-twitter"></i> <span class="down-mobile">Tweet on
                                                            Twitter</span></a></li>
                                                <li><a href="#" class="gp-button btn btn-primary"><i
                                                            class="fa fa-google-plus"></i></a></li>
                                            </ul>
                                        </div><!-- end post-sharing -->
                                        <h4><a href="{{ route('single_post', $post->id) }}">{{ $post->title }}</a></h4>
                                        <p>{{ Str::limit(strip_tags($post->text), 160) }}</p>
                                        <small><a
                                                href="{{ route('blog-category-03') }}">{{ $categories[$categoryId]->title }}</a></small>
                                        <small><a href="">{{ $post->created_at->format('d F, Y') }}</a></small>
                                        <small><a href="blog-author.html" title="">by Amanda</a></small>
                                        <small><a href="blog-author.html" title=""><i class="fa fa-eye"></i>
                                                2291</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                                <hr class="invis">
                            @endforeach
                        </div><!-- end blog-custom-build -->
                    </div><!-- end page-wrapper -->

                    <hr class="invis">

                    <div class="row">
                        <div class="col-md-12">
                            <nav aria-label="Page navigation">
                                <ul class="pagination justify-content-start">
                                    {{ $posts->links() }}
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

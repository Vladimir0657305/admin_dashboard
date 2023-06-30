@extends('layouts.blog_layouts')
@section('title', 'Посты категории дизайн')

@section('content_blog')
    @php
        $categoryId = 5;
    @endphp

    <div class="page-title wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <h2><i class="fa fa-user-md" style=" background-color:{{ $categories[$categoryId]->category_color }}"></i>
                        {{ $categories[$categoryId]->title }} <small class="hidden-xs-down hidden-sm-down">Природа так обо
                            всем позаботилась, что повсюду ты находишь, чему учиться. </small></h2>
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
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="portfolio row">

                            @foreach ($posts->where('cat_id', $categoryId + 1) as $post)
                                <div class="pitem item-w1 item-h1">
                                    <div class="blog-box">
                                        <div class="post-media">
                                            <a href="{{ route('single_post', $post->id) }}" title="">
                                                <img src="{{ $post->img }}" alt="" class="img-fluid">
                                                <div class="hovereffect">
                                                    <span></span>
                                                </div><!-- end hover -->
                                            </a>
                                        </div><!-- end media -->
                                        <div class="blog-meta">
                                            <span class="bg-grey"><a href="{{ route('blog-category-06') }}"
                                                    title="">Spa</a></span>
                                            <h4><a href="{{ route('single_post', $post->id) }}" title="">{{ $post->title}}</a>
                                            </h4>
                                            <small><a href="blog-author.html" title="">By: Jessica</a></small>
                                            <small><a href="{{ route('blog-category-06') }}" title="">21 July, 2017</a></small>
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
                                    {{ $posts->links() }}
                                </ul>
                            </nav>
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection

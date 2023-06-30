@extends('layouts.blog_layouts')
@section('title', 'Посты категории рецепты')

@section('content_blog')
    @php
        $categoryId = 1;
    @endphp

    <div class="page-title wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-$categoryId2 col-xs-$categoryId2">
                    <h2><i class="fa fa-cutlery "
                            style=" background-color:{{ $categories[$categoryId]->category_color }}"></i>
                        {{ $categories[$categoryId]->title }} <small class="hidden-xs-down hidden-sm-down">
                            <p class="mt-1">Бывает соберешься
                            с подружками на кухне, шампусик там, салатик, кулинарными рецептам опять же поделиться. А
                            кто-то непременно заявит: «У них Шабаш!» </p></small></h2>
                </div><!-- end col -->
                <div class="col-lg-4 col-md-4 col-sm-$categoryId2 hidden-xs-down hidden-sm-down">
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
                <div class="col-lg-9 col-md-$categoryId2 col-sm-$categoryId2 col-xs-$categoryId2">
                    <div class="page-wrapper">
                        <div class="blog-list clearfix">

                            @foreach ($posts->where('cat_id', $categoryId + 1) as $post)
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="{{ route('single_post', $post->id) }}" title="">
                                                <img src="{{ $post->img }}" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        <h4 style="border: 2px solid {{ $categories[$categoryId]->category_color }};"><a
                                                href="{{ route('single_post', $post->id) }}"
                                                title="">{{ $post->title }}</a></h4>
                                        <p>{{ Str::limit(strip_tags($post->text), 160) }}</p>
                                        <small><a href="{{ route('blog-category-02') }}"
                                                title="">{{ $categories[$categoryId]->title }}</a></small>
                                        <small><a href=""
                                                title="">{{ $post->created_at->format('d F, Y') }}</a></small>
                                        <small><a href="blog-author.html" title="">by Matilda</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                                <hr class="invis">
                            @endforeach


                        </div><!-- end blog-list -->
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

                <div class="col-lg-3 col-md-$categoryId2 col-sm-$categoryId2 col-xs-$categoryId2">
                    <div class="sidebar">
                        @include('/widgets/_recent_posts_widget')
                    </div><!-- end sidebar -->
                </div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </section>
@endsection

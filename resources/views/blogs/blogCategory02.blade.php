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
                        <h2><i class="fa fa-cutlery " style=" background-color:{{ $categories[$categoryId]->category_color }}"></i> {{ $categories[$categoryId]->title }} <small class="hidden-xs-down hidden-sm-down">Nulla felis eros, varius sit amet volutpat non. </small></h2>
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

                                @foreach ($posts->where('cat_id', 2) as $post)
                                <div class="blog-box row">
                                    <div class="col-md-4">
                                        <div class="post-media">
                                            <a href="{{ route('single_post', $post->id) }}" title="">
                                                <img src="{{ $post->img}}" alt="" class="img-fluid">
                                                <div class="hovereffect"></div>
                                            </a>
                                        </div><!-- end media -->
                                    </div><!-- end col -->

                                    <div class="blog-meta big-meta col-md-8">
                                        <h4 style="border: 2px solid {{ $categories[$categoryId]->category_color }};"><a href="{{ route('single_post', $post->id) }}" title="">{{ $post->title}}</a></h4>
                                        <p>Aenean interdum arcu blandit, vehicula magna non, placerat elit. Mauris et pharetratortor. Suspendissea sodales urna. In at augue elit. Vivamus enim nibh, maximus ac felis nec, maximus tempor odio.</p>
                                        <small><a href="{{ route('blog-category-02') }}" title="">{{ $categories[$categoryId]->title }}</a></small>
                                        <small><a href="" title="">{{ $post->created_at->format('d F, Y') }}</a></small>
                                        <small><a href="blog-author.html" title="">by Matilda</a></small>
                                    </div><!-- end meta -->
                                </div><!-- end blog-box -->
                                <hr class="invis">
                                @endforeach

                                
                            </div><!-- end blog-list -->
                        </div><!-- end page-wrapper -->

                        <hr class="invis">

                        <div class="row">
                            <div class="col-md-$categoryId2">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination justify-content-start">
                                        <li class="page-item"><a class="page-link" href="#">$categoryId</a></li>
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

                    <div class="col-lg-3 col-md-$categoryId2 col-sm-$categoryId2 col-xs-$categoryId2">
                        <div class="sidebar">
                            <div class="widget">
                                <h2 class="widget-title">Search</h2>
                                <form class="form-inline search-form">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search on the site">
                                    </div>
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i></button>
                                </form>
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Recent Posts</h2>
                                <div class="blog-list-widget">
                                    <div class="list-group">
                                        <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-$categoryId00 justify-content-between">
                                                <img src="upload/blog_square_0$categoryId.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-$categoryId">5 Beautiful buildings you need to before dying</h5>
                                                <small>$categoryId2 Jan, 20$categoryId6</small>
                                            </div>
                                        </a>

                                        <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-$categoryId00 justify-content-between">
                                                <img src="upload/blog_square_02.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-$categoryId">Let's make an introduction for creative life</h5>
                                                <small>$categoryId$categoryId Jan, 20$categoryId6</small>
                                            </div>
                                        </a>

                                        <a href="single.html" class="list-group-item list-group-item-action flex-column align-items-start">
                                            <div class="w-$categoryId00 last-item justify-content-between">
                                                <img src="upload/blog_square_03.jpg" alt="" class="img-fluid float-left">
                                                <h5 class="mb-$categoryId">Did you see the most beautiful sea in the world?</h5>
                                                <small>07 Jan, 20$categoryId6</small>
                                            </div>
                                        </a>
                                    </div>
                                </div><!-- end blog-list -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Advertising</h2>
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="upload/banner_03.jpg" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Instagram Feed</h2>
                                <div class="instagram-wrapper clearfix">
                                    <a class="" href="#"><img src="upload/insta_0$categoryId.jpeg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/insta_02.jpeg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/insta_03.jpeg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/insta_04.jpeg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/insta_05.jpeg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/insta_06.jpeg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/insta_07.jpeg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/insta_08.jpeg" alt="" class="img-fluid"></a>
                                    <a href="#"><img src="upload/insta_09.jpeg" alt="" class="img-fluid"></a>
                                </div><!-- end Instagram wrapper -->
                            </div><!-- end widget -->

                            <div class="widget">
                                <h2 class="widget-title">Popular Categories</h2>
                                <div class="link-widget">
                                    <ul>
                                        <li><a href="#">Fahsion <span>(2$categoryId)</span></a></li>
                                        <li><a href="#">Lifestyle <span>($categoryId5)</span></a></li>
                                        <li><a href="#">Art & Design <span>(3$categoryId)</span></a></li>
                                        <li><a href="#">Health Beauty <span>(22)</span></a></li>
                                        <li><a href="#">Clothing <span>(66)</span></a></li>
                                        <li><a href="#">Entertaintment <span>($categoryId$categoryId)</span></a></li>
                                        <li><a href="#">Food & Drink <span>(87)</span></a></li>
                                    </ul>
                                </div><!-- end link-widget -->
                            </div><!-- end widget -->
                        </div><!-- end sidebar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section>
@endsection
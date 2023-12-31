@extends('layouts.blog_layouts')
@section('title', 'Статья')

@section('content_blog')

    <section class="section wb">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                    <div class="page-wrapper">
                        <div class="blog-title-area">
                            <ol class="breadcrumb hidden-xs-down">
                                <li class="breadcrumb-item"><a href="{{ route('main') }}">Home</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('main') }}">Blog</a></li>
                                <li class="breadcrumb-item active">{{ $single_post->title }}</li>
                            </ol>

                            <span class=""><a href="blog-category-01.html"
                                    style=" background-color: {{ $single_post->category->category_color }}">{{ $single_post->category->title }}</a></span>

                            <h3>{{ $single_post->title }}</h3>

                            <div class="blog-meta big-meta">
                                <small><a href="{{ route('single_post', $single_post->id) }}"
                                        title="">{{ $single_post->created_at->format('d F, Y') }}</a></small>
                                <small><a href="blog-author.html" title="">by Jessica</a></small>
                                <small><a href="#" title=""><i class="fa fa-eye"></i> 2344</a></small>
                            </div><!-- end meta -->

                            <div class="post-sharing">
                                <ul class="list-inline">
                                    <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i>
                                            <span class="down-mobile">Share on Facebook</span></a></li>
                                    <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i>
                                            <span class="down-mobile">Tweet on Twitter</span></a></li>
                                    <li><a href="#" class="gp-button btn btn-primary"><i
                                                class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div><!-- end post-sharing -->
                        </div><!-- end title -->

                        <div class="single-post-media">
                            <img src="{{ $single_post->img }}" alt="" class="img-fluid">
                        </div><!-- end media -->

                        <div class="blog-content">
                            @php
                                $text = $single_post->text;
                                
                                $pattern = '/\/storage\\\\([^\\s]+)\.(jpg|jpeg|png|gif|webp)/i';
                                $processedText = preg_replace_callback(
                                    $pattern,
                                    function ($matches) {
                                        $imagePath = asset('storage/' . $matches[1] . '.' . $matches[2]);
                                        return '<img src="' . $imagePath . '" alt="Изображение" style="width: 100%; height: auto;">';
                                    },
                                    $text,
                                );
                                
                                echo '<div class="pp">' . $processedText . '</div>';
                            @endphp
                            <!-- end pp -->


                        </div><!-- end content -->

                        <div class="blog-title-area">
                            <div class="tag-cloud-single">
                                <span>Tags</span>
                                <small><a href="#" title="">{{ $single_post->category->title }}</a></small>
                                <small><a href="#" title="">colorful</a></small>
                                <small><a href="#" title="">trending</a></small>
                                <small><a href="#" title="">another tag</a></small>
                            </div><!-- end meta -->

                            <div class="post-sharing">
                                <ul class="list-inline">
                                    <li><a href="#" class="fb-button btn btn-primary"><i class="fa fa-facebook"></i>
                                            <span class="down-mobile">Share on Facebook</span></a></li>
                                    <li><a href="#" class="tw-button btn btn-primary"><i class="fa fa-twitter"></i>
                                            <span class="down-mobile">Tweet on Twitter</span></a></li>
                                    <li><a href="#" class="gp-button btn btn-primary"><i
                                                class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div><!-- end post-sharing -->
                        </div><!-- end title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="banner-spot clearfix">
                                    <div class="banner-img">
                                        <img src="/storage/00081-728X90.gif" alt="" class="img-fluid">
                                    </div><!-- end banner-img -->
                                </div><!-- end banner -->
                            </div><!-- end col -->
                        </div><!-- end row -->

                        <hr class="invis1">

                        <div class="custombox prevnextpost clearfix">
                            <div class="row">
                                @php
                                    $previousPost = null;
                                    $nextPost = null;
                                    if ($single_post->id - 1) {
                                        $prevPostId = (int) $single_post->id - 1;
                                    }
                                    if ($single_post->id + 1) {
                                        $nextPostId = (int) $single_post->id + 1;
                                    }
                                @endphp

                                @if ($post = $posts->firstWhere('id', $prevPostId))
                                    @php
                                        $previousPost = $post;
                                    @endphp
                                @endif

                                @if ($post = $posts->firstWhere('id', $nextPostId))
                                    @php
                                        $nextPost = $post;
                                    @endphp
                                @endif

                                @if (isset($previousPost))
                                    <div class="col-lg-6">
                                        <div class="blog-list-widget">
                                            <div class="list-group">
                                                <a href="{{ route('single_post', $previousPost->id) }}"
                                                    class="list-group-item list-group-item-action flex-column align-items-start">
                                                    <div class="w-100 justify-content-between text-right">
                                                        <img src="{{ $previousPost->img }}" alt=""
                                                            class="img-fluid float-right">
                                                        <h5 class="mb-1">{{ $previousPost->title }}</h5>
                                                        <small>Prev Post</small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                @endif

                                @if (isset($nextPost))
                                    <div class="col-lg-6">
                                        <div class="blog-list-widget">
                                            <div class="list-group">
                                                <a href="{{ route('single_post', $nextPost->id) }}"
                                                    class="list-group-item list-group-item-action flex-column align-items-start">
                                                    <div class="w-100 justify-content-between">
                                                        <img src="{{ $nextPost->img }}" alt=""
                                                            class="img-fluid float-left">
                                                        <h5 class="mb-1">{{ $nextPost->title }}</h5>
                                                        <small>Next Post</small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div><!-- end col -->
                                @endif
                            </div><!-- end row -->
                        </div><!-- end author-box -->

                        <hr class="invis1">

                        <div class="custombox authorbox clearfix">
                            <h4 class="small-title">About author</h4>
                            <div class="row">
                                <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                    <img src="upload/author.jpg" alt="" class="img-fluid rounded-circle">
                                </div><!-- end col -->

                                <div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
                                    <h4><a href="#">Jessica</a></h4>
                                    <p>Quisque sed tristique felis. Lorem <a href="#">visit my website</a> amet,
                                        consectetur adipiscing elit. Phasellus quis mi auctor, tincidunt nisl eget, finibus
                                        odio. Duis tempus elit quis risus congue feugiat. Thanks for stop Cloapedia!</p>

                                    <div class="topsocial">
                                        <a href="#" data-toggle="tooltip" data-placement="bottom"
                                            title="Facebook"><i class="fa fa-facebook"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom"
                                            title="Youtube"><i class="fa fa-youtube"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom"
                                            title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom"
                                            title="Twitter"><i class="fa fa-twitter"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom"
                                            title="Instagram"><i class="fa fa-instagram"></i></a>
                                        <a href="#" data-toggle="tooltip" data-placement="bottom"
                                            title="Website"><i class="fa fa-link"></i></a>
                                    </div><!-- end social -->

                                </div><!-- end col -->
                            </div><!-- end row -->
                        </div><!-- end author-box -->

                        <hr class="invis1">

                        {{-- <div class="custombox clearfix">
                            <h4 class="small-title">Leave a Reply</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <form class="form-wrapper">
                                        <input type="text" class="form-control" placeholder="Your name">
                                        <input type="text" class="form-control" placeholder="Email address">
                                        <input type="text" class="form-control" placeholder="Website">
                                        <textarea class="form-control" placeholder="Your comment"></textarea>
                                        <button type="submit" class="btn btn-primary">Submit Comment</button>
                                    </form>
                                </div>
                            </div>
                        </div> --}}
                    </div><!-- end page-wrapper -->
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

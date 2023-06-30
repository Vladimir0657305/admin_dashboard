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
            @foreach ($posts->take(3) as $post)
                <a href="{{ route('single_post', $post->id) }}"
                    class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="w-100 justify-content-between">
                        <img src="{{ $post->img }}" alt="" class="img-fluid float-left">
                        <h5 class="mb-1">{{ $post->title }}</small>
                    </div>
                </a>
            @endforeach

        </div>
    </div><!-- end blog-list -->
</div><!-- end widget -->




<div class="widget">
    <h2 class="widget-title">Advertising</h2>
    <div class="banner-spot clearfix">
        <div class="banner-img">
            <img src="/storage/bmw-x6.gif" alt="" class="img-fluid">
        </div><!-- end banner-img -->
    </div><!-- end banner -->
</div><!-- end widget -->



<div class="widget">
    <h2 class="widget-title">Категории</h2>
    <div class="link-widget">
        <ul>
            @foreach ($categories_count as $category_count)
                <li><a href="#">{{ $category_count->title }}
                        <span>({{ $category_count->posts_count }})</span></a></li>
            @endforeach
        </ul>
    </div><!-- end link-widget -->
</div><!-- end widget -->
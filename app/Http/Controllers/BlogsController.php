<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Http\Controllers\Controller;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    public function main()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        $categories = Category::orderBy('created_at', 'desc')->get();
        $categories_count = Category::withCount('posts')->get();
        return view('blogs.main.index', [
            'posts' => $posts,
            'categories' => $categories,
            'categories_count' => $categories_count
        ]);
    }
    public function blog_category_01()
    {
        Paginator::useBootstrapFour();
        $categories = Category::get();
        $posts = Post::where('cat_id', 1)->orderBy('created_at', 'desc')->paginate(5);
        $posts_new = Post::orderBy('created_at', 'desc')->get();
        $categories_count = Category::withCount('posts')->get();

        return view('blogs.blogCategory01', [
            'posts' => $posts,
            'posts_new' => $posts_new,
            'categories' => $categories,
            'categories_count' => $categories_count
        ]);
    }
    public function blog_category_02()
    {
        Paginator::useBootstrapFour();
        $categories = Category::get();
        $posts = Post::where('cat_id', 2)->orderBy('created_at', 'desc')->paginate(5);
        $posts_new = Post::orderBy('created_at', 'desc')->get();
        $categories_count = Category::withCount('posts')->get();

        return view('blogs.blogCategory02', [
            'posts' => $posts,
            'posts_new' => $posts_new,
            'categories' => $categories,
            'categories_count' => $categories_count
        ]);
    }
    public function blog_category_03()
    {
        Paginator::useBootstrapFour();
        $categories = Category::get();
        $posts = Post::where('cat_id', 3)->orderBy('created_at', 'desc')->paginate(5);
        $posts_new = Post::orderBy('created_at', 'desc')->get();
        $categories_count = Category::withCount('posts')->get();

        return view('blogs.blogCategory03', [
            'posts' => $posts,
            'posts_new' => $posts_new,
            'categories' => $categories,
            'categories_count' => $categories_count
        ]);
    }
    public function blog_category_04()
    {
        Paginator::useBootstrapFour();
        $categories = Category::get();
        $posts = Post::where('cat_id', 4)->orderBy('created_at', 'desc')->paginate(5);
        $posts_new = Post::orderBy('created_at', 'desc')->get();
        $categories_count = Category::withCount('posts')->get();

        return view('blogs.blogCategory04', [
            'posts' => $posts,
            'posts_new' => $posts_new,
            'categories' => $categories,
            'categories_count' => $categories_count
        ]);
    }
    public function blog_category_05()
    {
        Paginator::useBootstrapFour();
        $categories = Category::get();
        $posts = Post::where('cat_id', 5)->orderBy('created_at', 'desc')->paginate(5);
        $posts_new = Post::orderBy('created_at', 'desc')->get();
        $categories_count = Category::withCount('posts')->get();

        return view('blogs.blogCategory05', [
            'posts' => $posts,
            'posts_new' => $posts_new,
            'categories' => $categories,
            'categories_count' => $categories_count
        ]);
    }
    public function blog_category_06()
    {
        Paginator::useBootstrapFour();
        $categories = Category::get();
        $posts = Post::where('cat_id', 6)->orderBy('created_at', 'desc')->paginate(9);
        $posts_new = Post::orderBy('created_at', 'desc')->get();
        $categories_count = Category::withCount('posts')->get();

        return view('blogs.blogCategory06', [
            'posts' => $posts,
            'posts_new' => $posts_new,
            'categories' => $categories,
            'categories_count' => $categories_count
        ]);
    }

    public function singlePost($postId)
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        $posts_new = Post::orderBy('created_at', 'desc')->get();
        $categories = Category::orderBy('created_at', 'desc')->get();
        $categories_count = Category::withCount('posts')->get();
        $single_post = Post::findOrFail($postId);

        return view('blogs.single', [
            'posts' => $posts,
            'posts_new' => $posts_new,
            'categories' => $categories,
            'categories_count' => $categories_count,
            'single_post' => $single_post
        ]);
    }
    public function category_posts($categoryId)
    {
        $category = Category::findOrFail($categoryId);
        $posts = $category->posts;

        return view('blogs.main.category_posts', [
            'posts' => $posts,
            'category' => $category
        ]);
    }
}
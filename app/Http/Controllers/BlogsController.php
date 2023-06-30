<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Http\Controllers\Controller;
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
        $categories = Category::get();
        $posts = Post::orderBy('created_at', 'desc')->get();
        $categories_count = Category::withCount('posts')->get();

        return view('blogs.blogCategory01', [
            'posts' => $posts,
            'categories' => $categories,
            'categories_count' => $categories_count
        ]);
    }
    public function blog_category_02()
    {
        $categories = Category::get();
        $posts = Post::orderBy('created_at', 'desc')->get();
        $categories_count = Category::withCount('posts')->get();

        return view('blogs.blogCategory02', [
            'posts' => $posts,
            'categories' => $categories,
            'categories_count' => $categories_count
        ]);
    }

    public function singlePost($postId)
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        $categories = Category::orderBy('created_at', 'desc')->get();
        $categories_count = Category::withCount('posts')->get();
        $single_post = Post::findOrFail($postId);

        return view('blogs.single', [
            'posts' => $posts,
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
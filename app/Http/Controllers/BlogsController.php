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
        $posts = Post::orderBy('created_at', 'desc')->take(23)->get();
        $categories = Category::orderBy('created_at', 'desc')->get();
        $categories_count = Category::withCount('posts')->get();
        return view('blogs.main.index', [
            'posts' => $posts,
            'categories' => $categories,
            'categories_count' => $categories_count
        ]);
    }

    public function footerPosts()
    {
        $posts = Post::orderBy('created_at', 'desc')->get();
        $categories = Category::orderBy('created_at', 'desc')->get();
        $categories_count  = Category::withCount('posts')->get();

        return view('layouts.blog_layouts', [
            'posts' => $posts,
            'category' => $categories,
            'categories_count' => $categories_count
        ]);
    }

    public function categoryPosts($categoryId)
    {
        $category = Category::findOrFail($categoryId);
        $posts = $category->posts;

        return view('blogs.main.category_posts', [
            'posts' => $posts,
            'category' => $category
        ]);
    }
}
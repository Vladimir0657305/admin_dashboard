<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;

class MainAdminController extends Controller
{

    public function index()
    {
        $post_count = Post::count();
        $categories_count = Category::count();

        return view('admin.home.index', [
            'post_count' => $post_count,
            'categories_count' => $categories_count
        ]);
    }
}
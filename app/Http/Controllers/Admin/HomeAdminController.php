<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class HomeAdminController extends Controller
{
    public function index() {
        $post_count = Post::count();
        return view('admin.home.index', [
            'post_count' => $post_count
        ]);
    }
}

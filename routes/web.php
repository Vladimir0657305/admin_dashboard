<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Admin\MainAdminController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\BlogsController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home');

Route::get('/single_post/{postId}', [BlogsController::class, 'singlePost'])->name('single_post');
Route::get('/blog-category-01', [BlogsController::class, 'blog_category_01'])->name('blog-category-01');
Route::get('/blog-category-02', [BlogsController::class, 'blog_category_02'])->name('blog-category-02');
Route::get('/blog-category-03', [BlogsController::class, 'blog_category_03'])->name('blog-category-03');
Route::get('/blog-category-04', [BlogsController::class, 'blog_category_04'])->name('blog-category-04');
Route::get('/blog-category-05', [BlogsController::class, 'blog_category_05'])->name('blog-category-05');
Route::get('/blog-category-06', [BlogsController::class, 'blog_category_06'])->name('blog-category-06');
Route::get('/page-contact', [BlogsController::class, 'page_contact'])->name('page-contact');
Route::get('/', [BlogsController::class, 'main'])->name('main');

Route::middleware(['role:admin'])->prefix('admin_panel')->group( function() {
    Route::get('/', [MainAdminController::class, 'index'])->name('home_admin');
    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);
});

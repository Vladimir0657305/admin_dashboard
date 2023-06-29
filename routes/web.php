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
// Route::get('/', function() {
//     return view('blogs.main.index');
// })->name('main');
Route::get('/', [BlogsController::class, 'main'])->name('main');

Route::middleware(['role:admin'])->prefix('admin_panel')->group( function() {
    Route::get('/', [MainAdminController::class, 'index'])->name('home_admin');
    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);
});

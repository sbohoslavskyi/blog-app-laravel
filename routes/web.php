<?php

use App\Http\Controllers\Blog\PageController;
use App\Http\Controllers\Blog\PostController as BlogPostController;
use App\Http\Controllers\Admin\PostController as AdminPostController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('page.index');
Route::get('/post/{post:slug}', [BlogPostController::class, 'show'])->name('post.show');
Route::get('/category/{category:slug}', [BlogPostController::class, 'category'])->name('post.category');

Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('posts', AdminPostController::class);
});

<?php

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


Auth::routes();

Route::get('/posts', [App\Http\Controllers\PostController::class, 'index'])->name('posts');
Route::get('/post/show/{id}', [App\Http\Controllers\PostController::class, 'show'])->name('post.show');
Route::get('/post/create', [App\Http\Controllers\PostController::class, 'create'])->name('post.create');
Route::post('/post/store', [App\Http\Controllers\PostController::class, 'store'])->name('post.store');

Route::post('/comment/store', [App\Http\Controllers\CommentController::class, 'store'])->name('comment.add');
Route::post('/reply/store', [App\Http\Controllers\CommentController::class, 'replyStore'])->name('reply.add');



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/show/{id}', [App\Http\Controllers\HomeController::class, 'show'])->name('article.show');

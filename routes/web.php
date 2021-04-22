<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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



Route::get('/',[\App\Http\Controllers\PostController::class,'index'])->name('post.index');
//Route::post('post/search',[\App\Http\Controllers\PostController::class,'search'])->name('post.search');
Route::post('post/create',[\App\Http\Controllers\PostController::class,'create'])->name('post.create');
Route::get('post/delete/{id}',[\App\Http\Controllers\PostController::class,'delete'])->name('post.delete');
Route::get('post/edit/{id}',[\App\Http\Controllers\PostController::class,'edit'])->name('post.edit');
Route::post('post/store/{id}',[\App\Http\Controllers\PostController::class,'store'])->name('post.store');

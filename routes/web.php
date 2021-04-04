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



Route::get('home',[HomeController::class,'home'])->middleware('check.login');
Route::get('login',[HomeController::class,'getLogin']);
Route::post('login',[HomeController::class,'postLogin'])->name('login');
Route::get('admin',function () {
    return 'admin';
})->middleware('check.role');

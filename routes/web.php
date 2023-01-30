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
Route::get('/', function (){
    return redirect('/posts');
});
Route::get('/statistic', [\App\Http\Controllers\StatisticController::class, 'index'])->middleware(['auth', 'admin'])->name('statistic');

Auth::routes();

Route::resource('/posts', \App\Http\Controllers\PostController::class)->middleware('auth');
Route::resource('/categories', \App\Http\Controllers\CategoryController::class)->middleware('auth');
Route::resource('/tags', \App\Http\Controllers\TagController::class)->middleware('auth');

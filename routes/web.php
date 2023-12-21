<?php

use App\Http\Controllers\Admin;
use Illuminate\Support\Facades\Route;

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

Route::prefix('admin')->group(function(){
    Route::get('index', 'App\Http\Controllers\Admin@index');
    Route::get('news', 'App\Http\Controllers\Admin@news');
    Route::get('add','App\Http\Controllers\Admin@add');
    Route::post('news/add', 'App\Http\Controllers\Admin@newsadd');
    Route::put('news-edit/{id}', 'App\Http\Controllers\Admin@newsedit');
    Route::delete('news/delete/{id}', 'App\Http\Controllers\Admin@newsdelete');
});
Route::prefix('page')->group(function(){
    Route::get('index', 'App\Http\Controllers\Page@index');
    Route::get('order', 'App\Http\Controllers\Page@order');
    Route::get('commodity', 'App\Http\Controllers\Page@commodity');
});
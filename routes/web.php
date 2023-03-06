<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PostController;
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

//trang chủ
Route::get('index','App\Http\Controllers\pageController@getIndex');
Route::get('type/{slug}','App\Http\Controllers\pageController@gettype');
Route::get('post/{slug}','App\Http\Controllers\pageController@getpost');
Route::get('contact','App\Http\Controllers\pageController@getcontact');
Route::post('contact','App\Http\Controllers\pageController@postcontact');
Route::get('trending','App\Http\Controllers\pageController@trending');
//Admin
Route::get('admin','App\Http\Controllers\AdminController@getIndex');

Route::group(['prefix'=>'/admin', 'middleware'=>'auth'],function(){
    Route::resource('category', CategoryController::class);
    Route::resource('type', TypeController::class);
    Route::resource('post', PostController::class);
    Route::resource('contact', ContactController::class);
    Route::get('/logout', [App\Http\Controllers\AdminController::class,'getLogout']);

});
Route::get('login','App\Http\Controllers\AdminController@getLogin');
Route::post('login','App\Http\Controllers\AdminController@postLogin');
Route::get('logout','App\Http\Controllers\AdminController@getlogout');
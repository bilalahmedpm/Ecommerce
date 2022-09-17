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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::resource('category','CategoryController');
Route::get('/request/category', 'CategoryController@index2')->name('request.category');
Route::resource('subcategory','SubCatgeoryController');
Route::get('/request/subcategory', 'SubCatgeoryController@index2')->name('request.subcategory');
Route::resource('/product','ProductController');
Route::post('/fetchmaincategory', 'ProductController@fetchmaincategory')->name('fetchmaincategory');

<?php

use App\Category;
use App\Product;
use App\SubCatgeory;
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
    $user = Auth::user();
    $category = Category::where('status','=',0)->latest()->get();
    $subcategory = SubCatgeory::where('status','=',0)->latest()->get();
    $product = Product::where('status','=',0)->latest()->get();

    return view('front.index',compact('category','product','subcategory','user'));
});

Route::get('front/index','FrontController@index')->name('front.index');
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::resource('category','CategoryController');
Route::get('/request/category', 'CategoryController@index2')->name('request.category');
Route::resource('subcategory','SubCatgeoryController');
Route::get('/request/subcategory', 'SubCatgeoryController@index2')->name('request.subcategory');
Route::resource('/product','ProductController');
Route::post('/fetchmaincategory', 'ProductController@fetchmaincategory')->name('fetchmaincategory');
Route::get('/discount/product', 'ProductController@index2')->name('discount.product');
Route::get('/user/sellers','UserController@index')->name('seller.index');
Route::get('/user/visitor','UserController@index2')->name('user.index');

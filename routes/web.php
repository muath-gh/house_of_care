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
    return view('frontend.home');
});

Route::get('/shop/{type}','FrontEnd\SiteController@shop')->name('site.shop');
Route::get('/product-detail/{id}','FrontEnd\SiteController@productDetail');
Route::get('/checkout','FrontEnd\SiteController@checkOut');
Route::post('/store-order','FrontEnd\SiteController@storeOrder')->name('store-order');


Route::group(["prefix"=>"admin"],function(){
Route::resource('/','BackEnd\DashBoardController');
Route::resource('/products','BackEnd\ProductController');
});
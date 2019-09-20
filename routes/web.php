<?php

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
    return view('welcome');
});
Route::group(['prefix'=>'admin'],function (){
    Route::group(['prefix'=>'danh_muc'],function (){
        Route::get("them",['as'=>'themdanhmuc','uses'=>'CategoryController@getAddCate']);
        Route::post("them",['as'=>'themdanhmuc','uses'=>'CategoryController@postAddCate']);
        Route::get("danh-sach",['as'=>'listdanhmuc','uses'=>'CategoryController@getListCate']);

    });
    Route::group(['prefix'=>'san_pham'],function (){
        Route::get("themsanpham",['as'=>'themsanpham','uses'=>'ProductController@getAddProduct']);

    });
});
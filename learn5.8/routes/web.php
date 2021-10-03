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
    return view('admin.page');
});
Route::group(['prefix'=>'admin'], function (){
    Route::group(['prefix'=>'theloai'], function (){
        Route::get('danhsach','TheLoaiController@getDanhsach');
        Route::get('sua/{id}','TheLoaiController@getSua');
        Route::post('sua/{id}','TheLoaiController@postSua');

        Route::get('them','TheLoaiController@getThem');
        Route::post('them','TheLoaiController@postThem');

        Route::get('xoa/{id}','TheLoaiController@getXoa');
    });
    Route::group(['prefix'=>'loaitin'], function (){
        Route::get('danhsach','LoaiTinController@getDanhsach');

        Route::get('sua/{id}','LoaiTinController@getSua');
        Route::post('sua/{id}','LoaiTinController@postSua');

        Route::get('them','LoaiTinController@getThem');
        Route::post('them','LoaiTinController@postThem');

        Route::get('xoa/{id}','LoaiTinController@getXoa');
    });

    Route::group(['prefix'=>'tintuc'], function (){
        Route::get('danhsach','TinTucController@getDanhsach');

        Route::get('them','TinTucController@getThem');
        Route::post('them','TinTucController@postThem');\

        Route::get('sua/{id}','TinTucController@getSua');
        Route::post('sua/{id}','TinTucController@postSua');

        Route::get('xoa/{id}','TinTucController@getXoa');
    });

    Route::group(['prefix'=>'tintuc'], function (){
        Route::get('danhsach','TinTucController@getDanhsach');

        Route::get('them','TinTucController@getThem');
        Route::post('them','TinTucController@postThem');\

        Route::get('sua/{id}','TinTucController@getSua');
        Route::post('sua/{id}','TinTucController@postSua');

        Route::get('xoa/{id}','TinTucController@getXoa');
    });

    Route::group(['prefix'=>'user'], function (){
        Route::get('danhsach','UserController@getDanhsach');

        Route::get('them','UserController@getThem');
        Route::post('them','UserController@postThem');\

        Route::get('sua/{id}','UserController@getSua');
        Route::post('sua/{id}','UserController@postSua');

        Route::get('xoa/{id}','TinTucController@getXoa');
    });
    //Group cho ajax
    Route::group(['prefix'=>'ajax'], function (){
        Route::get('loaitin/{idTheLoai}','AjaxController@getLoaiTin');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
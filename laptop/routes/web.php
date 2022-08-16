<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\DanhmucsanphamController;
use App\Http\Controllers\AdminController;
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
//admin
Route::get('/admincp/dangnhap', 'App\Http\Controllers\AdminController@index');
Route::get('/admincp/dashboard', 'App\Http\Controllers\AdminController@trangquanly_hienthi');
Route::post('/admincp/admin_dashboard', 'App\Http\Controllers\AdminController@trangquanly');
Route::get('/admincp/dangxuat', 'App\Http\Controllers\AdminController@dangxuat');
//admin -danhmuc
Route::get('/admincp/danhmucsanpham/them', 'App\Http\Controllers\DanhmucsanphamController@themdanhmuc');
Route::get('/admincp/danhmucsanpham/lietke', 'App\Http\Controllers\DanhmucsanphamController@lietkedanhmuc');
Route::post('/admincp/danhmucsanpham/luu', 'App\Http\Controllers\DanhmucsanphamController@luudanhmuc');
Route::get('/admincp/danhmucsanpham/sua/{id_danhmuc}', 'App\Http\Controllers\DanhmucsanphamController@suadanhmuc');
Route::get('/admincp/danhmucsanpham/xoa/{id_danhmuc}', 'App\Http\Controllers\DanhmucsanphamController@xoadanhmuc');
Route::post('/admincp/danhmucsanpham/capnhat/{id_danhmuc}', 'App\Http\Controllers\DanhmucsanphamController@capnhatdanhmuc');
//admin -sanpham
Route::get('/admincp/sanpham/them', 'App\Http\Controllers\SanphamController@themsanpham');
Route::get('/admincp/sanpham/lietke', 'App\Http\Controllers\SanphamController@lietkesanpham');
Route::post('/admincp/sanpham/luu', 'App\Http\Controllers\SanphamController@luusanpham');
Route::get('/admincp/sanpham/sua/{id_sanpham}', 'App\Http\Controllers\SanphamController@suasanpham');
Route::get('/admincp/sanpham/xoa/{id_sanpham}', 'App\Http\Controllers\SanphamController@xoasanpham');
Route::post('/admincp/sanpham/capnhat/{id_sanpham}', 'App\Http\Controllers\SanphamController@capnhatsanpham');
//user
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home') ;
Route::get('/danhmucsanpham/{id_danhmuc}', 'App\Http\Controllers\HomeController@show') ;




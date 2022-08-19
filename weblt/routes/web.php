<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SanphamController;
use App\Http\Controllers\DanhmucsanphamController;
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

Route::get('/', function () {
    return view('welcome');
});







//route đăng nhập admin
Route::get('/admincp/login','App\Http\Controllers\AdminLoginController@login')->name('admincp.login');
//route đăng nhập admin
Route::get('/admincp/logout','App\Http\Controllers\AdminLoginController@logout')->name('admincp.logout');
//route check tk mk admin
Route::post('/admincp','App\Http\Controllers\AdminLoginController@loginPost')->name('admincp');

//trang chủ trang adminn
Route::get('/admincp/home','App\Http\Controllers\AdminLoginController@home')->name('admincp.home');
//route quản lý danh mục
Route::resource('/admincp/danhmuc', DanhmucsanphamController::class);
//route quản lý sản phẩm
Route::resource('/admincp/sanpham', SanphamController::class);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//trang chủ trang người dùng
Route::get('/','App\Http\Controllers\SanphamController@hienthi')->name('pages.home');
//sản phẩm theo danh mục
Route::get('/danhmucsanpham/{id_danhmuc}','App\Http\Controllers\DanhmucsanphamController@show_danhmuc');
//chi tiết
Route::get('/chitietsanpham/{id_sanpham}','App\Http\Controllers\SanphamController@chitietsanpham');
//đăng nhập
// Route::get('/login','App\Http\Controllers\HomeController@index')->name('home');
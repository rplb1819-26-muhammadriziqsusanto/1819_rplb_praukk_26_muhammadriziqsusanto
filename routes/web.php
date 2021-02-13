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

Route::get('/frontend', function () {
    return view('web.login');
});
Route::get('/frontend/register', function () {
    return view('web.masyarakat.register');
});
Route::get('/frontend/masyarakat', function () {
    return view('web.masyarakat.index');
});
Route::get('/frontend/masyarakat/data_pengaduan', function () {
    return view('web.masyarakat.pengaduan');
});
Route::get('/frontend/masyarakat/data_pengaduan/detail', function () {
    return view('web.masyarakat.detail');
});
Route::get('/petugas/dashboard', function () {
    return view('web.petugas.index');
});
Route::get('/petugas/pengaduan', function () {
    return view('web.petugas.pengaduan.index');
});

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {

    Route::prefix('/pengguna')->group(function () {

        Route::get('/', 'Pengguna\ListPenggunaController@index')->name('list_pengguna');

        Route::match(['get', 'post'], '/form', 'Pengguna\FormPenggunaController@index')->name('form_pengguna');

    });

    Route::prefix('/kunci')->group(function () {
        Route::get('/', 'Kunci\ListKunciController@index')->name('list_kunci');
        Route::match(['get', 'post'], '/form', 'Kunci\FormKunciController@index')->name('form_kunci');
    });

    Route::prefix('/data-pinjaman')->group(function () {
        Route::get('/', 'DataPinjaman\ListDataPinjamanController@index')->name('list_data_pinjaman');
        Route::match(['get', 'post'], '/form', 'DataPinjaman\FormDataPinjamanController@index')->name('form_data_pinjaman');
    });

});

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


Route::prefix('')->middleware('auth')->group(function() {
    Route::get('/', 'HomeController@index');
});

Route::prefix('ktp')->middleware('auth')->group(function() {
    Route::get('/', 'KtpController@index');
    Route::get('/create', 'KtpController@create');
    Route::get('/{id}/edit', 'KtpController@edit');
    Route::get('/{id}/show_ubah', 'KtpController@show_ubah');
    Route::post('/store', 'KtpController@store');
    Route::post('/{id}/ubah_status', 'KtpController@ubah_status');
    Route::post('/{id}/update', 'KtpController@update');
    Route::get('/{id}/delete', 'KtpController@delete');
});

Route::prefix('kia')->middleware('auth')->group(function() {
    Route::get('/', 'KiaController@index');
    Route::get('/create', 'KiaController@create');
    Route::get('/{id}/edit', 'KiaController@edit');
    Route::get('/{id}/show_ubah', 'KiaController@show_ubah');
    Route::post('/store', 'KiaController@store');
    Route::post('/{id}/ubah_status', 'KiaController@ubah_status');
    Route::post('/{id}/update', 'KiaController@update');
    Route::get('/{id}/delete', 'KiaController@delete');
});

Route::prefix('kk')->middleware('auth')->group(function() {
    Route::get('/', 'KkController@index');
    Route::get('/create', 'KkController@create');
    Route::get('/{id}/edit', 'KkController@edit');
    Route::get('/{id}/show_ubah', 'KkController@show_ubah');
    Route::post('/store', 'KkController@store');
    Route::post('/{id}/ubah_status', 'KkController@ubah_status');
    Route::post('/{id}/update', 'KkController@update');
    Route::get('/{id}/delete', 'KkController@delete');
});

Route::prefix('akta-kelahiran')->middleware('auth')->group(function() {
    Route::get('/', 'AktaKelahiranController@index');
    Route::get('/create', 'AktaKelahiranController@create');
    Route::get('/{id}/edit', 'AktaKelahiranController@edit');
    Route::get('/{id}/show_ubah', 'AktaKelahiranController@show_ubah');
    Route::post('/store', 'AktaKelahiranController@store');
    Route::post('/{id}/ubah_status', 'AktaKelahiranController@ubah_status');
    Route::post('/{id}/update', 'AktaKelahiranController@update');
    Route::get('/{id}/delete', 'AktaKelahiranController@delete');
});

Route::prefix('akta-kematian')->middleware('auth')->group(function() {
    Route::get('/', 'AktaKematianController@index');
    Route::get('/create', 'AktaKematianController@create');
    Route::get('/{id}/edit', 'AktaKematianController@edit');
    Route::get('/{id}/show_ubah', 'AktaKematianController@show_ubah');
    Route::post('/store', 'AktaKematianController@store');
    Route::post('/{id}/ubah_status', 'AktaKematianController@ubah_status');
    Route::post('/{id}/update', 'AktaKematianController@update');
    Route::get('/{id}/delete', 'AktaKematianController@delete');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

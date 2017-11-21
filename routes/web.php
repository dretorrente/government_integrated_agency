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
    return view('index');
});

Route::get('/lto', function () {
    return view('lto');
});

Route::get('/lto2', function () {
    return view('lto2');
});

Route::get('/lto3', function () {
    return view('lto3');
});

Route::get('/lto4', function () {
    return view('lto4');
});

Route::get('/renewal', function () {
    return view('renewal');
});

Route::get('/nbi', function () {
    return view('nbi');
});

Route::get('/nbi2', function () {
    return view('nbi2');
});

Route::get('/nbi3', function () {
    return view('nbi3');
});

Route::get('/dfa', function () {
    return view('dfa');
});

Route::get('/dfa2', function () {
    return view('dfa2');
});

Route::get('/dfa3', function () {
    return view('dfa3');
});
Route::get('/admin/lto', function () {
    return view('admin.admin_lto');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


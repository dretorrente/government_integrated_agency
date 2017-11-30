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
Route::get('/land_transportation_office', function () {
    return view('lto');
});
Route::get('/', function () {
    return view('index');
});


Route::get('/land_transportation_office/student_application', function () {
    return view('lto2');
});

Route::get('/land_transportation_office/non_professional_application', function () {
    return view('lto3');
});

Route::get('/land_transportation_office/professional_application', function () {
    return view('lto4');
});

Route::get('/land_transportation_office/license_renewal', function () {
    return view('renewal');
});

Route::match(['get', 'post'], '/land_transportation_office/accept_application/{id}',[
    'uses' => 'LtoRecordController@accept_application',
    'as'   => 'accept_application'
]);

Route::match(['get', 'post'], '/land_transportation_office/decline_application/{id}',[
    'uses' => 'LtoRecordController@decline_application',
    'as'   => 'decline_application'
]);

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

Route::get('/admin', function () {
    return view('admin.admin');
});

Route::get('/admin/student_application', [
    'uses' => 'ltoRecordController@student_application'
]);

Route::get('/admin/non_professional_application', [
    'uses' => 'ltoRecordController@non_professional_application'
]);

Route::get('/admin/professional_application', [
    'uses' => 'ltoRecordController@professional_application'
]);

Route::get('/admin/dfa', function () {
    return view('admin.admin_dfa');
});
Route::get('/admin/nbi', function () {
    return view('admin.admin_nbi');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/lto/upload',[
    'uses' => 'ltoRecordController@upload',
    'as'   => 'upload'
]);

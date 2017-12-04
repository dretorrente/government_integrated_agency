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

Auth::routes();

Route::group(['middleware' =>['auth']], function() {
    // LAND TRANSPORTATION OFFICE
    Route::get('/land_transportation_office', function () {
        return view('lto.lto');
    });

    Route::get('/land_transportation_office/student_application', function () {
        return view('lto.lto2');
    });

    Route::get('/land_transportation_office/non_professional_application', function () {
        return view('lto.lto3');
    });

    Route::get('/land_transportation_office/professional_application', function () {
        return view('lto.lto4');
    });

    Route::get('/land_transportation_office/license_renewal', function () {
        return view('lto.renewal');
    });

    Route::match(['get', 'post'], '/land_transportation_office/accept_application/{id}',[
        'uses' => 'LtoRecordController@accept_application',
        'as'   => 'accept_application'
    ]);

    Route::match(['get', 'post'], '/land_transportation_office/decline_application/{id}',[
        'uses' => 'LtoRecordController@decline_application',
        'as'   => 'decline_application'
    ]);

    Route::get('/admin/student_application', [
        'uses' => 'ltoRecordController@student_application'
    ]);

    Route::get('/admin/non_professional_application', [
        'uses' => 'ltoRecordController@non_professional_application'
    ]);

    Route::get('/admin/professional_application', [
        'uses' => 'LtoRecordController@professional_application'
    ]);

    Route::post('/lto/upload',[
        'uses' => 'LtoRecordController@upload',
        'as'   => 'upload'
    ]);

    // NATIONAL BUREAU

    Route::get('/national_bureau', function () {
        return view('nbi.nbi');
    });

    Route::get('/national_bureau/clearance', function () {
        return view('nbi.nbi2');
    });

    Route::get('/national_bureau/online_application', function () {
        return view('nbi.nbi3');
    });

    Route::match(['get', 'post'], '/national_bureau/accept_application/{id}',[
        'uses' => 'NbiRecordController@accept_application',
        'as'   => 'accept_application'
    ]);

    Route::match(['get', 'post'], '/national_bureau/decline_application/{id}',[
        'uses' => 'NbiRecordController@decline_application',
        'as'   => 'decline_application'
    ]);

    Route::get('/admin/online_application', [
        'uses' => 'NbiRecordController@online_application'
    ]);

    Route::post('/nbi/upload',[
        'uses' => 'NbiRecordController@upload',
        'as'   => 'nbiUpload'
    ]);

    //DEPARTMENT OF FOREIGN AFFAIR

    Route::get('/department_of_foreign_affair', function () {
        return view('dfa');
    });

    Route::get('/department_of_foreign_affair/new_application', function () {
        return view('dfa.dfa2');
    });

    Route::get('/department_of_foreign_affair/passport_renewal', function () {
        return view('dfa.dfa3');
    });

    Route::post('/dfa/upload',[
        'uses' => 'DfaRecordController@upload',
        'as'   => 'dfaUpload'
    ]);

    Route::match(['get', 'post'], '/department_of_foreign_affair/accept_application/{id}',[
        'uses' => 'DfaRecordController@accept_application',
    ]);

    Route::match(['get', 'post'], '/department_of_foreign_affair/decline_application/{id}',[
        'uses' => 'DfaRecordController@decline_application',
    ]);

    Route::get('/admin/new_application', [
        'uses' => 'DfaRecordController@new_application'
    ]);

    Route::get('/admin/passport_renewal', [
        'uses' => 'DfaRecordController@passport_renewal'
    ]);

    // ADMIN HOME 

    Route::get('/admin', function () {
        return view('admin.admin');
    });

    // USERS 

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/admin/users', ['uses' => 'UserController@users_list']);

    Route::match(['get', 'post'], '/admin/view_user/{id}', ['uses' => 'UserController@view_user']);

    Route::match(['get', 'post'], '/admin/delete_user/{id}', ['uses' => 'UserController@delete_user']);

    Route::post('/admin/update',[
        'uses' => 'UserController@update_user',
        'as'   => 'userUpdate'
    ]);

    Route::get('/home', 'HomeController@index')->name('home');
});

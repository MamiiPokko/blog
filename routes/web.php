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
    return view('home');
});



Auth::routes();

Route::get('/home', 'HomeController@index');


Route::get('admin/add', 'AdminController@getadd');
Route::post('admin/add', 'AdminController@add');

Route::get('admin/lists', 'AdminController@getlists');
Route::get('admin/hotel', 'AdminController@gethotel');
Route::get('admin/customer', 'AdminController@getcustomer');
Route::get('admin/viewcus/', 'AdminController@getviewcus');
//admin-middleware
Route::get('/admin/edit', 'AdminController@getedit');
Route::post('admin/edit', 'AdminController@edit');



Route::get('admin/editstaff/{id}', 'AdminController@editstaff');
Route::post('admin/editstaff/{id}', 'AdminController@updatestaff');
Route::get('admin/deletestaff/{id}', 'AdminController@deletestaff');
Route::get('admin/editroom/{id}', 'AdminController@editroom');
Route::post('admin/editroom/{id}', 'AdminController@updateroom');
Route::get('admin/deleteroom/{id}', 'AdminController@deleteroom');


Route::get('/library', 'LibraryController@getindex');
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('admin','AdminController');


//StaffController-middleware
Route::get('/member/lists', 'StaffController@getlists');
Route::get('/member/hotel', 'StaffController@gethotel');
Route::get('/member/edit', 'StaffController@getedit');
Route::post('/member/edit', 'StaffController@edit');
Route::get('/member/editroom/{id}', 'StaffController@editroom');
Route::post('/member/editroom/{id}', 'StaffController@updateroom');
Route::get('/member/deleteroom/{id}', 'StaffController@deleteroom');
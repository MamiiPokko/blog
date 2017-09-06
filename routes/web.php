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

Route::get('/home', 'HomeController@index');

//admin
Route::get('/add', 'AdminController@getadd');
Route::post('/add', 'AdminController@add');

//menu-bar
Route::get('/lists', 'AdminController@getlists');
Route::get('/hotel', 'AdminController@gethotel');
Route::get('/customer', 'AdminController@getcustomer');

Route::get('/addcus', 'AdminController@getaddcus');
//Route::get('/addcus', 'AdminController@addcus');

Route::get('/edit', 'AdminController@getedit');
Route::post('/edit', 'AdminController@edit');



Route::get('/editstaff/{id}', 'AdminController@editstaff');
Route::post('/editstaff/{id}', 'AdminController@updatestaff');
Route::get('/deletestaff/{id}', 'AdminController@deletestaff');

Route::get('/editroom/{id}', 'AdminController@editroom');
Route::post('/editroom/{id}', 'AdminController@updateroom');
Route::get('/deleteroom/{id}', 'AdminController@deleteroom');


Route::get('/library', 'LibraryController@getindex');
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('admin','AdminController');
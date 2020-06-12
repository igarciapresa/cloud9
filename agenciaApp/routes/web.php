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
Auth::routes();
Route::get('/', function () {
    return view('index');
});

Route::get('admin', 'BackendPaqueteController@admin');

Route::resource('admin/paquete', 'BackendPaqueteController');

/*Route::get('/admin', function () {
    return view('backend.index');
});*/

//Route::get('/home', 'HomeController@index')->name('home');


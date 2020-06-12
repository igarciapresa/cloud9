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

Route::get('/', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/new_photo', 'PhotosController@create')->name('new_photo');
Route::get('/change_description/{photo}', 'PhotosController@edit')->name('change_description');
Route::post('/new_change_description', 'PhotosController@update')->name('new_change_description');
Route::post('/new_photo_send', 'PhotosController@store')->name('new_photo_send');
Route::post('/valoration', 'AssessmentsController@store')->name('valoration');
Route::delete('/borrar/{id}', 'PhotosController@destroy');

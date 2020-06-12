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
//Route::get('/home', 'HomeController@index')->name('home');

/*Route::get('/', function () {
    return view('index');
});*/

Route::get('/', 'IndexController@index');
Route::get('correo', 'IndexController@correo');
Auth::routes(['verify' => true]);
Route::get('/'         , 'IndexController@index');
//Route::get('logged'    , 'IndexController@logged');
//Route::get('logout'    , '\App\Http\Controllers\Auth\LoginController@logout');
//Route::get('registered', 'IndexController@registered');
//Route::get('reseted'   , 'IndexController@reseted');
//Route::get('verified'  , 'IndexController@verified');
Route::get('guest', 'IndexController@guest')->middleware('guest');
Route::get('autentificado', 'IndexController@autentificado')->middleware('auth');
Route::get('verificado', 'IndexController@verificado')->middleware(['auth', 'verified']);
Route::get('basic', 'IndexController@basic')->middleware('basic');
//Route::get('basic', 'IndexController@basic')->middleware(\App\Http\Middleware\BasicMiddleware::class);
Route::get('admin', 'IndexController@admin')->middleware('admin');
Route::get('censura', 'IndexController@censura')->middleware(\App\Http\Middleware\CensorshipMiddleware::class);

//Route::resource('pokemon', 'PokemonController');
//Route::resource('type'   , 'TypeController');
//Route::resource('user'   , 'UserController')->except(['index', 'create', 'store', 'show', 'destroy']);
Route::get('user', 'UserController@edit')->middleware('auth');
Route::put('user', 'UserController@update')->middleware('auth');
Route::put('user/password', 'UserController@password')->middleware('auth');
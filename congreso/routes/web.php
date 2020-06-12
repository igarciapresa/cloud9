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

// Route::get('/', 'HomeController@index')->name('home_welcome');
// Route::get('/welcome', 'HomeController@index')->name('welcome');

Auth::routes(['verify' => true]);
//Todas las rutas deberían tener el middleware
//Usar resources(rutas put y delete)
Route::get('/', 'HomeController@index')->name('home')->middleware('verified');

Route::get('/', 'HomeController@index')->name('welcome');

Route::get('/administrador', 'AdminController@index')->name('administrador')->middleware('verified');

Route::get('/ponente', 'UserController@ponente')->name('ponente')->middleware('verified');

Route::get('/comite', 'UserController@comite')->name('comite')->middleware('verified');

Route::get('/cambiarrole/{user}', 'AdminController@cambiarrole')->name('cambiarrole')->middleware('verified');

Route::get('/borrarusuario/{user}', 'UserController@destroy')->name('borrarusuario')->middleware('verified');

Route::post('/nuevo_role_user', 'UserController@update')->name('nuevo_role_user')->middleware('verified');

Route::get('/nueva_ponencia', 'PonenciaController@create')->name('nueva_ponencia')->middleware('verified');

Route::post('/nueva_ponencia_store', 'PonenciaController@store')->name('nueva_ponencia_store')->middleware('verified');

Route::get('/nuevo_user', 'UserController@create')->name('nuevo_user')->middleware('verified');

Route::post('/nuevo_user_store', 'UserController@store')->name('nuevo_user_store');

Route::get('/vista_ponencia/{ponencia}', 'PonenciaController@view')->name('vista_ponencia')->middleware('verified');

Route::post('/ponencia_visualizada', 'PonenciaController@visualizada')->name('ponencia_visualizada')->middleware('verified');

Route::get('/view-email/{id_ponencia}', 'EmailController@viewEmail')->name('view-email')->middleware('verified');

Route::get('/register-email', 'EmailController@registerEmail')->name('register-email')->middleware('verified');

Route::get('/borrarponencia/{ponencia}', 'PonenciaController@destroy')->name('borrarponencia')->middleware('verified');//delete

Route::get('/editponencia/{ponencia}', 'PonenciaController@edit')->name('editponencia')->middleware('verified');

Route::post('/ponencia_update', 'PonenciaController@update')->name('ponencia_update')->middleware('verified');//put

Route::get('/usuario', 'UserController@show')->name('usuario')->middleware('verified');

Route::post('/actualizar_usuario', 'UserController@update1')->name('actualizar_usuario')->middleware('verified');

Route::get('/editar_contrasena', 'UserController@contrasena')->name('editar_contrasena')->middleware('verified');

Route::post('/actualizar_contrasena', 'UserController@update2')->name('actualizar_contrasena')->middleware('verified');

Route::resource('Ponente', "PonenteController")->middleware('verified');

Route::resource('salon', "SalonController");
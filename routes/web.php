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

Route::get('/','WelcomeController@index');
Route::get('/home','HomeController@home');
Route::get('/prestamo/solicitar','PrestamosController@solicitar');
Route::get('/prestamo/autorizar','PrestamosController@autorizar');
Route::post('/prestamo/guardar','PrestamosController@guardar');
Route::get('/prestamo/autorizar','PrestamosController@autorizar');
Route::post('/prestamo/autorizarPrestamo/{id}','PrestamosController@autorizarPrestamo');
Route::get('/admin','AdminController@index');
Auth::routes();
Route::get('/logout','Auth\LoginController@logout');
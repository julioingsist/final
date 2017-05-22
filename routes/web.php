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
Route::post('/prestamo/autorizarPrestamo/{id}','PrestamosController@autorizarPrestamo');
Route::post('/prestamo/rechazarPrestamo/{id}','PrestamosController@rechazarPrestamo');
Route::get('/admin','AdminController@index');
Auth::routes();
Route::get('/logout','Auth\LoginController@logout');
Route::get('/consultarClientes','ClientesController@consultarClientes');
Route::get('/consultarVendedores','VendedoresController@consultarVendedores');
Route::get('/vendedor/registrar','VendedoresController@registrar');
Route::post('/vendedor/guardar','VendedoresController@guardar');
Route::get('/cliente/registrar','ClientesController@registrar');
Route::post('/cliente/guardar','ClientesController@guardar');


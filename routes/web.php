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
Route::get('/logout','Auth\LoginController@logout');
Route::get('/','WelcomeController@index');
Route::get('/home','HomeController@home');

//Prestamos
Route::get('/prestamo/solicitar','PrestamosController@solicitar');
Route::get('/prestamo/autorizar','PrestamosController@autorizar');
Route::post('/prestamo/guardar','PrestamosController@guardar');
Route::get('/prestamo/autorizarPrestamo/{id}','PrestamosController@autorizarPrestamo');
Route::get('/prestamo/rechazarPrestamo/{id}','PrestamosController@rechazarPrestamo');

//Vendedores
Route::get('/consultarVendedores','VendedoresController@consultarVendedores');
Route::get('/vendedor/registrar','VendedoresController@registrar');
Route::post('/vendedor/guardar','VendedoresController@guardar');
Route::get('/vendedor/habilitar/{id}','VendedoresController@habilitar');
Route::get('/vendedor/deshabilitar/{id}','VendedoresController@deshabilitar');

//Clientes
Route::get('/consultarClientes','ClientesController@consultarClientes');
Route::get('/cliente/registrar','ClientesController@registrar');
Route::post('/cliente/guardar','ClientesController@guardar');
Route::get('/cliente/habilitar/{id}','ClientesController@habilitar');
Route::get('/cliente/deshabilitar/{id}','ClientesController@deshabilitar');

//Abonos
Route::get('/abono/registrar','AbonosController@registrar');
Route::get('/abono/guardar','AbonosController@guardar');






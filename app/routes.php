<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', "CorreosController@index");
Route::get('correos', "CorreosController@index");
Route::get('correos/nuevo', "CorreosController@nuevo");
Route::post('correos/images', "CorreosController@images");
Route::post('correos/enviar', "CorreosController@enviar");
Route::get('cuentas', "CuentasController@index");
Route::get('grupos', "GruposController@index");
Route::get('contactos', "ContactosController@index");
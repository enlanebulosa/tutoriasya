<?php

use App\User;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/prueba/{id}', [
//    'uses' => 'TestController@view',
//    'as' => 'domicilio'
//]);


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', 'RoutesController@checkAuth');

Route::group(['prefix' => 'admin'], function(){
    Route::get('crearusuario', 'AdminController@registeruser');
    Route::get('listarusuarios', 'AdminController@listusers');
});
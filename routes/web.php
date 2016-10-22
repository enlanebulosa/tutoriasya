<?php

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
Route::get("/perfil",function(){
	return view("perfil");
});
Route::get("/buscar",function(){
	return view("buscar");
});
//Route::get('/prueba/{id}', [
//    'uses' => 'TestController@view',
//    'as' => 'domicilio'
//]);


Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', 'RoutesController@checkAuth');

Route::group(['prefix' => 'admin'], function(){
    Route::get('/', 'AdminController@home');
    Route::get('crearusuario', 'AdminController@registerUser');
    Route::get('usuarios', 'AdminController@listUsers');
    Route::get('materias', 'AdminController@listMaterias');
});

// Ruta provisoria para agregar usuarios administradores.
Route::get('agregaradmin', function(){
   return view('admin.usuarios.register');
});
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
Route::get('/profile', 'UsersController@profile');
Route::post('profile','UsersController@update_avatar');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', 'RoutesController@checkAuth');

Route::get('profesores', 'UsersController@listProfesores');

Route::group(['prefix' => 'admin'], function(){
    Route::get('/', 'AdminController@home');
    
    Route::group(['prefix' => 'usuarios'], function(){
        Route::get('/', 'AdminController@listUsers');
        Route::get('crearusuario', 'AdminController@registerUser');
        Route::post('crearusuario', 'UsersController@newUser');
    });
    
    #Habria que hacer un middleware para evitar que un guest pueda crear materias.
    Route::group(['prefix' => 'materias'], function(){
        Route::get('/', 'AdminController@listMaterias');
        Route::post('crearmateria', 'MateriasController@newMateria');
    });
    
    
});

// Ruta provisoria para agregar usuarios administradores.
Route::get('agregaradmin', function(){
   return view('admin.usuarios.register');
});

// Rutas para pruebas
Route::get('prueba', function(){
   return view('/usuario/profesor');
});
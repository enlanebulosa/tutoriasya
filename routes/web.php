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


Auth::routes();
Route::patch('/profesores',[
    'as' => 'user.usuario.profesores',
]);

Route::get('/gmaps', ['as' => 'gmaps', 'uses' => 'GmapsController@index']);
Route::get('/home', 'HomeController@index');
Route::get('/', 'RoutesController@checkAuth');

Route::get('profesores', 'UsersController@listProfesores');

Route::get('email-verification/error', 'Auth\RegisterController@getVerificationError')->name('email-verification.error');
Route::get('email-verification/check/{token}', 'Auth\RegisterController@getVerification')->name('email-verification.check');

Route::group(['middleware' => ['web', 'isVerified']], function () {
    Route::group(['middleware' => ['web', 'isLogged']], function () {

        Route::get('/profile', 'UsersController@profile');
        Route::post('profile','UsersController@update_avatar');

        Route::group(['middleware' => ['web', 'isAdmin']], function () {
            Route::group(['prefix' => 'admin'], function(){
				Route::resource('usuarios', 'UsersController');
				Route::get('usuarios/{id}/destroy',['uses' => 'UsersController@destroy','as' => 'usuarios.destroy']);
                Route::get('/', 'AdminController@home');

                #Habria que hacer un middleware para evitar que un guest pueda crear materias.
                Route::group(['prefix' => 'materias'], function(){
                    Route::get('/', 'AdminController@listMaterias');
                    Route::post('crearmateria', 'MateriasController@newMateria');
                });

                Route::group(['prefix' => 'tutorias'], function(){
                    Route::get('/', 'AdminController@listTutorias');
                    Route::post('creartutoria', 'UserMateriaController@nuevaTutoria');
                });

                Route::group(['prefix' => 'usuarios'], function(){
                    Route::get('/', 'AdminController@listUsers');
                    Route::get('crearusuario', 'AdminController@registerUser');
                    Route::post('crearusuario', 'UsersController@newUser');
                });

            });
        });
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
 

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

//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/login', function () {
//    return view('login');
//});
//Route::get('/prueba/{id}', [
//    'uses' => 'TestController@view',
//    'as' => 'domicilio'
//]);

Route::get('/admin', function () {
    return view('admin');
});

Route::get('/paginacion', function () {
    return view('paginacion');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/', 'RoutesController@checkAuth');
Route::get('/paginacion', 'PaginacionController@checkAuth');

Route::get('/paginacion2', function(){   
    $users=User::orderBy('id', 'ASC')->paginate(5);
    return view('users')->with('users',$users);
});

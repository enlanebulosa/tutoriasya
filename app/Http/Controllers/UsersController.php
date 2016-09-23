<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use DB;

class UserController extends Controller
{
    public function index(){
    		$user=User::all();
    		return view('paginacion',['user'=>$user]);
    	}
    public function newUser(Requests $request){
    	if ($request->ajax()) {
    		$user=User::create($request->all());
    		return Response($user);
    		}
    	} 
    public function getUpdate(Requests $request){
    	if ($request->ajax()) 
    	{
    		$user=User::find($request->id);
    		return Response($user);	
    		}
    	} 

    public function newUpdate(Requests $request){
    	if ($request->ajax()) {
    		$user=User::find($request->id);
    		$user->nombre=$request->nombre;
    		$user->apellido=$request->apellido;
    		$user->dni=$request->dni;
    		$user->email=$request->email;
    		$user->tipo=$request->tipo;
    		$user->save();

    		return Response($user);	
    		}
    	} 
    public function deleteUser(Requests $request){
    	if ($request->ajax()) 
    	{
    		User::destroy($request->id);
    		return Response()->json(['sms'=>'Eliminado correctamente']);	
    		}
    	} 
} 
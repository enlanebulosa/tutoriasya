<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use App\Materia;
use DB;

class UserMateriaController extends Controller
{
    public function index(){
        // Retorna a la vista todas los usuarios, hay que solucionar esto.
        // Solo debe darle los usuarios que tienen al menos una materia asignada.
                $users=User::all();
    		return view('paginacionum',['users'=>$users]);
    	}
    public function newUserMateria(Requests $request){
    	if ($request->ajax()) {
    		$user=User::find($request->id_usuario);
                $user->materias()->attach($request->id_materia);
    		return Response($user);
    		}
    	} 
    public function getUpdate(Requests $request){
    	if ($request->ajax()) 
    	{
    		$materia=User::find($request->id)->materias->find($request->id_materia);
    		return Response($materia);	
    		}
    	} 

    public function newUpdate(Requests $request){
    	if ($request->ajax()) {
    		$user=User::find($request->id_usuario);
    		$user->materias()->attach($request->id_materia);
    		}
    	} 
    public function deleteUser(Requests $request){
    	if ($request->ajax()) 
    	{
    		$user=User::find($request->id_usuario);
                $user->materias()->detach($request->id_materia);
    		return Response()->json(['sms'=>'Relacion eliminada correctamente']);	
    		}
    	} 
} 
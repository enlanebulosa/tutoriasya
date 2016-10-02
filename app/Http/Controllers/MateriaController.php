<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Materia;
use DB;

class MateriaController extends Controller
{
    public function index(){
            $materia=Materias::all();
            return view('paginacion',['materia'=>$materia]);
        }
    public function newMateria(Requests $request){
        if ($request->ajax()) {
            $materia=Materia::create($request->all());
            return Response($materia);
            }
        } 
    public function getUpdate(Requests $request){
        if ($request->ajax()) 
        {
            $materia=Materia::find($request->id);
            return Response($materia);  
            }
        } 

    public function newMateriaUpdate(Requests $request){
        if ($request->ajax()) {
            $materia=Materia::find($request->id);
            $materia->nombre=$request->nombre;
            $materia->nivel=$request->nivel;
            $materia->save();

            return Response($materia);  
            }
        } 
    public function deleteMateria(Requests $request){
        if ($request->ajax()) 
        {
            Materia::destroy($request->id);
            return Response()->json(['sms'=>'Eliminado correctamente']);    
            }
        } 
} 
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Materia;

class MateriasController extends Controller
{
    public function index(){
        $materia=Materias::all();
        return view('paginacion',['materia'=>$materia]);
    }
    
    public function newMateria(Request $request){
        $materia=Materia::create($request->all());
        return redirect('admin/materias');
    } 
    
    public function getUpdate(Request $request){
        if ($request->ajax()) 
        {
            $materia=Materia::find($request->id);
            return Response($materia);  
            }
        } 

    public function newMateriaUpdate(Request $request){
        if ($request->ajax()) {
            $materia=Materia::find($request->id);
            $materia->nombre=$request->nombre;
            $materia->nivel=$request->nivel;
            $materia->save();

            return Response($materia);  
            }
        } 
    public function deleteMateria(Request $request){
        if ($request->ajax()) 
        {
            Materia::destroy($request->id);
            return Response()->json(['sms'=>'Eliminado correctamente']);    
            }
        } 
} 
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\User;
use App\Materia;
class AdminController extends Controller
{
    //
    public function home(){
        return AdminController::checkAuth('admin.home');
    }
    
    public function registerUser() {
        return AdminController::checkAuth('admin.usuarios.register');
    }
    
    public function listUsers(){
        $users=User::orderBy('id', 'ASC')->paginate(10);
        return AdminController::checkAuth('admin.usuarios.users')->with('users',$users);
    }
    
    public function listMaterias() {
        $materias=Materia::orderBy('id', 'ASC')->paginate(10);
        return AdminController::checkAuth('admin.materias.materia')->with('materias', $materias);
    }
    
    
    public function checkAuth($vista){
        if(Auth::check()){
            if (Auth::user()->tipo == 'administrador'){
                return view($vista);
            }
            else{
                return redirect("home");
            }
        }
        else{
            return redirect("home");;
        }
    }
}     

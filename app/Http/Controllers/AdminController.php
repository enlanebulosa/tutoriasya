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
        return view('admin.home');
    }

    public function registerUser() {
        return view('admin.usuarios.register');
    }

    public function listUsers(){
        $users=User::orderBy('id', 'ASC')->paginate(10);
        return view('admin.usuarios.users')->with('users',$users);
    }

    public function listMaterias() {
        $materias=Materia::orderBy('id', 'ASC')->paginate(10);
        return view('admin.materias.materia')->with('materias', $materias);
    }

    public function listTutorias() {
        $users=User::has('materias')->paginate(10);
        $materias=Materia::all();
        $data = ['users'=>$users, 'materias'=>$materias];
        return view('admin.tutorias.tutorias')->with('users',$users)->with($data);
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

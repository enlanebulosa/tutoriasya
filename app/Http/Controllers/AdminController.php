<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests;
use App\User;

class AdminController extends Controller
{
    //
    public function registerusers() {
        return AdminController::checkAuth('admin.register');
    }
    
    public function login(){
        echo Auth::user()->nombre;
    }
    
    public function listusers(){
        $users=User::orderBy('id', 'ASC')->paginate(10);
        return AdminController::checkAuth('users')->with('users',$users);
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

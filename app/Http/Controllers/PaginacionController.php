<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use App\User;

class PaginacionController extends Controller
{
    //
    public function checkAuth() {
        if(Auth::check()){
            if (Auth::user()->tipo == 'administrador'){
                
//    		$users=User::all()->paginate(2);
                $users=User::orderBy('id', 'ASC')->paginate(5);
                return view('paginacion')->with('users',$users);
            }
            else{
                return view("home");
            }
        }
        else{
            return view('welcome');
        }
        
    }
}

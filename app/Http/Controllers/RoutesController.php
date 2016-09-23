<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class RoutesController extends Controller
{
    //
    public function checkAuth() {
        if(Auth::check()){
            if (Auth::user()->tipo == 'administrador'){
                return view('admin');
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

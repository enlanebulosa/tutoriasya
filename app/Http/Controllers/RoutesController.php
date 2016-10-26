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
                return redirect('/admin');
            }
            else{
                return redirect('/home');
            }
        }
        else{
            return view('inicio');
        }
    }
}

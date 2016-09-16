<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Domicilio;

class TestController extends Controller
{
    //
    public function view ($id){
        $domicilio = Domicilio::find($id);
        $domicilio->usuario;
        dd($domicilio);
    }
}

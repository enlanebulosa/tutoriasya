<!DOCTYPE html>
@extends('layouts.app')
@section("title", "Lista de usuarios")
@section("content")
@include('flash::message')
@include('admin.usuarios.newUsers')

<html>

<head>


<style>
* {
  box-sizing: border-box;
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 12px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#profesores {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

#profesores li a {
  border: 0px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #66CDAA;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#profesores li a.header {
  background-color: #006400;
  cursor: default;
}
/*Color al seleccionar*/
#profesores li a:hover:not(.header) { 
  background-color: #f6f6f6;
}
</style>
</head>


<body style="background-color: #3bbaa7 ">



<font color="white">
<center><h1><a href="{{ url('/profesores') }}" class="header">Profesores</a></h1></center>


<div class="container">
<div class="panel panel-default">

<div class="panel-body" style="background-color: #008080 ">


{!! Form::model(Request::all(),['route' => 'user.usuario.profesores', 'method' =>'GET', 'class' => 'navbar-form navbar-left pull-right', 'role' => 'search']) !!}
<div class="form-group">
{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre del profesor']) !!}
{!! Form::text('apellido', null, ['class' => 'form-control', 'placeholder' => 'Apellido del profesor']) !!}
{!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'E-mail del profesor']) !!}



</div>
<button type="submit" class="btn btn-default">Buscar</button>
</form>


        
        
        <table class="table table-over" >

    <tbody >

<br/><br/>
      @foreach($users as $user)




<br/>

<ul id="profesores">
  <li><a href="#" class="header">Profesor</a></li>
  <li><a href="#"><img src='/uploads/avatars/{{$user->avatar}}' style="width:80px; height:80px; float:left; border-radius:50%; margin-right:25px;"> {{ $user->nombre }}
  
 {{ $user->apellido }}
  <br/>{{ $user->email }}<br/><br/><br/></a></li>

  <br/>
  <br/>

</ul>



@endforeach
    </tbody>
   </table>

  <center>  {!! $users->appends(Request::all())->render() !!} </center>
</div>
</div>
</div>
@endsection 
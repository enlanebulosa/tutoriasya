@extends('layouts.app')
@section("title", "Profesores disponibles")
@section('content')
<!DOCTYPE html>

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
  border: 1px solid #ddd;
  margin-top: -1px; /* Prevent double borders */
  background-color: #f6f6f6;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  color: black;
  display: block
}

#profesores li a.header {
  background-color: #e2e2e2;
  cursor: default;
}

#profesores li a:hover:not(.header) {
  background-color: #eee;
}
</style>
</head>


<body>
<body style="background-color: #3bbaa7 ;">


<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Nombre" title="Type in a name">
<ul id="profesores">

@foreach($users as $user)

<div class="col-md-2">
</div>
@if ($user->tipo=="profesor")




<ul id="profesores">
  <li><a href="#" class="header">Profesor</a></li>
  <li><a href="#"><img src='/uploads/avatars/{{$user->avatar}}' style="width:80px; height:80px; float:left; border-radius:50%; margin-right:25px;"> {{ $user->nombre }} {{ $user->apellido }}
  <br/>{{ $user->email }}<br/><br/><br/></a></li>
  <br/>
  <br/>

</ul>

@endif

@endforeach

<script>
function myFunction() {
    var input, filter, ul, li, a, i;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("profesores");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";

        }
    }
}
</script>

</body>
</html>
@endsection



<!-- Esta es la versión anterior pero ordenada. No cuenta con filtro.
<!DOCTYPE html>
@extends("layouts/app")
@section("title", "Profesores disponibles")
@section("content")

<div class="col-md-12">
<div class="container">
<center><h1>Profesores</h1></center>

<div class="col-md-2">
<form  method="post">
Nombre<input type="text" name="nombre" value="" >
<input type="submit" name="submit" value="Buscar">
</form>
</div>
<div class="col-md-10">

<table class="table table-hover" id="dev-table">
<tbody>
@foreach($users as $user)
<div class="col-md-4">

</div>
<div class="col-md-8">
<div class="panel panel-info">
@if ($user->tipo=="profesor")



<div class="panel-heading">

 
    
    <b><i> {{ $user->tipo }}</i></b>
  
  </div>


<div class="col-md-10">
<div class="panel-body">
<div class="col-md-4">

  

   <img src="avatar.png" alt="Chania" width="100" height="100">
   </div>
   <div class="col-md-6">
  <h4>{{ $user->nombre }} {{ $user->apellido }}</h4>
   
    {{ $user->email }}<br/>  
  
     </div>
    <div class="col-md-2">
    Mapa<br/><br/><br/><br/>
    Puntaje
    </div>
  </div>
</div>
</div>


</div>
@endif
@endforeach
</tbody>
</table>
</div>
</div>
@extends('layouts.app')

@section('content')
<div class="col-md-3">
</div>
<div class="col-md-8">

@if (Auth::user()->tipo=="administrador") 
<div class="panel panel-warning">
@elseif (Auth::user()->tipo=="profesor")
<div class="panel panel-primary">
@else
<div class="panel panel-info">
@endif
 <div class="panel-heading">
    
    <b><i> {{ Auth::user()->tipo }}</i></b>
  
  </div>
 <div class="panel-body">
<div class="col-md-3">

  

   <img src="avatar.png" alt="Chania" width="100" height="100">
   </div>
   <div class="col-md-7">
  <h4>{{ Auth::user()->nombre }} {{ Auth::user()->apellido }}</h4>
   
    {{ Auth::user()->email }}<br/>  
  
     </div>
    <div class="col-md-2">
    Mapa<br/><br/><br/><br/>
    Puntaje
    </div>
  </div>
</div>
</div>
@endsection

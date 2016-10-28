@extends('layouts.app')

@section('content')
@if (Auth::user()->tipo=="administrador") 
<body style="background-color:  #ba3b3b  ;">
@elseif (Auth::user()->tipo=="alumno")
<body style="background-color: #3bbaa7 ;">
@else
<body style="background-color: #e1bd09  ;">

@endif
<div class="container">
    <div class="row">
    <font color="white">
        <div class="col-md-10 col-md-offset-1">
            <img src='/uploads/avatars/{{$user->avatar}}' style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;"> 
            <h2>Perfil de {{$user->nombre}}</h2>
            {{$user->tipo}}<br/>
            <form enctype="multipart/form-data" action="/profile" method="POST">
            <label>Cambiar el avatar</label>
            <input type="file" name="avatar">
            <input type="hidden" name="_token" value='{{ csrf_token() }}'>
            <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
            </div>
        </div>
    </div>
</div>
</font>
</body>
 <br/>
        <br/>
        <br/>
        <br/>
        <div class="panel panel-warning">
         <div class="panel-heading">
        <center><font face="Comic Sans MS,arial,verdana">Historial</font></center>
        </div>
        
        <div class="panel-body">
        {{$user->nombre}} se conectó por última vez en el {{$user->updated_at}} <br/>
        <br/>
        {{$user->nombre}} se registró en {{$user->created_at}}<br/>
        </div>
         </div>
         </div>
    </div>
</div>


@endsection
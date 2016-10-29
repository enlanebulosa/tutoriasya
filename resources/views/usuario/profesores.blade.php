<!DOCTYPE html>
@extends("layouts/app")
@section("title", "Profesores disponibles")
@section("content")
<div class="container">
<div class="panel panel-default">
    <div class="panel-heading" style="height: 45px">
    
</div>
<div class="panel-body">
        <h1>Profesores</h1>
	 <table class="table table-over">
	 	<tbody>
	 		@foreach($users as $user)
                            <tr>
                                @include("usuario/profesor")
                                    @section("avatar")
                                        <img src="uploads/avatars/{{$user -> avatar}}.png" alt="Chania" width="100" height="100">
                                    @endsection

                                    @section("tipo", $user -> tipo)
                                    @section("nombre", $user -> nombre)
                                    @section("apellido", $user -> apellido)
                                    @section("email", $user -> email)
                            </tr>
	 		@endforeach
	 	</tbody>
	 </table>
        
    {!! $users->render() !!}
</div>
</div>
</div>
@endsection  


<!DOCTYPE html>
@extends("layouts.app")
@section("title", "Lista de consultas")
@section("content")
<div class="panel-heading">
</div>
<div class="panel-body">
	 <table class="table table-over">
	 	<h1>Informacion de las consultas</h1>
	 	<thead>
	 		<th>Nombre</th>
	 		<th>Materia</th>
	 		<th>Descripcion</th>
      <th>Nivel</th>
	 	</thead>
	 	<tbody>
        @foreach($consultas as $consulta)
			 		<tr id="{{$consulta->id}}">
		 			<td>{{$consulta->solicitante->nombre . ' ' . $consulta->solicitante->apellido}}</td>
		 			<td>{{$consulta->materia->nombre}}</td>
	        <td>{{$consulta->descripcion}}</td>
					<td>
						<button class="btn btn-success btn-edit" data-id="{{$consulta->id}}"><i class="glyphicon glyphicon-saved"></i>Botoncito</button>

					</td>
        @endforeach
	 	</tbody>
	 </table>
        {!! $consultas->render() !!}
</div>
@endsection

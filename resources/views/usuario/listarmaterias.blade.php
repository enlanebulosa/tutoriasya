<!DOCTYPE html>
@extends("layouts.app")
@section("title", "Lista de materias del profesor")
@section("content")
<div class="panel-body">

    <h1>Listado de tus Materias</h1>
    <table class="table table-over">
	 	<thead>
	 		<th>Materia</th>
	 		<th>Nivel</th>
		</thead>
	 	<tbody>
	 		@foreach($materias as $materia)
	 		<tr id="materias{{$materia ->id}}">
	 			<td>{{$materia ->nombre}}</td>
	 			<td>{{$materia ->nivel}}</td>
	 			<td>

					<a href="{{ route('materia.edit', $materia->id) }}" class="btn btn-primary ">
					Editar</a>
					<a href="{{ route('materia.destroy', $materia->id) }}"onclick="return confirm('¿Seguro deseas eliminarlo?')" class="btn btn-danger ">
					Borrar</a>
	 			<!--	<button class="btn btn-success btn-edit" data-id="{{$user->id}}"><i class="glyphicon glyphicon-saved"></i  >Editretrtrtttetar</button> -->
	 			<!--	<button class="btn btn-danger btn-delete" data-id="{{$user->id}}"><i class="glyphicon glyphicon-remove"></i>Borrar</button> -->

	 			</td>
	 		</tr>
	 		@endforeach
	 	</tbody>
	 </table>
</div>
@endsection

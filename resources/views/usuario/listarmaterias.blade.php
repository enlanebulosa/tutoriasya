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
	 		<tr id="materias{{$materia->id}}">
	 			<td>{{$materia->nombre}}</td>
	 			<td>{{$materia->tipo}}</td>
	 			<td>


	 			</td>
	 		</tr>
	 		@endforeach
	 	</tbody>
	 </table>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
	$('#add').on('click',function(){
		$('#save').val('save');
		$('#frmMateria').trigger('reset');
		$('#materia').modal('show');
	})
	$('.btn-edit').on('click',function(){
		alert($(this).data('id'));
	})

</script>
@endsection

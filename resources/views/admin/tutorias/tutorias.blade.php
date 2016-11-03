<!DOCTYPE html>
@extends("admin.navbar")
@section("title", "Lista de tutorías")
@section("content")
<div class="panel-heading">
	 <button type="button" class="btn btn-info" id="add" value="add">Nuevo tutoría</button>
</div>
<div class="panel-body">
	@include('admin/tutorias/nuevatutoria', ['materias'=>$materias])
	 <table class="table table-over">
	 	<h1>Informacion de las tutorías</h1>
	 	<thead>
	 		<th>Nombre</th>
	 		<th>Apellido</th>
	 		<th>Materia</th>
                        <th>Nivel</th>
	 	</thead>
	 	<tbody>
	 		@foreach($users as $user)
        @foreach($user->materias as $materia)
			 		<tr id="users{{$user->id}}">
			 			<td>{{$user ->nombre}}</td>
			 			<td>{{$user ->apellido}}</td>

			 			<td>{{$materia ->nombre}}</td>
		        <td>{{$materia ->nivel}}</td>
<!--				<td> <ul>
							@foreach($user->materias as $materia)
								<li>{{$materia ->nombre}} Nivel {{$materia ->nivel}}</li>
		        	@endforeach
			 			</ul></td>
			 		</tr> -->
					<td>
						<button class="btn btn-success btn-edit" data-id="{{$user->id}}"><i class="glyphicon glyphicon-saved"></i  >Editar</button>
						<button class="btn btn-danger btn-delete" data-id="{{$user->id}}"><i class="glyphicon glyphicon-remove"></i>Borrar</button>

					</td>
        @endforeach
	 		@endforeach
	 	</tbody>
	 </table>
        {!! $users->render() !!}
</div>
@endsection

@section('scripts')
<script type="text/javascript">
	$('#add').on('click',function(){
		$('#save').val('save');
		$('#frmUsers').trigger('reset');
		$('#users').modal('show');
	})
	$('.btn-edit').on('click',function(){
		alert($(this).data('id'));
	})
</script>
@endsection

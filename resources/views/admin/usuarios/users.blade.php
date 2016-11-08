<!DOCTYPE html>
@extends("admin.navbar")
@section("title", "Lista de usuarios")
@section("content")
<div class="panel-heading">
	 <button type="button" class="btn btn-info" id="add" value="add">Nuevo Usuario</button>
</div>
<div class="panel-body">
	@include('admin.usuarios.newUsers')
        <h1>Informacion de los Usuarios</h1>
        @include('flash::message')
        <table class="table table-over">
	 	<thead>
	 		<th>ID</th>
	 		<th>Nombre</th>
	 		<th>Apellido</th>
	 		<th>dni</th>
	 		<th>Email</th>
	 		<th>Tipo</th>
	 	</thead>
	 	<tbody>
	 		@foreach($users as $user)
	 		<tr id="users{{$user ->id}}">
	 			<td>{{$user ->id}}</td>
	 			<td>{{$user ->nombre}}</td>
	 			<td>{{$user ->apellido}}</td>
	 			<td>{{$user ->dni}}</td>
	 			<td>{{$user ->email}}</td>
	 			<td>{{$user ->tipo}}</td>
	 			<td>
					
					<a href="{{ route('usuarios.edit', $user->id) }}" class="btn btn-primary ">
					Editar</a>
					<a href="{{ route('usuarios.destroy', $user->id) }}"onclick="return confirm('¿Seguro deseas eliminarlo?')" class="btn btn-danger ">
					Borrar</a>
	 			<!--	<button class="btn btn-success btn-edit" data-id="{{$user->id}}"><i class="glyphicon glyphicon-saved"></i  >Editretrtrtttetar</button> -->
	 			<!--	<button class="btn btn-danger btn-delete" data-id="{{$user->id}}"><i class="glyphicon glyphicon-remove"></i>Borrar</button> -->

	 			</td>
	 		</tr>
	 		@endforeach
	 	</tbody>
	 </table>
    <center>{!! $users->render() !!}</center>
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

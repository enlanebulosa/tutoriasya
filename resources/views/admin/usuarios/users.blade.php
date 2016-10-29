<!DOCTYPE html>
@extends("admin.navbar")
@section("title", "Lista de usuarios")
@section("content")
<div class="container">
<div class="panel panel-default">
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
	 				<button class="btn btn-success btn-edit" data-id="{{$user->id}}"><i class="glyphicon glyphicon-saved"></i  >Editar</button>
	 				<button class="btn btn-danger btn-delete" data-id="{{$user->id}}"><i class="glyphicon glyphicon-remove"></i>Borrar</button>

	 			</td>
	 		</tr>
	 		@endforeach
	 	</tbody>
	 </table>
    {!! $users->render() !!}
</div>
</div>
</div>
@endsection  

@section('scripts')
<script type="text/javascript">
	$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
			}
	})
	$('#add').on('click',function(){
		$('#save').val('save');
		$('#frmUsers').trigger('reset');
		$('#users').modal('show');
	})
	$('.btn-edit').on('click',function(){
		alert($(this).data('id'));
	})

	// boton editar
	$('tbody').delegate('btn-edit','click',function(){
		var value=$(this).data('id');
		var url='{{URL::to('getUpdate')}}';
		$.ajax({
				type : 'get',
				url : url,
				data : {'id':value},
				success:function(data){
					$('#id').val(data.id);
					$('#nombre').val(data.NOMBRE);
					$('#apellido').val(data.apellido);
					$('#dni').val(data.dni);
					$('#email').val(data.email);
					$('#tipo').val(data.tipo);
					$('#save').val('update');
					$('#users').modal('show');
				}
			});
	});
//-----------borrado
	$('tbody').delegate('btn-delete','click',function(){
		var value=$(this).data('id');
		var url='{{URL::to('deleteUsers')}}';
		if (confirm('Seguro desea eliminar usuario?')==true){
			$.ajax({
				type : 'post',
				url : url,
				data : {'id':value},
				success:function(data){
					$('#users'+value).remove();
				}
			});
		}	
	});
</script>
@endsection

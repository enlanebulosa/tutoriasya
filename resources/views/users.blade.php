<!DOCTYPE html>
@extends("layouts.app")
@section("title", "Lista de usuario")
<!--<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="_token" content="{!! csrf_token() !!}" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}"">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="{{ asset('bootstrap/js/bootstrap.js') }}"></script>
</head>
<body>-->

@section("content")
<div class="container">
<div class="panel panel-default">
<div class="panel-heading">
	 <button type="button" class="btn btn-info" id="add" value="add">Nuevo Usuario</button>
</div>
<div class="panel-body">
	@include('newUsers')
	 <table class="table table-over">
	 	<caption>Informacion de usuario</caption>
	 	<thead>
	 		<th>ID</th>
	 		<th>Nombre</th>
	 		<th>Apellido</th>
	 		<th>DNI</th>
	 		<th>Email</th>
	 		<th>Tipo</th>
	 	</thead>
	 	<tbody>
	 		@foreach($users as $key => $users)
	 		<tr id="users{{$users ->id}}">
	 			<td>{{$users ->id}}</td>
	 			<td>{{$users ->nombre}}</td>
	 			<td>{{$users ->apellido}}</td>
	 			<td>{{$users ->dni}}</td>
	 			<td>{{$users ->email}}</td>
	 			<td>{{$users ->tipo}}</td>
	 			<td>
	 				<button class="btn btn-success btn-edit" data-id="{{$users->id}}"><i class="glyphicon glyphicon-saved"></i  >Editar</button>
	 				<button class="btn btn-danger btn-delete" data-id="{{$users->id}}"><i class="glyphicon glyphicon-remove"></i>Borrar</button>

	 			</td>
	 		</tr>
	 		@endforeach
	 	</tbody>
	 </table>
</div>
</div>
@endsection  
 
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




	$('#frmUsers').on('submit',function(e){
		e.preventDefault();
		var form=$('#frmUsers');
		var formData=form.serialize();
		var url =form.attr('action');
		var state=$('#save').val();
		var vtype = 'post';
		if(state=='update'){
			type='put';
			}
		$.ajax({
				type : type,
				url : url,
				data : formData,
				success:function(data){
					var row='<tr id="users'+ data.id +'">'+
				'<td>'+ data.id +'</td>'+
				'<td>'+ data.NOMBRE +'</td>'+
				'<td>'+ data.APELLIDO +'</td>'+
				'<td>'+ data.DNI +'</td>'+
				'<td>'+ data.EMAIL +'</td>'+
				'<td>'+ data.TIPO +'</td>'+
				'<td><button class="btn btn-success btn-edit data-id"'+ data.id +'">Editar</button>'+
	 			'<button class="btn btn-danger btn-delete" data-id"'+ data.id +'">Borrar</button></td>'+
				'</tr>';
				if(state=='save'){
					$('tbody').append(row);
					}else{
						$('#users'+data.id).replaceWith(row);
						}
					$('#frmUsers').trigger('reset');
					$('#NOMBRE').focus();
					}
		});
	})

	function addRow(data){
		var row='<tr id="users'+ data.id +'">'+
				'<td>'+ data.id +'</td>'+
				'<td>'+ data.NOMBRE +'</td>'+
				'<td>'+ data.APELLIDO +'</td>'+
				'<td>'+ data.DNI +'</td>'+
				'<td>'+ data.EMAIL +'</td>'+
				'<td>'+ data.TIPO +'</td>'+
				'<td><button class="btn btn-success btn-edit">Editar</button>'+
	 			'<button class="btn btn-danger btn-delete">Borrar</button></td>'+
				'</tr>';
		$('tbody').append(row);
	}
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
					$('#NOMBRE').val(data.NOMBRE);
					$('#APELLIDO').val(data.APELLIDO);
					$('#DNI').val(data.DNI);
					$('#EMAIL').val(data.EMAIL);
					$('#TIPO').val(data.TIPO);
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
</div>
</body>
</html>

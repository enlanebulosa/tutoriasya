<!DOCTYPE html>
@extends("admin.navbar")
@section("title", "Lista de Materias")
@section("content")
<div class="container">
<div class="panel panel-default">
<div class="panel-heading">
	 <button type="button" class="btn btn-info" id="add" value="add">Nueva Materia</button>
</div>
<div class="panel-body">
    @include('admin.materias.newMateria')
     <table class="table table-over">
            <caption>Materias</caption>
            <thead>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Nivel</th>
            </thead>
            <tbody>
                    @foreach($materias as $materia)
                    <tr id="materia{{$materia ->id}}">
                            <td>{{$materia ->id}}</td>
                            <td>{{$materia ->nombre}}</td>
                            <td>{{$materia ->nivel}}</td>
                            <td>
                                    <button class="btn btn-success btn-edit" data-id="{{$materia->id}}"><i class="glyphicon glyphicon-saved"></i  >Editar</button>
                                    <button class="btn btn-danger btn-delete" data-id="{{$materia->id}}"><i class="glyphicon glyphicon-remove"></i>Borrar</button>

                            </td>
                    </tr>
                    @endforeach
            </tbody>
     </table>  
    {!! $materias->render() !!}
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
		$('#frmMateria').trigger('reset');
		$('#materia').modal('show');
	})
	$('.btn-edit').on('click',function(){
		alert($(this).data('id'));
	})




//	$('#frmMateria').on('submit',function(e){
//		e.preventDefault();
//		var form=$('#frmMateria');
//		var formData=form.serialize();
//		var url =form.attr('action');
//		var state=$('#save').val();
//		var type = 'post';
//		if(state=='update'){
//			type='put';
//			}
//		$.ajax({
//				type : type,
//				url : url,
//				data : formData,
//				success:function(data){
//					var row='<tr id="materia'+ data.id +'">'+
//				'<td>'+ data.id +'</td>'+
//				'<td>'+ data.nombre +'</td>'+
//				'<td>'+ data.apellido +'</td>'+
//				'<td>'+ data.dni+'</td>'+
//				'<td>'+ data.email +'</td>'+
//				'<td>'+ data.tipo +'</td>'+
//				'<td><button class="btn btn-success btn-edit data-id"'+ data.id +'">Editar</button>'+
//	 			'<button class="btn btn-danger btn-delete" data-id"'+ data.id +'">Borrar</button></td>'+
//				'</tr>';
//				if(state=='save'){
//					$('tbody').append(row);
//					}else{
//						$('#materia'+data.id).replaceWith(row);
//						}
//					$('#frmMateria').trigger('reset');
//					$('#nombre').focus();
//					}
//		});
//	})

	function addRow(data){
		var row='<tr id="materia'+ data.id +'">'+
				'<td>'+ data.id +'</td>'+
				'<td>'+ data.nombre +'</td>'+
				'<td>'+ data.nivel+'</td>'+
				'<td><button class="btn btn-success btn-edit">Editar</button>'+
	 			'<button class="btn btn-danger btn-delete">Borrar</button></td>'+
				'</tr>';
		$('tbody').append(row);
	}
	// boton editar
	$('tbody').delegate('btn-edit','click',function(){
		var value=$(this).data('id');
		var url='{{URL::to('getMateriaUpdate')}}';
		$.ajax({
				type : 'get',
				url : url,
				data : {'id':value},
				success:function(data){
					$('#id').val(data.id);
					$('#nombre').val(data.nombre);
					$('#nivel').val(data.nivel);
					$('#save').val('update');
					$('#materia').modal('show');
				}
			});
	});
//-----------borrado
	$('tbody').delegate('btn-delete','click',function(){
		var value=$(this).data('id');
		var url='{{URL::to('deleteMateria')}}';
		if (confirm('Seguro desea eliminar materia?')==true){
			$.ajax({
				type : 'post',
				url : url,
				data : {'id':value},
				success:function(data){
					$('#materia'+value).remove();
				}
			});
		}	
	});


</script>  
@endsection

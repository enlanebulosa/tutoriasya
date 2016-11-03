<!DOCTYPE html>
@extends("admin.navbar")
@section("title", "Lista de Materias")
@section("content")
<div class="panel-heading">
	 <button type="button" class="btn btn-info" id="add" value="add">Nueva Materia</button>
</div>
<div class="panel-body">
    @include('admin.materias.newMateria')
     <table class="table table-over">
            <h1>Materias</h1>
            @include('flash::message')
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
    <center>{!! $materias->render() !!}</center>
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

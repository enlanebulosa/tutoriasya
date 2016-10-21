<!DOCTYPE html>
@extends("admin.navbar")
@section("title", "Lista de usuarios")
@section("content")
<div class="container">

<div class="panel-body">
	@include('admin.usuarios.newUsers')



	@foreach($users as $user)
@if ($user->tipo="profesor")
<div class="col-md-8">


<div class="panel panel-primary">

	 <div class="panel-heading">
    <b><i> {{$user ->tipo}}</i></b>
  </div>
 <div class="panel-body">
<div class="col-md-2">
<img src="avatar.png" alt="Avatar" width="100" height="100">
   </div>
   <div class="col-md-6">
  <h4>{{$user ->nombre}} {{$user ->apellido}}</h4>
     Materia<br/>
     Horario<br/>
     </div>
    <div class="col-md-4">
    Mapa<br/><br/><br/><br/>
    Puntaje
    </div>
  </div>
</div>
</div>



@endif
	 		@endforeach
	 	</tbody>
	 </table>
    {!! $users->render() !!}
</div>
</div>
@endsection  

@section('scripts')
</script>
@endsection

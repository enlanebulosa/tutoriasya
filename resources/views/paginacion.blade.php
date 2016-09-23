@extends("layouts.app")
@section("title", "Lista de usuario")
@section("content")
	<table class="table table-striped">
		<thead>
		<th>ID</th>
		<th>Nombre</th>
		<th>Apellido</th>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<td>{{$user->id}}</td>
				<td>{{$user->nombre}}</td>
				<td>{{$user->apellido}}</td>
			</tr>
			@endforeach
		</tbody>
@endsection
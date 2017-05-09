@extends('admin.template.main')

@section('title','Usuarios')

@section('sub-title', 'Lista de Usuarios')


@section('content')
		
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Tipo</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td class='center'>
					@if($user->type=='admin')
						<spam class="label label-danger">{{ $user->type }}</spam>
					@else
						<spam class="label label-info">{{ $user->type }}</spam>
					@endif
				</td>
				<td>
					<a href="" class="btn btn-danger"></a> <a href="" class="btn btn-warning"></a>
				</td>
				
			</tr>
			@endforeach
		</tbody>
	</table>
	{!! $users->render() !!}
	<div class="row">
		<div class="col-md-2">
			<a href="{{ route('users.create') }}" class="btn btn-primary">Registrar</a>
		</div>
	</div>

@endsection('content')

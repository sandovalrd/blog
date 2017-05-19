@extends('admin.template.main')

@section('title','Usuarios')

@section('sub-title', 'Lista de Usuarios')

@section('content')
		
	<table class="table table-striped">
		<thead>
			<th>Id</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Tipo</th>
			<th class="text-center" width="120px">Accion</th>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->name }}</td>
				<td>{{ $user->email }}</td>
				<td>
					@if($user->type=='admin')
						<spam class="label label-danger">{{ $user->type }}</spam>
					@else
						<spam class="label label-info">{{ $user->type }}</spam>
					@endif
				</td>
				<td>
					<a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning"><spam class="glyphicon glyphicon-wrench" aria-hidden="true"></spam></a> <a href="{{ route('users.destroy', $user->id) }}" onclick="return confirm('Seguro que desea Elimnarlo?')" class="btn btn-danger"><spam class="glyphicon glyphicon-remove-circle" aria-hidden="true"></spam></a>
				</td>
				
			</tr>
			@endforeach
		</tbody>
	</table>
	<div class="row">
		<div class="col-md-12 text-right">
			{!! $users->render() !!}
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<a href="{{ route('users.create') }}" class="btn btn-primary">Registrar</a>
		</div>
	</div>

@endsection('content')

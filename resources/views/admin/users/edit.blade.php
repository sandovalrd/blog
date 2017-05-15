@extends('admin.template.main')

@section('title', 'Crear Usuario')

@section('sub-title', 'Ristrar Usuario')

@section('content')

	
	{!! Form::open(['route' => ['users.update', $user], 'method'=>'PUT', 'class'=>'form-horizontal']) !!}

		<div class="form-group">
			{!! Form::label('name','Nombre:', ['class' => 'control-label col-md-2']) !!}
			<div class="col-md-8">
				{!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder'=> 'Nombre completo', 'required']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('email','Correo Electrónico:', ['class' => 'control-label col-md-2']) !!}
			<div class="col-md-8">
				{!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder'=> 'example@gmail.com', 'required']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('Type', 'Tipo:', ['class' => 'control-label col-md-2']) !!}
			<div class="col-md-8">
				{!! Form::select('type', [''=> 'Seleccione...','member' => 'Miembro', 'admin' => 'Administrador'], $user->type, ['class' => 'form-control']) !!}
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-offset-2	col-md-8">
				{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
			</div>
		</div>

	{!! Form::close() !!}


@endsection('content')
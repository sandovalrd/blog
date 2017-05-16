@extends('admin.template.main')

@section('title', 'Crear Usuario')

@section('sub-title', 'Ristrar Usuario')

@section('content')

	{!! Form::open(['route' => 'users.store', 'method'=>'POST', 'class'=>'form-horizontal']) !!}

		<div class="form-group">
			{!! Form::label('name','Nombre:', ['class' => 'control-label col-md-2']) !!}
			<div class="col-md-8">
				{!! Form::text('name', null, ['class' => 'form-control', 'placeholder'=> 'Nombre completo', 'required']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('email','Correo Electrónico:', ['class' => 'control-label col-md-2']) !!}
			<div class="col-md-8">
				{!! Form::email('email', null, ['class' => 'form-control', 'placeholder'=> 'example@gmail.com', 'required']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('password', 'Contraseña:', ['class' => 'control-label col-md-2']) !!}
			<div class="col-md-8">
				{!! Form::password('password', ['class' => 'form-control', 'placeholder' => '*************', 'required']) !!}
			</div>
		</div>

		<div class="form-group">
			{!! Form::label('Type', 'Tipo:', ['class' => 'control-label col-md-2']) !!}
			<div class="col-md-8">
				{!! Form::select('type', [''=> 'Seleccione...','member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control']) !!}
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-offset-2	col-md-8">
				{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
			</div>
		</div>

	{!! Form::close() !!}


@endsection('content')



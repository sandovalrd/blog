@extends('admin.template.main')

@section('title','Categor&iacute;as')

@section('sub-title','Registrar Categor&iacute;as')

@section('content')

	{!! Form::open(['route'=>'categories.store', 'method'=>'POST', 'class'=>'form-horizontal']) !!}

		<div class="form-group">
			{!! Form::label('name','Categor&iacute;a:', ['class' => 'control-label col-md-2']) !!}
			<div class="col-md-8">
				{!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre de la categoria', 'required']) !!}
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-offset-2	col-md-8">
				{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
			</div>
		</div>
	

	{{ Form::close() }}

@endsection('content')
@extends('admin.template.main')

@section('title','Categor&iacute;as')

@section('sub-title','Editar Categor&iacute;as')

@section('content')

	{!! Form::open(['route'=>['categories.update', $category], 'method'=>'PUT', 'class'=>'form-horizontal']) !!}

		<div class="form-group">
			{!! Form::label('name','Categor&iacute;a:', ['class' => 'control-label col-md-2']) !!}
			<div class="col-md-8">
				{!! Form::text('name', $category->name, ['class'=>'form-control', 'placeholder'=>'Nombre de la categoria', 'required']) !!}
			</div>
		</div>

		<div class="form-group">
			<div class="col-md-offset-2	col-md-8">
				{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
			</div>
		</div>
	

	{{ Form::close() }}

@endsection('content')
@extends('admin.template.main')

@section('title', 'Categor&iacute;as')

@section('sub-title', 'Lista de Categor&iacute;as')

@section('content')
	<div class="row">
		<div class="col-md-offset-1 col-md-10">
			
			<table class="table table-striped">
				<thead>
					<th>Id</th>
					<th>Categor&iacute;a</th>
					<th class="text-center" width="120px">{{ 'Accion' }}</th>
				</thead>
				<tbody>
					@foreach($categories as $category)
						<tr>
							<td>{{ $category->id }} </td>
							<td>{{ $category->name }}</td>
							<td class="text-center">
								<a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning"><spam class="glyphicon glyphicon-wrench" aria-hidden="true"></spam></a> <a href="{{ route('categories.destroy', $category->id) }}" onclick="return confirm('Seguro que desea Elimnarlo?')" class="btn btn-danger"><spam class="glyphicon glyphicon-remove-circle" aria-hidden="true"></spam></a>
							</td>
						</tr>
					@endforeach()
				</tbody>
			</table>
			<div class="row">
				<div class="col-md-12 text-right">
					{!! $categories->render() !!}
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-offset-1	col-md-10"">
			<a href="{{ route('categories.create') }}" class="btn btn-primary">Registrar</a>
		</div>
	</div>
@endsection('content')
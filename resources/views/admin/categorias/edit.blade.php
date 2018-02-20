@extends('admin.templates.main')


@section('title','Editar Categorias |')

@section('encabezado')
	<h1>Editar Categoria</h1>
@endsection

@section('content')

	<form method="POST" action="{{route('admin.categorias.update',$categoria->id)}}">

		 {{ csrf_field() }}
		 {{ method_field('PUT') }}
		
		<div class="form-group">
			
			<label for="nombre">Nombre</label>

			<input type="text" name="nombre" placeholder="Nombre" class="form-control" required="required" value="{{$categoria->nombre}}">


		</div>

		<div class="form-group">
			
			<label for="estado">Estado</label>
			
			<select name="estado" required class="form-control">
				<option value="">Seleccione una opcion...</option>
				@if ($categoria->estado === "activo")
					<option value="activo" selected>Activo</option>
					<option value="inactivo">Inactivo</option>
				@else
					<option value="activo">Activo</option>
					<option value="inactivo" selected>Inactivo</option>
				@endif
			</select>

		</div>


		<div class="form-group">

			<input type="submit" name="Guardar" class="btn btn-primary" value="Guardar">
			
			
		</div>

	</form>

@endsection
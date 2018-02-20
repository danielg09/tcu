@extends('admin.templates.main')


@section('title','Crear Categorias |')

@section('encabezado')
	<h1>Crar Categoria</h1>
@endsection

@section('content')

	<form method="POST" action="{{route('admin.categorias.store')}}">

		 {{ csrf_field() }}
		
		<div class="form-group">
			
			<label for="nombre">Nombre</label>

			<input type="text" name="nombre" placeholder="Nombre" class="form-control" required="required">


		</div>


		<div class="form-group">
			
			<label for="estado">Estado</label>
			
			<select name="estado" required class="form-control">
				<option value="">Seleccione una opcion...</option>
				<option value="activo">Activo</option>
				<option value="inactivo">Inactivo</option>
			</select>

		</div>

		<div class="form-group">

			<input type="submit" name="Guardar" class="btn btn-primary" value="Guardar">
			
			
		</div>

	</form>

@endsection
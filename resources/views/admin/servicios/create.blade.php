@extends('admin.templates.main')


@section('title','Crear Servicios |')

@section('encabezado')
	<h1>Crear Servicio</h1>
@endsection

@section('content')

	<form method="POST" action="{{route('admin.servicios.store')}}">

		 {{ csrf_field() }}
		
		<div class="form-group">
			
			<label for="nombre">Nombre</label>

			<input type="text" name="nombre" placeholder="Nombre" class="form-control" required="required">


		</div>

		<div class="form-group">
							 
			<label for="mision">Descripcion</label>

			<textarea type="text" name="descripcion" class="form-control descripcion-content" rows="6" required="required"></textarea>

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

	@section('js')
		<script>
			$('.descripcion-content').trumbowyg();
		</script>
	@endsection

@endsection
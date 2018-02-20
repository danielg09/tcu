@extends('admin.templates.main')


@section('title','Crear Contactos |')

@section('encabezado')
	<h1>Crear Forma de Contacto</h1>
@endsection

@section('content')

	<form method="POST" action="{{route('admin.contactenos.store')}}">

		 {{ csrf_field() }}
		
		<div class="form-group">
			
			<label for="tipo">Tipo</label>

			<input type="text" name="tipo" placeholder="Tipo" class="form-control" required="required">


		</div>

		<div class="form-group">
			
			<label for="contenidoTipo">Contenido</label>

			<input type="text" name="contenidoTipo" placeholder="Contenido" class="form-control" required="required">


		</div>

		<div class="form-group">
			
			<label for="icono">Icono</label>

			<input type="text" name="icono" placeholder="" class="form-control" required="required">
			<a target="_blank" href="http://fontawesome.io/icons/">Ver iconos disponibles</a> ||
			<span class="label label-success">Ejemplos: fab fa-whatsapp | fab fa-whatsapp fa-lg</span>
			<span class="label label-info">Tamaños de Iconos: fa-xs | fa-sm | fa-lg | fa-2x | fa-3x</span>



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
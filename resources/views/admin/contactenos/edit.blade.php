@extends('admin.templates.main')


@section('title','Actualizar Contactos |')

@section('encabezado')
	<h1>Editar Forma de Contacto</h1>
@endsection

@section('content')

	<form method="POST" action="{{route('admin.contactenos.update',$contacto->id)}}">

		 {{ csrf_field() }}
		 {{ method_field('PUT') }}
		
		
		<div class="form-group">
			
			<label for="tipo">Tipo</label>

			<input type="text" name="tipo" placeholder="Tipo" class="form-control" required="required" value="{{$contacto->tipo}}">


		</div>

		<div class="form-group">
			
			<label for="contenidoTipo">Contenido</label>

			<input type="text" name="contenidoTipo" placeholder="Contenido" class="form-control" required="required" value="{{$contacto->contenidoTipo}}">


		</div>

		<div class="form-group">
			
			<label for="icono">Icono</label>

			<input type="text" name="icono" placeholder="ejm: fa fa-whatsapp {fa-lg}" class="form-control" required="required" value="{{$contacto->icono}}">
			<a target="_blank" href="http://fontawesome.io/icons/">Ver iconos disponibles</a> ||
			<span class="label label-success">Ejemplos: fab fa-whatsapp | fab fa-whatsapp fa-lg</span>
			<span class="label label-info">Tamaños de Iconos: fa-xs | fa-sm | fa-lg | fa-2x | fa-3x</span>


		</div>

		<div class="form-group">
			
			<label for="estado">Estado</label>
			
			<select name="estado" required class="form-control">
				<option value="">Seleccione una opcion...</option>
				@if ($contacto->estado === "activo")
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
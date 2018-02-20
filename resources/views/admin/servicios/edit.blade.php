@extends('admin.templates.main')


@section('title','Editar Servicios |')

@section('encabezado')
	<h1>Editar Servicio</h1>
@endsection

@section('content')

	<form method="POST" action="{{route('admin.servicios.update',$servicio->id)}}">

		 {{ csrf_field() }}
		 {{ method_field('PUT') }}
		
		<div class="form-group">
			
			<label for="nombre">Nombre</label>

			<input type="text" name="nombre" placeholder="Nombre" class="form-control" required="required" value="{{$servicio->nombre}}">


		</div>

		<div class="form-group">
							 
			<label for="mision">Descripcion</label>

			<textarea type="text" name="descripcion" class="form-control descripcion-content" rows="6" required="required">
				{{$servicio->descripcion}}</textarea>

		</div>

		<div class="form-group">
			
			<label for="estado">Estado</label>
			
			<select name="estado" required class="form-control">
				<option value="">Seleccione una opcion...</option>
				@if ($servicio->estado === "activo")
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

	@section('js')
		<script>
			$('.descripcion-content').trumbowyg();
		</script>
	@endsection

@endsection
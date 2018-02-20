@extends('admin.templates.main')


@section('title','Crear Productos |')

@section('encabezado')
	<h1>Crear Producto</h1>
@endsection

@section('content')

	<form method="POST" action="{{route('admin.productos.store')}}">

		 {{ csrf_field() }}
		
		<div class="form-group">
			
			<label for="nombre">Nombre</label>

			<input type="text" name="nombre" placeholder="Nombre" class="form-control" required="required">


		</div>

		<div class="form-group">
			
			<label for="categoria">Categoría</label>
			
			<select name="categoria" required class="form-control">
				<option value="">Seleccione una opcion...</option>
				@foreach ($categorias as $categoria)
					<option value="{{$categoria->id}}">{{$categoria->nombre}}</option>
				@endforeach
			</select>

		</div>

		<div class="form-group">
							 
			<label for="descripcion">Descripción</label>

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
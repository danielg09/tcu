@extends('admin.templates.main')


@section('title','Crear Promoción |')

@section('encabezado')
	<h1>Crear Promoión</h1>
@endsection

@section('content')

	<form method="POST" action="{{route('admin.promociones.store')}}" enctype="multipart/form-data">

		 {{ csrf_field() }}
		
		<div class="form-group">
			
			<label for="nombre">Nombre</label>

			<input type="text" name="nombre" placeholder="Nombre" class="form-control" required="required">


		</div>


		<div class="form-group">
	    	<label for="archivo">Archivo</label>
	  		<input required type="file" name="archivo">
	    </div>

		<div class="form-group">

			<input type="submit" name="Guardar" class="btn btn-primary" value="Guardar">
			
			
		</div>

	</form>

@endsection
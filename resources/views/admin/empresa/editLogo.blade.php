@extends('admin.templates.main')


@section('title','Actualizar Empresa |')

@section('encabezado')
	<h1>Editar Logo de la Empresa</h1>
@endsection

@section('content')

	<form method="POST" action="{{route('admin.empresa.update.logo',$empresa->id)}}" enctype="multipart/form-data">

		 {{ csrf_field() }}
		 {{ method_field('PUT') }}
		
		
		<div class="form-group">
	    	<label for="logo">Logo</label>
	  		<input required type="file" name="logo">
	  		<span class="label label-info">Tamaño: Ancho 103 pixeles - Alto 42 pixeles</span>
	    </div>

		<div class="form-group">

			<input type="submit" name="Guardar" class="btn btn-primary" value="Guardar">
			
			
		</div>

	</form>


@endsection
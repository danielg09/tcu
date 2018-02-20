@extends('admin.templates.main')
@section('title','Lista de Categorias |')

@section('encabezado')
	<h1>Lista de Promociónes</h1>
@endsection

@section('content')
	<a href="{{ route('admin.promociones.create') }}" class="btn btn-info">Registrar Nueva Promoción</a> 
	<div class="table-responsive">
		<table class="table">
			
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre de la Promoción</th>
					<th>Archivo</th>
					<th>Accion</th>
				</tr>
			</thead>

			<tbody>
				
				@foreach($promociones as $promocion)
					<tr>
						 <td>{{ $promocion->id}}</td> 
						 <td>{{ $promocion->nombrePromocion}}</td> 
						 <td>{{ $promocion->ubicacionArchivo}}</td> 
						 <td><a href="{{ route('admin.promociones.destroy',$promocion->id)}}" class="btn btn-danger" onclick="return confirm('¿Seguro que desas eliminarlo?')">Eliminar</a> 
						 <a href="{{ route('admin.promociones.edit', $promocion->id) }}" class="btn btn-warning">Actualizar</a></td>  
					 </tr>
				@endforeach

			</tbody>


		</table>
	</div>
	{{ $promociones->links() }}

@endsection
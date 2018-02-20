@extends('admin.templates.main')
@section('title','Lista de Servicios |')

@section('encabezado')
	<h1>Lista de Servicios</h1>
@endsection

@section('content')
	<a href="{{ route('admin.servicios.create') }}" class="btn btn-info">Registrar Nuevo Servicio</a> 
	<div class="table-responsive">
		<table class="table">
			
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Estado</th>
					<th>Accion</th>
				</tr>
			</thead>

			<tbody>
				
				@foreach($servicios as $servicio)
					<tr>
						 <td>{{ $servicio->id}}</td> 
						 <td>{{ $servicio->nombre}}</td> 
						 <td>{!! $servicio->descripcion!!}</td>
						 <td>{{ $servicio->estado}}</td> 
						 <td><a href="{{ route('admin.servicios.destroy',$servicio->id)}}" class="btn btn-danger" onclick="return confirm('¿Seguro que desas eliminarlo?')">Eliminar</a> 
						 <a href="{{ route('admin.servicios.edit', $servicio->id) }}" class="btn btn-warning">Actualizar</a></td>  
					 </tr>
				@endforeach

			</tbody>


		</table>
	</div>
	{{ $servicios->links() }}

@endsection
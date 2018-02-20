@extends('admin.templates.main')
@section('title','Lista de Formas de Contactenos |')

@section('encabezado')
	<h1>Lista de Formas de Contactenos</h1>
@endsection

@section('content')
	<a href="{{ route('admin.contactenos.create') }}" class="btn btn-info">Registrar Nueva Forma de Contacto</a> 
	<div class="table-responsive">
		<table class="table">
			
			<thead>
				<tr>
					<th>Id</th>
					<th>Tipo</th>
					<th>Contenido</th>
					<th>Icono</th>
					<th>Estado</th>
					<th>Accion</th>
				</tr>
			</thead>

			<tbody>
				
				@foreach($contactenos as $contacto)
					<tr>
						 <td>{{ $contacto->id}}</td> 
						 <td>{{ $contacto->tipo}}</td> 
						 <td>{{ $contacto->contenidoTipo}}</td>
						 <td><i class="{{ $contacto->icono}}"></i></td> 
						 <td>{{ $contacto->estado}}</td> 
						 <td><a href="{{ route('admin.contactenos.destroy',$contacto->id)}}" class="btn btn-danger" onclick="return confirm('¿Seguro que desas eliminarlo?')">Eliminar</a> 
						 <a href="{{ route('admin.contactenos.edit', $contacto->id) }}" class="btn btn-warning">Actualizar</a></td>  
					 </tr>
				@endforeach

			</tbody>


		</table>
	</div>
	{{ $contactenos->links() }}

@endsection
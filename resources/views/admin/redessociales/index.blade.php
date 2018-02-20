@extends('admin.templates.main')
@section('title','Lista de Redes Sociales |')

@section('encabezado')
	<h1>Lista de Redes Sociales</h1>
@endsection

@section('content')
	<a href="{{ route('admin.redessociales.create') }}" class="btn btn-info">Registrar Nueva Red Social</a> 
	<div class="table-responsive">
		<table class="table">
			
			<thead>
				<tr>
					<th>Id</th>
					<th>Red</th>
					<th>URL</th>
					<th>Icono</th>
					<th>Estado</th>
					<th>Accion</th>
				</tr>
			</thead>

			<tbody>
				
				@foreach($redesSociales as $redSocial)
					<tr>
						 <td>{{ $redSocial->id}}</td> 
						 <td>{{ $redSocial->red}}</td> 
						 <td><a href="{{ $redSocial->url}}" target="_blank">{{ $redSocial->url}}</a></td>
						 <td><i class="{{ $redSocial->icono}}" aria-hidden="true"></i></td> 
						 <td>{{ $redSocial->estado}}</td> 
						 <td><a href="{{ route('admin.redessociales.destroy',$redSocial->id)}}" class="btn btn-danger" onclick="return confirm('¿Seguro que desas eliminarlo?')">Eliminar</a> 
						 <a href="{{ route('admin.redessociales.edit', $redSocial->id) }}" class="btn btn-warning">Actualizar</a></td>  
					 </tr>
				@endforeach

			</tbody>


		</table>
	</div>
	{{ $redesSociales->links() }}

@endsection
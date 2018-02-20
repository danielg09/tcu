@extends('admin.templates.main')
@section('title','Lista de Categorias |')

@section('encabezado')
	<h1>Lista de Categorias</h1>
@endsection

@section('content')
	<a href="{{ route('admin.categorias.create') }}" class="btn btn-info">Registrar Nueva Categoria</a> 
	<div class="table-responsive">
		<table class="table">
			
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Estado</th>
					<th>Accion</th>
				</tr>
			</thead>

			<tbody>
				
				@foreach($categorias as $categoria)
					<tr>
						 <td>{{ $categoria->id}}</td> 
						 <td>{{ $categoria->nombre}}</td> 
						 <td>{{ $categoria->estado}}</td> 
						 <td><a href="{{ route('admin.categorias.destroy',$categoria->id)}}" class="btn btn-danger" onclick="return confirm('¿Seguro que desas eliminarlo?')">Eliminar</a> 
						 <a href="{{ route('admin.categorias.edit', $categoria->id) }}" class="btn btn-warning">Actualizar</a></td>  
					 </tr>
				@endforeach

			</tbody>


		</table>
	</div>
	{{ $categorias->links() }}

@endsection
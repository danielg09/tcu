@extends('admin.templates.main')
@section('title','Lista de Productos |')

@section('encabezado')
	<h1>Lista de Productos</h1>
@endsection

@section('content')
	<a href="{{ route('admin.productos.create') }}" class="btn btn-info">Registrar Nueva Categoria</a> 
	<div class="table-responsive">
		<table class="table">
			
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Categoría</th>
					<th>Descripción</th>
					<th>Estado</th>
					<th>Accion</th>
				</tr>
			</thead>

			<tbody>
				
				@foreach($productos as $producto)
					<tr>
						 <td>{{ $producto->id}}</td> 
						 <td>{{ $producto->nombre}}</td>
						 <td>{{ $producto->categoria->nombre}}</td>  
						 <td>{!! $producto->descripcion!!}</td> 
						 <td>{{ $producto->estado}}</td> 
						 <td><a href="{{ route('admin.productos.destroy',$producto->id)}}" class="btn btn-danger" onclick="return confirm('¿Seguro que desas eliminarlo?')">Eliminar</a> 
						 <a href="{{ route('admin.productos.edit', $producto->id) }}" class="btn btn-warning">Actualizar</a></td>  
					 </tr>
				@endforeach

			</tbody>


		</table>
	</div>

	{{ $productos->links() }}

@endsection
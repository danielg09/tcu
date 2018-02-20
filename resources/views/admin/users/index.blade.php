@extends('admin.templates.main')
@section('title','Lista de  Usuarios |')

@section('encabezado')
	<h1>Lista de Usuarios</h1>
@endsection

@section('content')
	<a href="{{ route('admin.users.create') }}" class="btn btn-info">Registrar Nuevo Usuario</a> 
	<div class="table-responsive">
		<table class="table">
			
			<thead>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Email</th>
					<th>Accion</th>
				</tr>
			</thead>

			<tbody>
				
				@foreach($users as $user)
					<tr>
						 <td>{{ $user->id}}</td> 
						 <td>{{ $user->name}}</td> 
						 <td>{{ $user->email}}</td>
						 <td><a href="{{ route('admin.users.destroy',$user->id)}}" class="btn btn-danger" onclick="return confirm('¿Seguro que desas eliminarlo?')">Eliminar</a> 
						 <a href="{{ route('admin.users.edit', $user->id) }}" class="btn btn-warning">Actualizar</a></td>  
					 </tr>
				@endforeach

			</tbody>


		</table>
	</div>
	{{ $users->links() }}

@endsection

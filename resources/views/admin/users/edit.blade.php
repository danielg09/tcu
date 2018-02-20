@extends('admin.templates.main')


@section('title','Actualizar Usuarios |')

@section('encabezado')
	<h1>Editar Usuario</h1>
@endsection

@section('content')

	<form method="POST" action="{{route('admin.users.update',$user->id)}}">

		 {{ csrf_field() }}
		 {{ method_field('PUT') }}
		
		<div class="form-group">
			
			<label for="name">Nombre</label>

			<input type="text" name="name" placeholder="Nombre" class="form-control" required="required" value="{{$user->name}}">


		</div>

		<div class="form-group">

			<label for="email">Email</label>

			<input type="email" name="email" placeholder="Email" class="form-control" required="required" value="{{$user->email}}">
			

		</div>



		<div class="form-group">

			<input type="submit" name="Guardar" class="btn btn-primary" value="Guardar">
			
			
		</div>

	</form>

@endsection
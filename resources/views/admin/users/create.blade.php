@extends('admin.templates.main')


@section('title','Crear Usuarios |')

@section('encabezado')
	<h1>Crear Usuario</h1>
@endsection


@section('content')

	<form method="POST" action="{{route('admin.users.store')}}">

		 {{ csrf_field() }}
		
		<div class="form-group">
			
			<label for="name">Nombre</label>

			<input type="text" name="name" placeholder="Nombre" class="form-control" required="required">


		</div>

		<div class="form-group">

			<label for="email">Email</label>

			<input type="email" name="email" placeholder="Email" class="form-control" required="required">
			

		</div>

		<div class="form-group">

			<label for="password">Password</label>

			<input type="password" name="password" placeholder="Password" class="form-control" required="required">
			

		</div>


		<div class="form-group">

			<input type="submit" name="Guardar" class="btn btn-primary" value="Guardar">
			
			
		</div>

	</form>

@endsection
@extends('admin.templates.autentificacion')


@section('title','Login')

@section('header')
	<h1 class="text-center">Inicio de Sesión</h1>
@endsection


@section('content')

	<div style="width: 50%" class="panel panel-default center-block">
      <div class="panel-body">

			<form method="POST" action="{{route('admin.autentificacion.autentificacion')}}">

				 {{ csrf_field() }}
				
				<div class="form-group">
							
				    <label for="email">Email address</label>
				    <input type="email" class="form-control" name="email" placeholder="Email" required="required">


				</div>


				<div class="form-group">
					
					<label for="password">Password</label>
		   			<input type="password" class="form-control" name="password" placeholder="Password" required="required">

				</div>

				@if (isset($error))
					<div class="alert alert-danger alert-dismissible" role="alert">
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					  <strong>Error!</strong> {{$error}}.
					</div>
				@endif

				<div class="form-group">

					<input type="submit" name="login" class="btn btn-primary btn-lg btn-block" value="Login">
					
					
				</div>

			</form>
	  </div>
	</div>

@endsection
@extends('admin.templates.main')


@section('title','Actualizar Empresa |')

@section('encabezado')
	<h1>Editar Informacion de la Empresa</h1>
@endsection

@section('content')

	<form method="POST" action="{{route('admin.empresa.update',$empresa->id)}}" enctype="multipart/form-data">

		 {{ csrf_field() }}
		 {{ method_field('PUT') }}
		
		<div class="form-group">
			
			<label for="nombre">Nombre</label>

			<input type="text" name="nombre" placeholder="Nombre" class="form-control" required="required" value="{{$empresa->nombre}}">


		</div>

		<div class="form-group">

			<label for="cedulaJuridica">Cedula Jurídica</label>

			<input type="text" name="cedulaJuridica" placeholder="Cedula Jurídica" class="form-control" required="required" value="{{$empresa->cedulaJuridica}}">
			

		</div>

				<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		  <div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingOne">
			      <h4 class="panel-title">
			        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
			          Misión
			        </a>
			      </h4>
			    </div>
			    <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
			      <div class="panel-body">
			       	  	<div class="form-group">
							 
							<label for="mision">Misión</label>

							<textarea type="text" name="mision" class="form-control mision-content" rows="6" required="required">
								{{$empresa->mision}}
							</textarea>

						</div>
			      </div>
			    </div>
		  </div>
		  <div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingTwo">
			      <h4 class="panel-title">
			        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
			          Visión
			        </a>
			      </h4>
			    </div>
			    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
			      <div class="panel-body">
			       	  	<div class="form-group">
							 
							<label for="vision">Visión</label>

							<textarea type="text" name="vision" class="form-control vision-content" rows="6" required="required">
								{{$empresa->vision}}
							</textarea>

						</div>
			      </div>
			    </div>
		  </div>
		  <div class="panel panel-default">
			    <div class="panel-heading" role="tab" id="headingThree">
			      <h4 class="panel-title">
			        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
			          Acerca de la empresa
			        </a>
			      </h4>
			    </div>
			    <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
			      <div class="panel-body">
			       	  	<div class="form-group">
							 
							<label for="acercaDe">Acerca de la empresa</label>

							<textarea type="text" name="acercaDe" class="form-control acerca-content" rows="6" required="required">
								{{$empresa->acercaDe}}
							</textarea>

						</div>
			      </div>
			    </div>
		  </div>
		</div>


		<div class="form-group">

			<input type="submit" name="Guardar" class="btn btn-primary" value="Guardar">
			
			
		</div>

	</form>

	@section('js')
		<script>
			$('.mision-content').trumbowyg();
			$('.vision-content').trumbowyg();
			$('.acerca-content').trumbowyg();
		</script>
	@endsection

@endsection
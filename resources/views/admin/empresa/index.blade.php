@extends('admin.templates.main')
@section('title','Informacion de la empresa |')

@section('encabezado')
	<h1>Informacion de la Empresa</h1>
@endsection

@section('content')
	@if ($empresas->count()<=0)
		<a href="{{ route('admin.empresa.create') }}" class="btn btn-info">Registrar una nueva empresa</a> 
	@endif

	@foreach($empresas as $empresa)
		<div class="table-responsive">
			<table class="table">
				
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Cedula Juridica</th>
						<th>Logo</th>
					</tr>
				</thead>

				<tbody>
					
					<tr>
						<td>{{ $empresa->id}}</td> 
						<td>{{ $empresa->nombre}}</td> 
						<td>{{ $empresa->cedulaJuridica}}</td>
						<td><img src="{{ url('/') . $empresa->logo}}"></td>
					</tr>

				</tbody>


			</table>
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
			       {!! $empresa->mision !!}
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
			        {!! $empresa->vision !!}
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
			        {!! $empresa->acercaDe !!}
			      </div>
			    </div>
		  </div>
		</div>

		<div class="panel panel-default">
		  <div class="panel-heading">Acciones</div>
		  <div class="panel-body">
		    <a href="{{ route('admin.empresa.destroy',$empresa->id)}}" class="btn btn-danger" onclick="return confirm('¿Seguro que desas eliminarlo?')">Eliminar Información</a> 
			<a href="{{ route('admin.empresa.edit', $empresa->id) }}" class="btn btn-warning">Actualizar Información</a>
			<a href="{{ route('admin.empresa.edit.logo', $empresa->id) }}" class="btn btn-info">Editar Logo</a>
		  </div>
		</div>

	@endforeach

@endsection

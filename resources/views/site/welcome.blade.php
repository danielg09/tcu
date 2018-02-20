@extends('site.templates.main')
@section('title','Fajas y Mangueras Primo')


@section('content')



  <div class="parallax-container">
	  	<div class="titulo-empresa">	
	  		<span class="border">
	  			{{$empresa->nombre}}
	  		</span>	
	  	</div>
	    <div class="parallax"><img id="img-titulo" src="{{ asset('imagenes-sitio/WallpaperMangueras.jpg') }}"></div>
  </div>

  <div class="section white">
	    <div class="row container">
	      <h2 class="header"  id="nosotros">Quienes Somos?</h2>
	      <ul class="collapsible popout" data-collapsible="accordion">
			    <li>
			      <div class="collapsible-header active"><i class="material-icons">filter_drama</i>Historia</div>
			      <div class="collapsible-body">
			      		<span>
			      			{!!$empresa->acercaDe!!}
			      		</span>
			      </div>
			    </li>
			    <li>
			      <div class="collapsible-header"><i class="material-icons">check_box</i>Misión</div>
			      <div class="collapsible-body">
			      		<span>
							{!!$empresa->mision!!}
			    	    </span>
			       </div>
			    </li>
			    <li>
			      <div class="collapsible-header"><i class="material-icons">check_circle</i>Visión</div>
			      <div class="collapsible-body">
			     	    <span>      	
							{!!$empresa->vision!!}
	      				</span>
			  	  </div>
			    </li>
		  </ul>
	   </div>
  </div>

  <div class="parallax-container">
    	<div class="parallax"><img src="{{ asset('imagenes-sitio/keys.jpg') }}"></div>
  </div>

  <div class="section white">
	    <div class="row container">
	    	<h2 class="header"  id="productos">Nuestros Productos</h2>
	    	  <ul class="collapsible" data-collapsible="accordion">
	    	  		@foreach ($categorias as $categoria)    	  		
					    <li>
					      <div class="collapsible-header"><i class="material-icons">filter_drama</i>{{$categoria->nombre}}</div>
					      <div class="collapsible-body">
					      		<span>	      			
									<ul class="collection">
										@foreach ($categoria->productos as $producto)
											<li class="collection-item">
												@if ($producto->estado === 'activo')
													{{ $producto->nombre }}
												@endif
											</li>
										@endforeach
									</ul>
					      		</span>
					      	</div>
					    </li>
				    @endforeach
			  </ul>
	    </div>
  </div>  

  <div class="parallax-container">
    	<div class="parallax"><img src="{{ asset('imagenes-sitio/pexels-photo-1.jpeg') }}"></div>
  </div>

  <div class="section white">
	    <div class="row container">
	    	<h2 class="header"  id="servicios">Nuestros Servicios</h2>
	    	  <ul class="collapsible" data-collapsible="accordion">
	    	  		@foreach ($servicios as $servicio)
					    <li>
					      <div class="collapsible-header"><i class="material-icons">filter_drama</i>{{$servicio->nombre}}</div>
					      <div class="collapsible-body">
					      		<span>	      			
					      			{!!$servicio->descripcion!!}
					      		</span>
					      	</div>
					    </li>
				   	@endforeach
			  </ul>
	    </div>
  </div>

  <div class="parallax-container">
    	<div class="parallax"><img src="{{ asset('imagenes-sitio/car-engine-oil.jpg') }}"></div>
  </div>

  <div class="section white">
	    <div class="row container">
	    	<h2 class="header"  id="promociones">Nuestras Promociones</h2>
	    		{{--@if (isset($promociones))--}}
	    			<p class="">No hay promociones en este momento.
	    		{{--@else--}}
					<div class="collection">
						@foreach ($promociones as $promocion)
							<a target="_blank" href="{{ asset($promocion->ubicacionArchivo) }}" class="collection-item">{{$promocion->nombrePromocion}} <i class="material-icons">file_download</i></a>
						@endforeach
					</div>
	    		{{--@endif--}}
	    </div>
  </div>

  <div class="parallax-container">
    	<div class="parallax"><img src="{{ asset('imagenes-sitio/mangueras-2.jpg') }}"></div>
  </div>

  <div class="section white">
	    <div class="row container">
	    	<h2 class="header"  id="contactenos">Contactenos</h2>			    	
			<div class="row">
			    <div class="col l6 s12">
			    	<div class="row">
					    <form class="col s12" action="{{ route('site.welcome.sendEmail') }}" method="POST">
					      {{ csrf_field() }}
					      <div class="row">
					        <div class="input-field col s12">
					          <input placeholder="Nombre" name="nombre" type="text" class="validate">
					          <label for="nombre">Nombre</label>
					        </div>
					      </div>
					      <div class="row">
					        <div class="input-field col s12">
					          <input placeholder="Correo" name="correo" type="email" class="validate">
					          <label for="correo">Correo</label>
					        </div>
					      </div>
					      <div class="row">
					        <div class="input-field col s12">
					          <textarea name="comentario" class="materialize-textarea"></textarea>
					          <label for="comentario">Comentario</label>
					        </div>
					      </div>
					      	
					       <button class="btn waves-effect waves-light teal darken-2" type="submit" name="action">Enviar
							    <i class="material-icons right">send</i>
						   </button>
					    </form>
					</div>
			    </div>
			    <div class="col l6 s12">
			    	<div class="video-container">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.44310692322!2d-84.26130668520594!3d9.98020799286473!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0f88f5e66b6ef%3A0x35cc151c6e4281bd!2sFajas+y+Mangueras+Primo!5e0!3m2!1ses!2scr!4v1517618481535" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			   		</div>
			    </div>
			</div>
	    </div>
  </div>

@endsection


@section('js')

<script type="text/javascript">

	
	$(document).ready(function(){

	  $(".button-collapse").sideNav();

      $('.parallax').parallax();

    });

</script>

@endsection
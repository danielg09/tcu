<footer class="page-footer grey">
  <div class="container">
    <div class="row">
        <div class="col l6 s12">
  	      <h5 class="white-text">Contáctenos</h5>
          @foreach ($contactenos as $contacto)
            <p class="grey-text text-lighten-4"><i class="{{ $contacto->icono}}"></i> {{$contacto->tipo.' : '.$contacto->contenidoTipo}}.</p>
          @endforeach
        </div>
      <div class="col l4 offset-l2 s12">
  	   <h5 class="white-text">Síguenos</h5>
  	   <ul>
          @foreach ($redesSociales as $redSocial)
            <li><i class="{{ $redSocial->icono}}"></i> <a target="_blank" class="grey-text text-lighten-3" href="{{$redSocial->url}}">{{$redSocial->red}}</a></li>
          @endforeach
  	   </ul>
      </div>
   </div>
  </div>

  <div class="footer-copyright">
    <div class="container">
	   © {{date('Y')}} Copyright <i class="fas fa-user"></i> <a target="_blank" class="grey-text text-lighten-4" href="{{ route('login') }}">Administración</a>
	   <a class="grey-text text-lighten-4 right" href="#!">Sitio web desarrollado por Daniel Murillo Sánchez</a>
    </div>
  </div>
</footer>
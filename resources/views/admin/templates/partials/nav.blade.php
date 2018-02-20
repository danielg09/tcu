<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{ route('admin.panel') }}">Panel de administracion</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="{{ route('admin.panel') }}">Inicio<span class="sr-only">(current)</span></a></li>
        <li><a href="{{ route('admin.users.index') }}">Usuarios</a></li>
        <li><a href="{{ route('admin.empresa.index') }}">Empresa</a></li>
        <li><a href="{{ route('admin.contactenos.index') }}">Contactenos</a></li>
        <li><a href="{{ route('admin.redessociales.index') }}">Redes Sociales</a></li>
        <li><a href="{{ route('admin.servicios.index') }}">Servicios</a></li>
        <li><a href="{{ route('admin.categorias.index') }}">Categorias</a></li>
        <li><a href="{{ route('admin.productos.index') }}">Productos</a></li>
        <li><a href="{{ route('admin.promociones.index') }}">Promociones</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a target="_blank" href="{{ route('site.welcome') }}">Sitio Web</a></li>
        @auth
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}} <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                  Salir
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
                </form>
              </li>
            </ul>
          </li>
        @endauth
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

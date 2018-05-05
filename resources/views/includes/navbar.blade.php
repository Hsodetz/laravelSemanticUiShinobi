
<div class="ui stackable large menu" style="background-color: #ff1744;">
  <div class="item">
    <img src="/img/fordImg.png">
  </div>
  <div class="menu">

    @can('products.index') <!-- Can, predefinido de shinobi, para ocultar los botones si no estas autorizado, estilo if -->
      <a class="item" href="{{ route('products.index') }}">Productos</a>
    @endcan

    @can('users.index')
      <a class="item" href="{{ route('users.index') }}"> Usuarios </a>
    @endcan

    @can('roles.index')
      <a class="item" href="{{ route('roles.index') }}"> Roles </a>
    @endcan

  </div>

  <div class="right menu">
    @guest
      <a href="{{ route('register') }}" class="item"> Registro </a>
    @else
    <div class="ui right dropdown item"> {{ Auth::user()->name }} <i class="dropdown icon"></i> <div class="menu">
         
          <a class="item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
          </a> 
          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
        
        
      </div>
    </div>
    @endguest
      <a href="{{ route('login') }}" class="item"> Iniciar Sesion </a>

  </div>
  
</div>


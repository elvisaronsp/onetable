<li><a href="{{ url('/admin') }}">Inicio</a></li>
<li><a href="{{ url('/admin/negocios') }}">Mis Negocios</a></li>
<li class="dropdown">
  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
    Gestión <span class="caret"></span>
  </a>
  <ul class="dropdown-menu" role="menu">
    <li><a href="{{ url('/admin/usuarios') }}">Usuarios</a></li>
    <li><a href="{{ url('/admin/roles') }}">Roles</a></li>
    <li><a href="{{ url('/admin/paises') }}">Paises</a></li>
  </ul>
</li>
{{-- <li><a href="{{ url('/admin') }}">Ajustes</a></li> --}}

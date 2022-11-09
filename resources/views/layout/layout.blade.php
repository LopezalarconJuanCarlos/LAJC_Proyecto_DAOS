<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lista de Usuarios</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<nav class="navbar" style="background-color: #e3f2fd;">
  <div class="container">
    <a class="navbar-brand" href="{{ route('lista_usuarios')}}">
      <img src="{{ asset ('archivos/utvt.jpg')}}" alt="UTVT" width="250" height="50">  
    <a class="nav-link" href="{{ route('lista_usuarios')}}">Usuarios</a>
    <a class="nav-link" href="{{ route('lista_productos')}}">Productos</a>
    <a class="nav-link" href="{{ route('lista_tiendas')}}">Tiendas</a>
    <a class="nav-link" href="{{ route('lista_tipos')}}">Tipos</a>
    <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Formularios</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('formulario')}}">Alta Usuarios</a></li>
            <li><a class="dropdown-item" href="{{ route('formulariotipos')}}">Alta Tipos</a></li>
            <li><a class="dropdown-item" href="{{ route('formulariot')}}">Alta Tiendas</a></li>
          </ul>
        </li>
    </a>
  </div>
</nav>
<br>
@yield('content')
<div class="card">
  <div class="card-header">
  FORMULARIO PARA REGISTROS
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>Los registros seran guardados en una base de datos segura.</p>
      <footer class="blockquote-footer">Registro para Tiendas  <cite title="Source Title"></cite></footer>
    </blockquote>
  </div>
</div>
</body>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</html>

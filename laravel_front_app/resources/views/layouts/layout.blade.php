<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('pageTitle')</title>

    <link type="text/css" rel="stylesheet" href="{{asset ('assets/css/materialize.min.css')}}" media="screen,projection">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="icon" href="{{ asset('/img/logo_paredmart.svg') }}">

    <!--Custom CSS-->
    <link rel="stylesheet" href="{{ url('css/styles.css')}}">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/utilities.css') }}" />

    <!--Sweetalert--->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body class="blue darken-1">
  <nav>
    <div class="nav-wrapper indigo darken-4">
      <a href="#" class="brand-logo flow-text ml-2">
        GameFlake
      </a>
      <a href="#" data-target="sidebar" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
            <li><a href="#">        Inicio</a></li>
            <li><a href="/catalogo">Catálogo</a></li>
            <li><a href="#">        Mis juegos</a></li>
            <li><a href="/ofertas"> Mis ofertas</a></li>
            <a class="blue accent-4 btn">Cerrar sesión</a>
      </ul>
    </div>
  </nav>
  <ul class="sidenav right" id="sidebar">
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Catálogo</a></li>
        <li><a href="#">Mis juegos</a></li>
        <li><a href="#">Mis ofertas</a></li>
        <a class="blue accent-4 btn mt-2 ml-4">Cerrar sesión</a>
  </ul>

  @yield('register')
  @yield('header')

  <main class="containers-fluid">
      @yield('mainContent')

      <footer class="page-footer indigo darken-4 ">
        <div class="container ">
          <div class="row">
            <div class="col l6 s12">
              <h5 class="white-text">¡Conoce más sobre nosotros!</h5>
              <p class="grey-text text-lighten-4">Aplicación para que intercambies tus juegos.</p>
            </div>
            <div class="col l4 offset-l2 s12">
              <h5 class="white-text">Información</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="#!">Inicio</a></li>
                <li><a class="grey-text text-lighten-3" href="/catalogo">Catálogo</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Mis juego</a></li>
                <li><a class="grey-text text-lighten-3" href="/ofertas">Mis ofertas</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Mis coincidencias</a></li>
                <li><a class="grey-text text-lighten-3" href="#!">Mi perfil</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright indigo darken-3">
          <div class="container">
          © 2021 GameFlake 
          <a class="grey-text text-lighten-4 right" href="#!">Aviso de privacidad</a>
          </div>
        </div>
      </footer>
    </main>
    
    <script type="text/javascript" src="{{asset ('assets/js/materialize.min.js')}}"></script>
    <script>
    $(document).ready(function() {
        $('.sidenav').sidenav();
    });
    </script>     

    @stack('scripts')
  
</body>  
</html>

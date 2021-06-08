<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('pageTitle')</title>

    <!--Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="{{asset ('assets/css/materialize.min.css')}}" media="screen,projection">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--Custom CSS-->
      <link rel="stylesheet" href="{{ url('css/styles.css')}}">

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body class="blue darken-1">
<nav>
    <div class="nav-wrapper indigo darken-4">
      <img src="{{asset('images/logo.JPG')}}" class= "responsive-img" width="100">
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
            <li><a href="#">Inicio</a></li>
            <li><a href="/catalogo">Catálogo</a></li>
            <li><a href="#">Mis juegos</a></li>
            <li><a href="#">Mis ofertas</a></li>
            <li><a href="#">Mis coincidencias</a></li>
            <li><a href="#">Mi perfil</a></li>
            <a class= "blue accent-4 btn">Cerrar sesión</a>
      </ul>
    </div>
  </nav>

  <ul class="sidenav right" id="mobile-demo">
        <li><a href="#">Inicio</a></li>
        <li><a href="/catalogo">Catálogo</a></li>
        <li><a href="#">Mis juegos</a></li>
        <li><a href="#">Mis ofertas</a></li>
        <li><a href="#">Mis coincidencias</a></li>
        <li><a href="#">Mi perfil</a></li>
        <a class= "blue accent-4 btn">Cerrar sesión</a>
  </ul>

<script>
 $(document).ready(function() {
    $('.sidenav').sidenav();
});
</script>       

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
                  <li><a class="grey-text text-lighten-3" href="#!">Mis ofertas</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Mis coincidencias</a></li>
                  <li><a class="grey-text text-lighten-3" href="#!">Mi perfil</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright indigo darken-3">
            <div class="container">
            © 2021 Gameflake 
            <a class="grey-text text-lighten-4 right" href="#!">Aviso de privacidad</a>
            </div>
          </div>
        </footer>
    
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="{{asset ('assets/js/materialize.min.js')}}"></script>
    @stack('scripts')

</html>

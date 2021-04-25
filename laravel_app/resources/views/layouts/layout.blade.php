<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('pageTitle')</title>

    <!--Icons-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="{{asset ('assets/css/materialize.min.css')}}" media="screen,projection">
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--Custom CSS-->
      <link rel="stylesheet" href="{{ url('css/styles.css')}}">


    
    </head>

    

</head>

<body class="blue darken-1">



        <nav class="indigo darken-4" >
            <div class="nav-wrapper row">
                <div class="col s4">
                    <img src="{{asset('images/logo.JPG')}}" width="100">
                </div>
                <div class="col s4 center-align">
                    <ul id="nav-mobile" class="">
                        <li><a href="#">Inicio</a></li>
                        <li><a href="#">Catalogo</a></li>
                        <li><a href="#">Mis juegos</a></li>
                        <li><a href="#">Mis ofertas</a></li>
                        <li><a href="#">Mis coincidencias</a></li>
                        <li><a href="#">Mi perfil</a></li>
                    </ul>
                </div>
                <div class="col s4 right-align">
                        <a class=" blue darken-2 btn white-text">Cerrar sesión</a>
                </div>
            </div>
        </nav>


    @yield('register')
    @yield('header')

    <main class="containers-fluid">
        @yield('mainContent')
   

        <footer class="page-footer indigo darken-4">
          <div class="container">
            <h5 class="center-align">Aviso de privacidad</h5>
          </div>
        </footer>
            
    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="{{asset ('assets/css/materialize.min.js')}}"></script>
    @stack('scripts')

</html>

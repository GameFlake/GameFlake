<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>login</title>

    <!-- Boostrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <div class="d-flex justify-content-center ">
            <div class="card" >
                <div class="card-body">
                       
                        <div class="text-center">
                            <h2>Iniciar sesión</h2>
                        </div>
                        <div class="form-group">
                            <label for="usuario">Usuario o correo</label>
                            <input type="text" class="form-control" id="nombre" aria-describedby="usuario" placeholder="Ingresa tu usuario o correo"> 
                        </div>
                        <div class="form-group">
                            <label for="password">Contraseña </label>
                            <input type="password" class="form-control" id="password" aria-describedby="password" placeholder="Ingresa tu contraseña">
                        </div>
                        <div class="text-center">
                            <a href="#" class="myButton ">Iniciar Sesión</a>
                        </div>
                </div>
            </div>
    </div>

    <!-- Boostrap JS: jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <!-- Development CDN React and ReactDOM. Don't use this in production. -->
    <script crossorigin src="https://unpkg.com/react@17/umd/react.development.js"></script>
    <script crossorigin src="https://unpkg.com/react-dom@17/umd/react-dom.development.js"></script>

    <!-- Development CDN Babel. Don't use this in production. -->
    <script src="https://unpkg.com/babel-standalone@6/babel.min.js"></script>

</body>
<footer>
    <p class="text-center">Aviso de privacidad</p>
</footer>
</html>

<style>
        .card{
            width: 30rem;
            margin-top: 10rem;

        }
        .myButton {
        background-color:#050505;
        border-radius:42px;
        display:inline-block;
        cursor:pointer;
        color:#ffffff;
        font-family:Arial;
        font-size:15px;
        padding:9px 31px;
        text-decoration:none;
        text-shadow:-25px 1px 0px #000000;
    }
    .myButton:hover {
        background-color:#050505;
    }
    .myButton:active {
        position:relative;
        top:1px;
    }
    footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 15%;
    background-color: #0E498F;
    color: white;
    text-align: center;
    }
    footer p{
        margin-top: 3% ;
    }
    body{
        background-color: #1A82FF;
    }   
    </style>
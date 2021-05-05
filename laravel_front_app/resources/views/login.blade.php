<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Login</title>

    <style>
        .d-flex {
            display: flex;
        }

        .justify-content-center {
            justify-content: center;  
        }

        .bottom-space {
            padding-bottom: 15px;
            margin-bottom: 15px;
        }

    </style>
</head>
<body class="deep-purple">
    <div class="container">
        <div class="row">
            <br><br><br>
            <div class="col s12 m8 l6 offset-m2 offset-l3">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title bottom-space center-align">Iniciar sesión</span>

                        <form action="login" method="POST">
                            @csrf

                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                            <div class="input-field">
                                <input placeholder="Ingresa tu usuario o correo" id="email" type="email" name="email" class="validate" required>
                                <label for="email">Usuario o correo</label>
                            </div>
                            <div class="input-field">
                                <input placeholder="Ingresa tu contraseña" id="password" type="password" name="password" class="validate" required>
                                <label for="password">Contraseña</label>
                            </div>
                                    
                            @if (session('error'))
                            <div class="bottom-space">
                                <small class="red-text text-darken-1">{{ session('error') }}</small>
                            </div>
                            @endif

                            <div class="d-flex justify-content-center">                                    
                                <button class="deep-purple accent-2 btn waves-effect waves-light bottom-space " type="submit" name="action">Iniciar sesión</button>
                            </div>
                        </form>

                        <p class="center-align">¿No tienes una cuenta? <a href="{{ route('coming_soon') }}">Regístrate</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</body>
</html>
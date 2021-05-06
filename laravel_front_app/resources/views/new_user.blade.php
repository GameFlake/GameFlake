<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/utilities.css') }}" />

    <title>Crear cuenta</title>
</head>
<body class="deep-purple">
    <div class="container row flex-row align-items-center mb-0" style="min-height: 100vh">
        <div class="col s12 m8 offset-m2">
            <div class="card">
                <div class="card-content">
                    <div class="flex-row justify-content-center">
                        <img src="{{ asset('/img/logo_paredmart.svg') }}" height="75px" alt="Logo GameFlake">
                    </div>
                    <span class="card-title center-align pb-3">Crea tu cuenta de GameFlake</span>

                    @if (session('error'))
                    <div class="flex-row justify-content-center mb-3">
                        <small class="red-text text-darken-1">{{ session('error') }}</small>
                    </div>
                    @endif

                    <form action="{{ route('store_user') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col s12 l6">
                                @error('first_name')
                                <div>
                                    <small class="red-text text-darken-1">{{ $message }}</small>
                                </div>
                                @enderror
                                <div class="input-field mb-5">
                                    <input placeholder="Ingresa tu nombre" id="first_name" type="text" 
                                            name="first_name" class="validate" value="{{ old('first_name') }}" required>
                                    <label for="first_name">Nombre</label>
                                </div>

                                @error('last_name')
                                <div>
                                    <small class="red-text text-darken-1">{{ $message }}</small>
                                </div>
                                @enderror
                                <div class="input-field mb-5">
                                    <input placeholder="Ingresa tu nombre" id="last_name" type="text" 
                                            name="last_name" class="validate" value="{{ old('last_name') }}" required>
                                    <label for="last_name">Apellido</label>
                                </div>

                                @error('password')
                                <div>
                                    <small class="red-text text-darken-1">{{ $message }}</small>
                                </div>
                                @enderror
                                <div class="input-field mb-4">
                                    <input placeholder="Ingresa tu contraseña" id="password" type="password" 
                                            name="password" class="validate" value="{{ old('password') }}" required>
                                    <label for="password">Contraseña</label>
                                </div>
                            </div>
                            <div class="col s12 l6">
                                @error('email')
                                <div>
                                    <small class="red-text text-darken-1">{{ $message }}</small>
                                </div>
                                @enderror
                                <div class="input-field mb-5">
                                    <input placeholder="Ingresa tu correo" id="email" type="email" 
                                            name="email" class="validate" value="{{ old('email') }}" required>
                                    <label for="email">Correo</label>
                                </div>

                                @error('birthday')
                                <div>
                                    <small class="red-text text-darken-1">{{ $message }}</small>
                                </div>
                                @enderror
                                <div class="input-field mb-5">
                                    <input placeholder="Selecciona tu fecha de nacimiento" type="text" 
                                            name="birthday" class="datepicker" value="{{ old('birthday') }}" required>
                                    <label for="birthday">Fecha de nacimiento</label>
                                </div>
                                
                                @error('user_name')
                                <div>
                                    <small class="red-text text-darken-1">{{ $message }}</small>
                                </div>
                                @enderror
                                <div class="input-field mb-4">
                                    <input placeholder="Ingresa tu username" id="user_name" type="text" 
                                            name="user_name" class="validate" value="{{ old('user_name') }}"  required>
                                    <label for="user_name">Username</label>
                                </div>
                            </div>
                            <div class="col s12">
                                @error('terms')
                                <div>
                                    <small class="red-text text-darken-1">{{ $message }}</small>
                                </div>
                                @enderror
                                <p>
                                    <label>
                                        <input type="checkbox" class="filled-in" checked="{{ old('checkbox') }}"  name="terms" required/>
                                        <span>He leido y acepto los <a href="https://github.com/GameFlake/GameFlake">términos y condiciones</a>.</span>
                                    </label>
                                </p>
                            </div>
                        </div>

                        <div class="flex-row justify-content-center">                                    
                            <button class="deep-purple accent-2 btn waves-effect waves-light" type="submit" name="action">Crear cuenta</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.datepicker');
            var instances = M.Datepicker.init(elems, autoClose=true);
        });
    </script>
</body>
</html>
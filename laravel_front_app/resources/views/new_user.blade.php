<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/utilities.css') }}" />
    <link rel="icon" href="{{ asset('/img/logo_paredmart.svg') }}">

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
                                <div class="input-field">
                                    <input placeholder="Ingresa tu nombre" id="first_name" type="text" 
                                            name="first_name" class="validate" value="{{ old('first_name') }}" required>
                                    <label for="first_name">Nombre</label>
                                </div>
                                @error('first_name')
                                <div>
                                    <small class="red-text text-darken-1">{{ $message }}</small>
                                </div>
                                @enderror
                            </div>
                            <div class="col s12 l6">
                                <div class="input-field">
                                    <input placeholder="Ingresa tu nombre" id="last_name" type="text" 
                                            name="last_name" class="validate" value="{{ old('last_name') }}" required>
                                    <label for="last_name">Apellido</label>
                                </div>
                                @error('last_name')
                                <div>
                                    <small class="red-text text-darken-1">{{ $message }}</small>
                                </div>
                                @enderror
                            </div>
                            
                        </div>

                        <div class="row">
                            <div class="col s12 l6">
                                <div class="input-field">
                                    <input placeholder="Ingresa tu correo" id="email" type="email" 
                                            name="email" class="validate" value="{{ old('email') }}" required>
                                    <label for="email">Correo</label>
                                </div>
                                @error('email')
                                <div>
                                    <small class="red-text text-darken-1">{{ $message }}</small>
                                </div>
                                @enderror
                            </div>
                            <div class="col s12 l6">
                                <div class="input-field">
                                    <input placeholder="Ingresa tu número de teléfono" id="phone" type="tel" pattern="[0-9]{10}"
                                            maxlength=10 name="phone" class="validate" value="{{ old('phone') }}" required>
                                    <label for="phone">Teléfono</label>
                                </div>
                                @error('phone')
                                <div>
                                    <small class="red-text text-darken-1">{{ $message }}</small>
                                </div>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col s12 l6">
                                <div class="input-field">
                                    <input placeholder="Ingresa tu contraseña" id="password" type="password" 
                                            name="password" class="validate" required>
                                    <label for="password">Contraseña</label>
                                </div>
                                @error('password')
                                <div>
                                    <small class="red-text text-darken-1">{{ $message }}</small>
                                </div>
                                @enderror
                            </div>
                            <div class="col s12 l6">
                                <div class="input-field">
                                    <input placeholder="Ingresa tu username" id="user_name" type="text" 
                                            name="user_name" class="validate" value="{{ old('user_name') }}"  required>
                                    <label for="user_name">Username</label>
                                </div>
                                @error('user_name')
                                <div>
                                    <small class="red-text text-darken-1">{{ $message }}</small>
                                </div>
                                @enderror
                            </div>
                        </div>

                        @if (session('captcha'))
                        <div>
                            <small class="red-text text-darken-1">{{ session('captcha') }}</small>
                        </div>
                        @endif
                        <div class="h-captcha mb-4" data-sitekey="d5945e9b-1bcc-4cc5-80bd-6df8d5baef0b" ></div> 
                        
                        <div class="row">
                            <div class="col s12">
                                <p>
                                    <label>
                                        <input type="checkbox" class="filled-in" name="terms" @if (old('user_name')) checked @endif required/>
                                        <span>He leido y acepto los <a href="https://github.com/GameFlake/GameFlake">términos y condiciones</a>.</span>
                                    </label>
                                </p>
                                @error('terms')
                                <div>
                                    <small class="red-text text-darken-1">{{ $message }}</small>
                                </div>
                                @enderror
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
    <script src="https://hcaptcha.com/1/api.js" async defer></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('.datepicker');
            var instances = M.Datepicker.init(elems, autoClose=true);
        });
    </script>
</body>
</html>
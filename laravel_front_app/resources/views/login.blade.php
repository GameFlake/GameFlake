<?php
if ( isset($_POST['submit']) ) {
    $data = array(
        'secret' => "0xBe5d564C39b35176Fac92f44A1b22fa949d969B4",
        'response' => $_POST['h-captcha-response']
    );
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, "https://hcaptcha.com/siteverify");
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    $responseData = json_decode($response);
    if($responseData->success) {
        echo 'form is safe to succeed';
    } else {
        echo 'Robot verification failed, please try again.';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link type="text/css" rel="stylesheet" href="{{ asset('/css/utilities.css') }}" />

    <title>Login</title>
</head>
<body class="deep-purple">
    <div class="container row flex-row align-items-center mb-0" style="min-height: 100vh">
        <div class="col s12 m8 l6 offset-m2 offset-l3">
            <div class="card">
                <div class="card-content">
                    <div class="flex-row justify-content-center">
                        <img src="{{ asset('/img/logo_paredmart.svg') }}" height="75px" alt="Logo GameFlake">
                    </div>
                    <span class="card-title center-align pb-3">Inicia sesión</span>

                    @if (session('error'))
                    <div class="flex-row justify-content-center mb-3">
                        <small class="red-text text-darken-1">{{ session('error') }}</small>
                    </div>
                    @endif

                    <form action="{{ route('login') }}" method="POST">
                        @csrf

                        @error('email')
                        <div>
                            <small class="alert alert-danger">{{ $message }}</small>
                        </div>
                        @enderror
                        <div class="input-field mb-5">
                            <input placeholder="Ingresa tu usuario o correo" id="email_or_username" type="text" name="email_or_username" class="validate" required>
                            <label for="email_or_username">Usuario o correo</label>
                        </div>

                        @error('password')
                        <div>
                            <small class="alert alert-danger">{{ $message }}</small>
                        </div>
                        @enderror
                        <div class="input-field mb-4">
                            <input placeholder="Ingresa tu contraseña" id="password" type="password" name="password" class="validate" required>
                            <label for="password">Contraseña</label>
                        </div>

                        <div class="h-captcha" data-sitekey="d5945e9b-1bcc-4cc5-80bd-6df8d5baef0b" ></div>
                                
                        <div class="flex-row justify-content-center mb-4">
                            <button class="deep-purple accent-2 btn waves-effect waves-light" type="submit" name="action">Iniciar sesión</button>
                        </div>
                    </form>

                    <p class="center-align">¿No tienes una cuenta? <a href="{{ route('create_user') }}">Regístrate</a></p>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <!--- Hcapcha-->
    <script src="https://hcaptcha.com/1/api.js" async defer></script>
    



</body>
</html>
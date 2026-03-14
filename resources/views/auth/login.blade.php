<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="{{url('/')}}/plantilla/images/favicon.png"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/plantilla/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/plantilla/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/plantilla/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/plantilla/vendor/animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/plantilla/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/plantilla/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/plantilla/vendor/select2/select2.min.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/plantilla/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/plantilla/css/util.css">
    <link rel="stylesheet" type="text/css" href="{{url('/')}}/plantilla/css/main.css">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100" style="background-image: url('{{url('/')}}/plantilla/images/bg-01.jpeg');">
            <div class="wrap-login100">

                     <x-guest-layout>
                        <x-jet-authentication-card>
                            <x-slot name="logo">
                                <span class="login100-form-logo">
                                    <p id="colorlib-logo"><a href="{{url('/')}}/inicio"><img src="{{url('/')}}/plantilla/images/logo.png" width="118" height="121"/></a></p>
                                </span>                    
                            </x-slot>

                            <x-jet-validation-errors class="mb-4" />

                            @if (session('status'))
                                <div class="mb-4 font-medium text-sm text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div>
                                    <x-jet-label for="email" value="{{ __('Email') }}" />
                                    <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                                </div>

                                <div class="mt-4">
                                    <x-jet-label for="password" value="{{ __('Password') }}" />
                                    <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                                </div>

                                <div class="block mt-4">
                                    <label for="remember_me" class="flex items-center">
                                        <x-jet-checkbox id="remember_me" name="remember" />
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                    </label>
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif

                                    <x-jet-button class="ml-4">
                                        {{ __('Log in') }}
                                    </x-jet-button>
                                </div>
                            </form>
                        </x-jet-authentication-card>
                    </x-guest-layout>




            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="{{url('/')}}/plantilla/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="{{url('/')}}/plantilla/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
    <script src="{{url('/')}}/plantilla/vendor/bootstrap/js/popper.js"></script>
    <script src="{{url('/')}}/plantilla/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="{{url('/')}}/plantilla/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="{{url('/')}}/plantilla/vendor/daterangepicker/moment.min.js"></script>
    <script src="{{url('/')}}/plantilla/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
    <script src="{{url('/')}}/plantilla/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
    <script src="{{url('/')}}/plantilla/js/main.js"></script>

</body>
</html>
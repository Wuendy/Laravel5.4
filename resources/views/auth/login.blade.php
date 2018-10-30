@extends('layouts.m')

@section('content')
<body>
    
    <div class="limiter">
        <div class="container-login100" style="background-image:url({{url('uploads/12.jpg')}})">
            <div class="wrap-login100">
                <form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
                
                    <span class="login100-form-logo">
                        <i class="zmdi zmdi-landscape"></i>
                    </span>

                    <span class="login100-form-title p-b-34 p-t-27">
                        Iniciar Sesion
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Enter username">
                        <input class="input100" type="email" name="email" placeholder="Email">
                        <span class="focus-input100" data-placeholder="&#xf207;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter password">
                        <input class="input100" type="password" name="password" placeholder="Contraseña">
                        <span class="focus-input100" data-placeholder="&#xf191;"></span>
                    </div>

                    <div class="contact100-form-checkbox">
                        <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me" {{ old('remember') ? 'checked' : '' }}>
                        <label class="label-checkbox100" for="ckb1">
                            Recuerdame
                        </label>
                    </div>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Iniciar Sesion
                        </button>
                    </div>


                    <div class="text-center p-t-90">
                        <a class="txt1" href="{{ route('password.request') }}">
                            ¿Olvidaste tu contraseña?
                        </a>
                        <br>
                        <a class="txt1" href="{{ route('register') }}">
                            Registrate
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
@endsection
    
@extends('layouts.m')

@section('content')
<body>
  
  <div class="limiter">
    <div class="container-login100" style="background-image:url({{url('uploads/12.jpg')}})">
      <div class="wrap-login100">
        <form class="login100-form validate-form" method="POST" action="{{route('profesor.update', $id)}}">
       
 
        <input name="_method" type="hidden" value="PATCH">
          <span class="login100-form-logo">
            <i class="zmdi zmdi-landscape"></i>
          </span>

          <span class="login100-form-title p-b-34 p-t-27">
            Profesor
            @if ($errors->any())
    
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
  
@endif
          </span>

          <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="text" name="nombre" placeholder="Nombre" value="{{$profesor->nombre}}" >
            <span class="focus-input100" data-placeholder=""></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="text" name="apellido" placeholder="Apellido" value="{{$profesor->apellido}}" >
            <span class="focus-input100" data-placeholder=""></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="number" name="cedula" placeholder="Cedula" value="{{$profesor->cedula}}" >
            <span class="focus-input100" data-placeholder=""></span>
          </div>
<div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="number" name="tlf" placeholder="Telefono" value="{{$profesor->tlf}}" >
            <span class="focus-input100" data-placeholder=""></span>
          </div>
          <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="email" name="email" placeholder="Email" value="{{$profesor->email}}" >
            <span class="focus-input100" data-placeholder=""></span>
          </div>
          
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
  
          <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn" value="Actualizar">
              Actualizar
            </button>
          </div>


         
  

    </form>
    <div style="text-align:right"><a href="{{ route('profesor.index') }}">Atrás</a></div>

      </div>
    </div>
  </div>
  </body>
</html>

                   
@endsection



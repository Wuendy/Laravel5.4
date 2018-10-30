
@extends('layouts.m')

@section('content')
<body>
  
  <div class="limiter">
    <div class="container-login100" style="background-image:url({{url('uploads/12.jpg')}})">
      <div class="wrap-login100">
        <form class="login100-form validate-form" method="POST" action="{{route('profesor.store')}}">
        
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
            <input class="input100" type="text" name="nombre" placeholder="Nombre">
            <span class="focus-input100" data-placeholder=""></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="text" name="apellido" placeholder="Apellido">
            <span class="focus-input100" data-placeholder=""></span>
          </div>

          <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="number" name="cedula" placeholder="Cedula">
            <span class="focus-input100" data-placeholder=""></span>
          </div>
<div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="number" name="tlf" placeholder="Telefono">
            <span class="focus-input100" data-placeholder=""></span>
          </div>
          <div class="wrap-input100 validate-input" data-validate = "Enter username">
            <input class="input100" type="email" name="email" placeholder="Email">
            <span class="focus-input100" data-placeholder=""></span>
          </div>
          <div class="wrap-input100 validate-input" data-validate = "Enter username">
           <select class="input100" name="id_mat" >
           <option value="1"> Materia  </option>
  
              @foreach($materia as $materia)
           <option value="{{$materia->id}}"> {{$materia->materia}}  </option>
@endforeach 
               
          
           </select>
            
          </div>

          
 <input type="hidden" name="_token" value="{{ csrf_token() }}">
  
          <div class="container-login100-form-btn">
            <button type="submit" class="login100-form-btn" value="submit">
              Registrar
            </button>
          </div>


         
  

    </form>
      </div>
    </div>
  </div>
  </body>
</html>

                   
@endsection

    
                   
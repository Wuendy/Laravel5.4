
@extends('layouts.header')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('/css/css/stylestable.css')}}" media="all" />
<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Perfil</li>
    </ol>
            



<link rel="stylesheet" href="{{url('https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{url('/css/css/prof.css')}}">
<section class="team">
  <div class="container" style="padding-left:140px;">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
     
          <div class="row pt-md">
          @if($profesor->count())  
              @foreach($profesor as $profesor)  
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="{{asset('/uploads/avatars/'.$profesor->avatar)}}" class="img-responsive">
                <ul class="text-center">
                  <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                  <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                  <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                </ul>
              </div>
              <h1>&nbsp;{{$profesor->nombre}}&nbsp;{{$profesor->apellido}}&nbsp;</h1>
              <h2>&nbsp;{{$profesor->cedula}}</h2>
              <p><a href="{{action('ProfesorController@edit', $profesor->id)}}" ><img src="{{ asset('css/images/writing.svg')}}" style="height:30px;width:30px;"></a><a href="{{action('ProfesorController@proed', $profesor->id)}}" ><img src="{{ asset('css/images/writing.svg')}}" style="height:30px;width:30px;"></a></p>
            </div>

            @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!<a href="{{ route('profesor.create') }}" ><img src="{{ asset('css/images/plus.svg')}}" style="height:30px;width:30px;"></a> </td>
              </tr>
              @endif
           
         
      </div>
    </div>
  </div>
</section>

        

 </body>

 </html>

@endsection


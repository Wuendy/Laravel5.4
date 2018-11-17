
@extends('layouts.header')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('/css/css/stylestable.css')}}" media="all" />
<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Perfil</li>
    </ol>
            


<img src="{{asset('/uploads/avatars/'.$profesor->avatar)}}" style="width:300px;height:300px;float:left;margin-left:400px;margin-top:40px;">
<form enctype="multipart/form-data" action="{{route('profil.edit',$profesor->id)}}" method="POST">
<input type="file" name="avatar">
{{csrf_field()}}
<input type="submit">
       </form> 

 </body>

 </html>

@endsection


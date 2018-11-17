
@extends('layouts.header')
@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('/css/css/stylestable.css')}}" media="all" />
<ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="index.html">Inicio</a>
        </li>
        <li class="breadcrumb-item active">Perfil</li>
    </ol>
    <style type="text/css">
        * { margin: 0; padding: 0; }
        body { font: 16px Helvetica, Sans-Serif; line-height: 24px; background: url(images/noise.jpg); }
        .clear { clear: both; }
        #page-wrap { width: 800px; margin: 40px auto 60px; }
        #pic { float: right; margin: -30px 0 0 0; height:350px;width:300px;}
        #page-wrap2{ margin: 0 0 16px 0; padding: 0 0 16px 0; font-size: 42px; font-weight: bold; letter-spacing: -2px; border-bottom: 1px solid #999; }
        h2 { font-size: 20px; margin: 0 0 6px 0; position: relative; }
        h2 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 16px; color: #999; font-weight: normal; }
        p { margin: 0 10px 16px 0; }
       
        ul { margin: 0 0 32px 17px; }
        #objective { width: 500px; float: left; }
        #objective p { font-family: Georgia, Serif; font-style: italic; color: #666; }
        dt { font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 100px; border-right: 1px solid #999;  }
        dd { width: 600px; float: right; }
        dd.clear { float: none; margin: 0; height: 15px; }
     </style>
     
     <div id="page-wrap">
    
      <img src="{{asset('/uploads/avatars/'.$user->avatar)}}" alt="Photo of Cthulu" id="pic" data-toggle="modal" data-target="#{{$user->id}}">
    


<div class="modal modal-danger fade" id="{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        
      </div>
     
   <form enctype="multipart/form-data" action="{{url('profile')}}" method="POST">

         
          
        <div class="modal-body">
        <p class="text-center">
        <img src="{{asset('/uploads/avatars/'.$user->avatar)}}" style=":height:105px;width:90px;">
         <input type="file" name="avatar">
{{csrf_field()}}

        </p>
            
            

        </div>
        <div class="modal-footer">
         
          <button style="background-color:#FF99CC;border:solid 2px #FF99CC;color:white;"type="submit" class="btn btn-warning">Enviar&nbsp;</button>
          <button style="background-color:#9999FF;border:solid 1px #9999FF;color:white;" type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
        </div>
      </form>
    </div>
    </div>
    </div>










        <div id="contact-info" class="vcard">
        
        
            <h1 id="page-wrap2" class="fn">{{$user->name}}&nbsp;{{$user->last_name}} &nbsp;&nbsp;
            <a href="{{route('profile.edit',$user->id)}}"><img src="{{asset('/uploads/resume.svg')}}" style="height:31px;width:31px;cursor:pointer;" ></a>
            </h1>
        @if(empty($profile))<a href="{{route('profile.register')}}"><button style="background-color:#9999FF;border:solid 1px #9999FF;color:white;"  type="button" class="btn btn-success">Registrar</button></a>
        @else
            <p>
                Cell: <span class="tel">{{$profile->tlf}}</span><br>
                Email: <a class="email" >{{$user->email}}</a>
            </p>


        </div>
                
        <div id="objective">
            <p style="text-align:justify;">
                {{$profile->descripcion}}
            </p>
        </div>
        
        <div class="clear"></div>
        
        <dl>
            <dd class="clear"></dd>
            
            <dt>Educacion</dt>
            <dd>
               
                <p><strong>Primaria:</strong>{{$profile->edu_primaria}}<br />
                   <strong>Secundaria:</strong>{{$profile->edu_secundaria}}</p>
                    
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Habilidades</dt>
            <dd>
                
                     <p><strong>Artisticas:</strong>{{$profile->habilidades_art}}<br />
                   <strong>Computacionales:</strong>{{$profile->habilidades_comp}}<br />
                   <strong>Oficinales:</strong>{{$profile->habilidades_off}}</p>
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Pasatiempos & Cursos</dt>
            <dd>
                <h2><span>{{$profile->cursos_date}}</span></h2>
                
                    <p><strong>Cursos:</strong>{{$profile->cursos_des}}<br />
                   
                   <strong>Pasatiempos:</strong>{{$profile->hobbies}}</p>
                
            </dd>
            
           
        </dl>
        
        <div class="clear"></div>@endif
    
    </div>        


 

@endsection


<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Database\Eloquent\Model;

use Auth;
use Image;
use App\Profile;

class UserController extends Controller
{
    public function profile(){
        $users=Auth::user()->id;
        $profile=Profile::where('id_user','like',$users)->first();;
       
        $user=Auth::user();
     
        return view('profile',compact('profile','user'));
    }
    public function update_avatar(Request $request){
        if($request->hasFile('avatar')){
            $avatar=$request->file('avatar');
            $filename=time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,350)->save( public_path('/uploads/avatars/' . $filename));
            $user = Auth::user();
            $user->avatar=$filename;
            $user->save();
        }
       $users=Auth::user()->id;
        $profile=Profile::where('id_user','like',$users)->first();
       
        $user=Auth::user();
     
        return view('profile',compact('profile','user'));
    }


    public function store(Request $request)
    {
   
    $profile = new Profile;
    $profile->tlf= Input::get("tlf");
    $profile->descripcion = Input::get("descripcion");
    $profile->edu_primaria= Input::get("edu_primaria");
    $profile->edu_secundaria= Input::get("edu_secundaria");
    $profile->habilidades_art= Input::get("habilidades_art");
    $profile->habilidades_comp= Input::get("habilidades_comp");
    $profile->habilidades_off= Input::get("habilidades_off");
    $profile->hobbies= Input::get("hobbies");
    $profile->cursos_date= Input::get("cursos_date");
    $profile->cursos_des= Input::get("cursos_des");
    $profile->id_user= Input::get("id_user");
    
   
    $profile->save();
        return redirect('profile')->with('success','Registro creado satisfactoriamente');
    }

    public function create()
    {
        
        return view('registerprofile');
    }
    

    public function edit($id)
    {
     $users=Auth::user()->id;
        $profile=Profile::where('id_user','like',$users)->first();;
       
        $user=Auth::user();
     
        return view('editprofile',compact('profile','user'));
    }
    public function update($id)
    {
   
    $profile = Profile::find($id);
    $profile->tlf= Input::get("tlf");
    $profile->descripcion = Input::get("descripcion");
    $profile->edu_primaria= Input::get("edu_primaria");
    $profile->edu_secundaria= Input::get("edu_secundaria");
    $profile->habilidades_art= Input::get("habilidades_art");
    $profile->habilidades_comp= Input::get("habilidades_comp");
    $profile->habilidades_off= Input::get("habilidades_off");
    $profile->hobbies= Input::get("hobbies");
    $profile->cursos_date= Input::get("cursos_date");
    $profile->cursos_des= Input::get("cursos_des");
    $profile->id_user= Input::get("id_user");
    
    $profile->save();
        return redirect('profile')->with('success','Registro creado satisfactoriamente');
    }

}

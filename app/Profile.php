<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
	protected $table='profile';
    protected $fillable = ['tlf', 'descripcion', 'edu_primaria','edu_secundaria','habilidades_art','habilidades_comp','habilidades_off','hobbies','cursos_date','cursos_des','id_user'];

    public function user(){
    	return $this->belongsTo('App\User','id_user','id');
    }
}
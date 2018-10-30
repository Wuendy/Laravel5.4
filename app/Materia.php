<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
	protected $table='materias';
    protected $fillable = ['materia'];

    public function profesor(){
    	return $this->hasOne('App\Profesor','id','id_mat');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
	protected $table='profesor';
    protected $fillable = ['nombre', 'apellido', 'cedula','tlf','email','id_mat'];

    public function materias(){
    	return $this->belongsTo('App\Materia','id_mat','id');
    }
}

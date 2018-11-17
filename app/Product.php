<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $table='products';
    protected $fillable = ['name','slug','details','price','description'];

    public function presetPrice(){
    	return '$'.number_format($this->price / 100, 2);
    }
}

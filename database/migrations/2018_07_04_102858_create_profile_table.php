<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
          $table->increments('id');
             
            $table->decimal('tlf',11);
             $table->string('descripcion');
             $table->string('edu_primaria');
             $table->string('edu_secundaria');
             $table->string('habilidades_art')->default('Ninguna');
             $table->string('habilidades_comp')->default('Ninguna');
             $table->string('habilidades_off')->default('Ninguna');
            $table->string('hobbies')->default('Ninguna');
            $table->date('cursos_date');
            $table->string('cursos_des')->default('Ninguna');
            $table->integer('id_user')->unsigned();
            


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile');
    }
}

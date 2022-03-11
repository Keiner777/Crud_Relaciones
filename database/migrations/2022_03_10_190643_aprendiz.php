<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
         Schema::create('aprendizs', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->string('Nombre');
            $table->string('Apellido');
            $table->string('Direccion');
            $table->string('correo');
            $table->string('telefono');
            $table->bigInteger('fichas_id')->unsigned();
            $table->integer('edad');
            $table->timestamps();

            $table->foreign('fichas_id')->references('id')->on('fichas')->onDelete("cascade");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};

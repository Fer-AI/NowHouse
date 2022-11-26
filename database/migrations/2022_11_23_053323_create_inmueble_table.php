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
        Schema::create('inmueble', function (Blueprint $table) {
            $table->id(); 
            $table->string('titulo');
            $table->string('precio');
            $table->string('imagen');
            $table->string('descripcion');
            $table->string('direccion');
            $table->string('habitaciones');
            $table->string('baños');
            $table->string('patio');
            $table->string('localizacion');
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
        Schema::dropIfExists('inmueble');
    }
};
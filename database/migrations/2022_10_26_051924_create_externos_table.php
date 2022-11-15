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
        Schema::create('externos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('institucion_remitente');
            $table->string('persona_firmante');
            $table->string('asunto');
            $table->string('fecha_documento');
            $table->string('tipo_documento');
            $table->string('cite');
            $table->string('via');
            $table->string('responsable');
            $table->string('deriva');
            $table->date('fecha_ingreso');
            $table->unsignedBigInteger('personal_id');
            $table->foreign('personal_id')->references('id')->on('personals')->onDelete('cascade');
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
        Schema::dropIfExists('externos');
    }
};

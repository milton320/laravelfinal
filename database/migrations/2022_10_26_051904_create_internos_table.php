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
        Schema::create('internos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('fecha_documento');
            $table->string('destinatario');
            $table->string('institucion');
            $table->string('asunto');
            $table->date('fecha_salida');
            $table->string('fax');
            $table->string('carta');
            $table->string('inf');
            $table->string('email');
            $table->string('solicitado_por');
            $table->string('responsable_firma');
            $table->string('observaciones');
            $table->string('deriva');
            $table->date('fecha_ingreso');
            $table->date('fecha_eliminacion');
            $table->date('fecha_actualizacion');
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
        Schema::dropIfExists('internos');
    }
};

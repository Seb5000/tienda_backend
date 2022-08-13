<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Usuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Nombres', 250)->nullable();
            $table->string('ApellidoPaterno', 250)->nullable();
            $table->string('ApellidoMaterno', 250)->nullable();
            $table->string('Ci', 250)->nullable();
            $table->string('Nit', 250)->nullable();
            $table->string('Email', 250)->nullable();
            $table->string('Celular', 60)->nullable();
            $table->text('Direccion')->nullable();
            $table->dateTime('FechaNacimiento')->nullable();
            $table->string('Foto', 250)->nullable();

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();

            $table->nullableTimestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Usuario');
    }
}

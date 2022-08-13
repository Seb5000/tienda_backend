<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GrupoAccion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('GrupoAccion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Usuario')->nullable();
            $table->integer('TipoAccion')->nullable();
            $table->string('Nombre', 500)->nullable();
            $table->dateTime('FechaAccion')->nullable();
            $table->decimal('Monto', 15, 2)->nullable();

            $table->nullableTimestamps();
            $table->foreign('Usuario')->references('id')->on('Usuario');
            $table->foreign('TipoAccion')->references('id')->on('TipoAccion');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('GrupoAccion');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Accion extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Accion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('Producto')->nullable();
            $table->integer('GrupoAccion')->nullable();

            $table->integer('Cantidad')->nullable();
            $table->decimal('HMonto', 15, 2)->nullable();
            $table->dateTime('FechaAccion')->nullable();


            $table->nullableTimestamps();
            $table->foreign('Producto')->references('id')->on('Producto');
            $table
                ->foreign('GrupoAccion')
                ->references('id')
                ->on('GrupoAccion')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Accion');
    }
}

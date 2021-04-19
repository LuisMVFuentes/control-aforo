<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Local extends Migration
{
    public function up()
    {
        Schema::create('Local', function (Blueprint $table) {
            $table->increments('idLocal')->primary();
            $table->string('nombreLocal', 100)->nullable()->unique();
            $table->string('direccion', 100)->nullable();
            $table->string('descripcion', 500)->nullable();
            $table->unsignedInteger('aforoMax')->nullable();
            $table->time('horarioEntrada')->nullable();
            $table->time('horarioSalida')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Local');
    }
}

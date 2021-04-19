<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Control extends Migration
{
    public function up()
    {
        Schema::create('Control', function (Blueprint $table) {
            $table->increments('idControl');
            $table->unsignedInteger('numEntradas')->nullable();
            $table->unsignedInteger('numSalidas')->nullable();
            $table->unsignedInteger('sitActual')->nullable();
            $table->unsignedInteger('idlocal');
            $table->foreign('idLocal')->references('idLocal')->on('Local');         
            $table->unsignedInteger('idEstado');
            $table->foreign('idEstado')->references('idEstado')->on('Estado');
        });
    }

    public function down()
    {
        Schema::dropIfExists('Control');
    }
}
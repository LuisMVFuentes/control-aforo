<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Estado extends Migration
{
    public function up()
    {
        Schema::create('Estado', function (Blueprint $table) {
            $table->increments('idEstado')->primary();
            $table->string('descripcion', 10)->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('Estado');
    }
}

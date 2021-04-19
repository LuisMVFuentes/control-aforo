<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ControlSeeder extends Seeder
{
    public function run()
    {
        DB::table('Control')->insert([
            'numEntradas' => 0,
            'numSalidas' => 0,
            'sitActual' => 0,
            'idLocal' => 1,
            'idEstado' => 1,
        ]);
    }
}

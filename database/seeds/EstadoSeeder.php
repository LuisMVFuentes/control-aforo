<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EstadoSeeder extends Seeder
{

    public function run()
    {
        DB::table('Estado')->insert([
            'descripcion' => 'Disponible',
        ]);

        DB::table('Estado')->insert([
            'descripcion' => 'Ocupado',
        ]);
    }
}

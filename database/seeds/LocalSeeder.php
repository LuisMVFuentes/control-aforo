<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalSeeder extends Seeder
{
    
    public function run()
    {

        DB::table('Local')->insert([
            'nombreLocal' => 'Municipalidad de Pimentel',
            'direccion' => 'Leoncio Prado, Pimentel 14000',
            'descripcion' => 'Entidad municipal...',
            'aforoMax' => 50,
            'horarioEntrada' => '09:00:00',
            'horarioSalida' => '16:00:00',
        ]);

        DB::table('Local')->insert([
            'nombreLocal' => 'Coliseo Municipal',
            'direccion' => 'Malecón Seoane 739-799, Pimentel 14000',
            'descripcion' => 'Area recreativa...',
            'aforoMax' => 150,
            'horarioEntrada' => '09:00:00',
            'horarioSalida' => '18:30:00',
        ]);

        DB::table('Local')->insert([
            'nombreLocal' => 'Mercado de Pimentel',
            'direccion' => 'Ricardo Palma, Pimentel 14000',
            'descripcion' => 'Compra y venta de productos necesarios',
            'aforoMax' => 80,
            'horarioEntrada' => '06:00:00',
            'horarioSalida' => '12:30:00',
        ]);
    }
}

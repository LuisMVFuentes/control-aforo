<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(LocalSeeder::class);
        $this->call(EstadoSeeder::class);
        $this->call(ControlSeeder::class);
    }
}

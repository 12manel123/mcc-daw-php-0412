<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PlanetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         \App\Models\Planet::factory()
            ->times(50)
            ->create();
    }
}
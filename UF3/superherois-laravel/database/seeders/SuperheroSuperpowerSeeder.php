<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class SuperheroSuperpowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('superheroes_superpowers')->insert([
            'superhero_id' => 1,
            'superpower_id' => 1        
        ]);
        DB::table('superheroes_superpowers')->insert([
            'superhero_id' => 1,
            'superpower_id' => 2        
        ]);
        DB::table('superheroes_superpowers')->insert([
            'superhero_id' => 1,
            'superpower_id' => 3        
        ]);
        DB::table('superheroes_superpowers')->insert([
            'superhero_id' => 2,
            'superpower_id' => 4        
        ]);
        DB::table('superheroes_superpowers')->insert([
            'superhero_id' => 2,
            'superpower_id' => 5        
        ]);
        
        DB::table('superheroes_superpowers')->insert([
            'superhero_id' => 2,
            'superpower_id' => 6        
        ]);
        DB::table('superheroes_superpowers')->insert([
            'superhero_id' => 2,
            'superpower_id' => 7        
        ]);
        
        

    }
}

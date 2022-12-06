<?php

namespace Database\Seeders;



use Illuminate\Database\Seeder;
// afegit
use Illuminate\Support\Facades\DB;
use App\Models\Superhero;

class SuperheroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // versió 1

        /*
        DB::table('superheroes')->insert([
            'heroname' => 'Superman',
            'realname' => 'Clark Ken',
            'gender' => 'male',
            'planet_id' =>1
        ]); */

        // versió 2
       
        $superheroes = [
            [                
                'heroname'  => 'Hulk',
                'realname' => 'Bruce Banner',
                'gender' => 'male',
                'planet_id' => 1,
            ],
            [                
                'heroname'  => 'Iron Man',
                'realname' => 'Tony Stark',
                'gender' => 'male',
                'planet_id' => 1,
            ],
            [             	
                'heroname'      => 'Spider-Man',
                'realname' => 'Peter Parker',
                'gender' => 'male',
                'planet_id' => 1,
            ],
            [             	   
                'heroname'      => 'Thor',
                'realname' => 'Thor Odinson',
                'gender' => 'male',
                'planet_id' => 1,
            ],
            [               
                'heroname'      => 'Black Widow',
                'realname' => 'Natasha Romanoff',
                'gender' => 'female',
                'planet_id' => 2,
            ],
        ];

        Superhero::insert($superheroes);

    }
}
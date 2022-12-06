<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         \DB::table('products')->insert([
            [
                'nom' => 'Disfressa Spider-man',                
                'descripcio' => 'Per si vols anar fent el friki',
                'preu' => 7.98,
            ],
            [
                'nom' => 'clauer Capità America',
                'descripcio' => 'No perdis les teves claus amb aquest superclauer',
                
                'preu' => 7.95,
            ],
            [
                'nom' => 'Pijama WonderWoman ',
                'descripcio' => 'Dorm sempre alerta!',
                'preu' => 79.9,
            ],
            [
                'nom' => 'Tassa Hulk',
                'descripcio' => 'Ho aguanta tot',
               
                'preu' => 3.99,
            ],
            [
                'nom' => 'Samarreta IronMan',
                'descripcio' => 'No cal planxar mai.',
                'preu' => 16.99,
            ],
        ]);
    }
}

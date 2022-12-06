<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;

// afegit
use App\Models\Planet;
use Illuminate\Support\Str;//para llamar desùes para operaciones de string como el ::random


class PlanetFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Planet::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'name' => Str::random(10), // $this->faker->name,
        ];
    }
}

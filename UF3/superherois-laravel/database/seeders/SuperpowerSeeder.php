<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Superpower;

class SuperpowerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $superpowers = [
            ['description'=>'Accelerated Healing'],
			['description'=>'Berserk Mode'],
			['description'=>'Bloodlust'],
			['description'=> 'Cold Resistance'],
			['description'=> 'Durability'],
			['description'=> 'Electricity Resistance'],
			['description'=>'Emotional Power Up'],
			['description'=>'Endurance'],
			['description'=>'Energy Resistance'],
			['description'=> 'Fire Resistance'],
			['description'=> 'Gamma Mutant Physiology'],
			['description'=>'Heat Resistance'],
			['description'=> 'Hellfire Resistance'],
			['description'=> 'Insanity'],
			['description'=> 'Intelligence'],
			['description'=> 'Invulnerability'],
			['description'=> 'Radiation Absorption'],
			['description'=> 'Radiation Control'],
			['description'=> 'Radiation Immunity'],
			['description'=> 'Rage Power'],
			['description'=> 'Reactive Power Level'],
			['description'=> 'Regeneration'],
			['description'=> 'Seismic Power'],
			['description'=> 'Stamina'],
			['description'=> 'Super Speed'],
			['description'=> 'Super Strength'],
			['description'=> 'Agility'],
			['description'=> 'Danger Sense'],
			['description'=> 'Durability'],
			['description'=> 'Intelligence'],
			['description'=> 'Peak Human Condition'],
			['description'=> 'Reflexes'],
			['description'=> 'Stamina'],
			['description'=> 'Substance Secretion'],
			['description'=> 'Super Speed'],
			['description'=> 'Super Strength'],
			['description'=> 'Wallcrawling'],
			['description'=> 'Web Creation'],
			['description'=> 'Acrobatics'],
		];

		Superpower::insert($superpowers);

    }
}

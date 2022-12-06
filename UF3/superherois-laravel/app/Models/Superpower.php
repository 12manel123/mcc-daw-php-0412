<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Superpower extends Model
{
    use HasFactory;
    public function superheroes()
    {
  		 
   		return $this->belongsToMany(
       		 Superhero::class,
        	'superheroes_superpowers');
        	
    }
}

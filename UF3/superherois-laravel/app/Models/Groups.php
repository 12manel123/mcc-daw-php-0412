<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groups extends Model
{
    use HasFactory;
    public function superheroes()
    {
      return $this->belongsToMany(
           Superhero::class,
          'groups_superhero');
    }
}

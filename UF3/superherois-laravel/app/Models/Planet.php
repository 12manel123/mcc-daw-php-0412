<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];

    public function superheroes()
    {
        return $this->hasMany(Superhero::class);
    }
}

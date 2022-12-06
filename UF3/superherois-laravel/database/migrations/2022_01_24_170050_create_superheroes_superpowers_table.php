<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuperheroesSuperpowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('superheroes_superpowers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('superhero_id')->constrained()->onDelete('cascade');
            $table->foreignId('superpower_id')->constrained()->onDelete('cascade');
            $table->unique(['superhero_id','superpower_id']);
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('superheroes_superpowers');
    }
}

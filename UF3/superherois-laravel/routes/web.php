<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');//return view('principal');
});


Route::group(['middleware'=>['auth','is_admin']], function() {
	Route::get('/planets',[App\Http\Controllers\PlanetController::class, 'index'])->name('planets.index'); 
	Route::get('/planets/delete/{planet}',[App\Http\Controllers\PlanetController::class, 'delete'])->name('planets.destroy');
	Route::get('/planets/new',[App\Http\Controllers\PlanetController::class, 'new']); 
	Route::post('/planets/store',[App\Http\Controllers\PlanetController::class, 'store']); 
	Route::get('/planets/updateredirection/{planet}',[App\Http\Controllers\PlanetController::class, 'updateredirection']); 
	Route::post('/planets/update/{planet}',[App\Http\Controllers\PlanetController::class, 'update']); 
	Route::get('/planets/show/{planet}',[App\Http\Controllers\PlanetController::class, 'showPlanet'])->name('planets.show'); 
});



Route::get('/superhero', [App\Http\Controllers\SuperheroController::class, 'index'])->name('superhero.index');
Route::get('/superhero/create', [App\Http\Controllers\SuperheroController::class, 'create'])->name('superhero.create');
Route::post('/superhero/store', [App\Http\Controllers\SuperheroController::class, 'store'])->name('superhero.store');
Route::get('/superhero/destroy/{id}', [App\Http\Controllers\SuperheroController::class, 'destroy'])->name('superhero.destroy');
Route::get('/superhero/edit/{id}', [App\Http\Controllers\SuperheroController::class, 'edit'])->name('superhero.edit');
Route::post('/superhero/update/{id}', [App\Http\Controllers\SuperheroController::class, 'update'])->name('superhero.update');
Route::get('/superhero/show/{superhero}', [App\Http\Controllers\SuperheroController::class, 'show'])->name('superhero.show');


Route::get('/mysuperheroes', [App\Http\Controllers\MySuperheroController::class, 'index'])->name('mysuperheroes.index');
Route::get('/mysuperheroes/create', [App\Http\Controllers\MySuperheroController::class, 'create'])->name('mysuperheroes.create');
Route::post('/mysuperheroes/store', [App\Http\Controllers\MySuperheroController::class, 'store'])->name('mysuperheroes.store');

Route::get('/mysuperheroes/destroy/{id}', [App\Http\Controllers\MySuperheroController::class, 'destroy'])->name('mysuperheroes.destroy');
Route::get('/mysuperheroes/edit/{id}', [App\Http\Controllers\MySuperheroController::class, 'edit'])->name('mysuperheroes.edit');
Route::post('/mysuperheroes/update/{id}', [App\Http\Controllers\MySuperheroController::class, 'update'])->name('mysuperheroes.update');
Route::get('/mysuperheroes/show/{superhero}', [App\Http\Controllers\MySuperheroController::class, 'show'])->name('mysuperheroes.show');


Route::get('/mysuperheroes/poders/{superhero}', [App\Http\Controllers\MySuperheroController::class, 'poders'])->name('mysuperheroes.poders');
Route::post('mysuperheroes/poders/canviarpoder/{superhero}/{superpower}', [App\Http\Controllers\MySuperheroController::class, 'canviarpoder'])->name('mysuperheroes.canviarpoders');
Route::post('mysuperheroes/poders/afegirpoder/{superhero}', [App\Http\Controllers\MySuperheroController::class, 'afegirpoder'])->name('mysuperheroes.afegirpoder');
Route::get('mysuperheroes/poders/eliminarpoder/{superhero}/{id}', [App\Http\Controllers\MySuperheroController::class, 'eliminarpoder'])->name('mysuperheroes.eliminarpoders');









Route::get('/superhero/poders/{superhero}', [App\Http\Controllers\SuperheroController::class, 'poders'])->name('superhero.poders');

Route::post('superhero/poders/canviarpoder/{superhero}/{superpower}', [App\Http\Controllers\SuperheroController::class, 'canviarpoder'])->name('superhero.canviarpoders');

Route::post('superhero/poders/afegirpoder/{superhero}', [App\Http\Controllers\SuperheroController::class, 'afegirpoder'])->name('superhero.afegirpoder');

Route::get('superhero/poders/eliminarpoder/{superhero}/{id}', [App\Http\Controllers\SuperheroController::class, 'eliminarpoder'])->name('superhero.eliminarpoders');



/*EXAMEN!*/
Route::get('/groups', [App\Http\Controllers\GroupsController::class, 'index'])->name('groups.index');
Route::get('/groups/newgroups', [App\Http\Controllers\GroupsController::class, 'create'])->name('groups.newgroups');
Route::post('/groups/store', [App\Http\Controllers\GroupsController::class, 'store'])->name('groups.store');
Route::get('/groups/destroy/{id}', [App\Http\Controllers\GroupsController::class, 'destroy'])->name('groups.destroy');

Route::get('/groups/mostrar/{grup}', [App\Http\Controllers\GroupsController::class, 'indexgroups'])->name('groups.mostrar');

Route::get('/groups/mostrar/eliminar/{grup}', [App\Http\Controllers\GroupsController::class, 'deletehero'])->name('groups.eliminar');


Route::get('/llistagroup', [App\Http\Controllers\GroupsController::class, 'indexgroup'])->name('groups.indexgroup');


Route::get('/superpower', [App\Http\Controllers\SuperpowerController::class, 'index'])->name('superpower.index');
Route::get('/superpower/show/{id}', [App\Http\Controllers\SuperpowerController::class, 'show'])->name('superpower.show');
Route::get('/superpower/create', [App\Http\Controllers\SuperpowerController::class, 'create'])->name('superpower.create');
Route::post('/superpower/store', [App\Http\Controllers\SuperpowerController::class, 'store'])->name('superpower.store');
Route::group(['middleware'=>'is_admin'], function() {

	Route::get('/superpower/destroy/{id}', [App\Http\Controllers\SuperpowerController::class, 'destroy'])->name('superpower.destroy');
	Route::get('/superpower/edit/{id}', [App\Http\Controllers\SuperpowerController::class, 'edit'])->name('superpower.edit');
	Route::post('/superpower/update/{id}', [App\Http\Controllers\SuperpowerController::class, 'update'])->name('superpower.update');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/webSegura', function () {
    return "Estas autentificat!!";
})->middleware('auth');
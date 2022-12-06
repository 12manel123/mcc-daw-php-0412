<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Planet;

class PlanetController extends Controller
{
    public function index() {
        //$planetes = Planet::all();
        $user = auth()->user();
        
    	$planetes = Planet::paginate(5);//guardar todos los planetas en un valor array
    	return view("planets.llista",compact('planetes'));
    	//['planetes'=>$planetes]
    	
    }
    public function delete(Planet $planet){
    	
    	//Recuperar el objecte
    	//$planet = Planet::findOrFail($id);
    	try{
    		$planet->delete();
    		return redirect('planets')->with('status',"S'ha pogut esborrar");
    		

    	}
    	catch(\Illuminate\Database\QueryException $e){
    		echo "No es pot esborrar. <br><h4>Codi de error: ".$e->getMessage()."</h4>";
    		return redirect('planets')->with('status',"No es pot esborrar");
    	}
    }

    public function new(){
    	return view("planets.newplanet");
    }
    public function store(Request $request){
    	$request->validate(['nom' => 'required | min:3']);
    	$planeta = new Planet;
    	$planeta->name = $request->nom;
    	$planeta->save();
    	return redirect("planets")->with('status',"Planeta creat!");

    }


    public function updateredirection(Planet $planet){
    	//$planet = Planet::findOrFail($id);


    	return view("planets.updateplanet",compact('planet'));
    }

    public function update(Request $request,Planet $planet){
    	
    	try{
    		$request->validate(['nom' => 'required | min:3']);
    		//$planet = Planet::findOrFail($id);
    		$planet->name = $request->nom;
    		$planet->save();
    		return redirect('planets')->with('status',"S'ha pogut actualizar ".$request->nom." amb ".$request->id);
    	
    	}
    	catch(\Illuminate\Database\QueryException $e){
    		return redirect('planets')->with('status',"No es pot actualizar");
    	}
    }
    public function showPlanet(Planet $planet){
        return view("planets.show",compact('planet'));
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superhero;
use App\Models\Planet;
use App\Models\Superpower;


class SuperheroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('is_admin');
    }

    
    public function index(Request $request)
    {
        $filters = $request->all('searchName', 'searchGender');
        $query = Superhero::with('planet');

        if ($request->has('searchName')) {
          $query->where('heroname','like','%'.$filters['searchName'].'%');
        }

        // Si s'ha enviat el pàrametre i té valor
        if ($request->filled('searchGender')) {
            $query->where('gender',$filters['searchGender']);
        }

        //$superhero = Superhero::with('planet')->paginate(5);

        /*$filters['searchGender']="female";
        $filters['searchName']="Hulk";*/


        //$planetes = Planet::all();
        $superhero = $query->paginate(5)->withQueryString();
        return view("superhero.llista",compact('superhero','filters'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $planetes = Planet::all();
       return view("superhero.newsuperhero",compact('planetes'));
    }


    public function store(Request $request)
    {
        $request->validate(['heroname' => 'required | max:25 | unique:superheroes','realname' => 'required | max:75','gender' => 'required | in:male,female','planet_id' => 'required | exists:planets,id']);
        /*
        $superhero = new Superhero;
        $superhero->realname = $request->realname;
        $superhero->heroname = $request->heroname;
        $superhero->gender = $request->gender;
        $superhero->planet_id = $request->planet_id;
        $superhero->save();*/

        Superhero::create($request->all());
        return redirect("superhero")->with('status',"Superheroe creat!");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Superhero $superhero){
        $superhero->load("superpowers");
        return view("superhero.show",compact('superhero'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $superhero = Superhero::findOrFail($id);
        $planetes = Planet::all();
        return view("superhero.updatesuperhero",compact('superhero'),compact('planetes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       try{
            $request->validate(['realname' => 'required | min:2']);
            $superhero = Superhero::findOrFail($id);
            $superhero->realname = $request->realname;
            $superhero->heroname = $request->heroname;
            $superhero->gender = $request->gender;
            $superhero->planet_id = $request->planet_id;
            $superhero->save();
            return redirect('superhero')->with('status',"S'ha pogut actualizar ".$request->realname." amb ".$request->id);
        
        }
        catch(\Illuminate\Database\QueryException $e){
            return redirect('planets')->with('status',"No es pot actualizar");
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $superhero = Superhero::findOrFail($id);
        try{
            $superhero->delete();
            return redirect('superhero')->with('status',"S'ha pogut esborrar");
            

        }
        catch(\Illuminate\Database\QueryException $e){
            echo "No es pot esborrar. <br><h4>Codi de error: ".$e->getMessage()."</h4>";
            return redirect('superhero')->with('status',"No es pot esborrar");
        }
    }



    public function poders(Superhero $superhero){
        $superpower = Superpower::all();
        $superhero->load("superpowers");
        return view("superhero.poders",compact('superhero'),compact('superpower'));
    }



    public function afegirpoder(Request $request, Superhero $superhero){
        $superhero->superpowers()->attach($request->poder); 
        return redirect(url('/superhero/poders',$superhero->id));
    }


    public function canviarpoder(Superhero $superhero,$idpower, Request $request){
        $superhero->superpowers()->updateExistingPivot($idpower, ['amount' => $request->nivell]);
        return redirect(url('/superhero/poders',$superhero->id));
        
    }

    public function eliminarpoder(Superhero $superhero,$id){
            $superhero->superpowers()->detach($id);
            return redirect(url('/superhero/poders',$superhero->id));

        
    }
    
}

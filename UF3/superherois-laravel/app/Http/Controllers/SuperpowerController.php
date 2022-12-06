<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superpower;

class SuperpowerController extends Controller
{

    public function index(){
        $superpower = Superpower::all();
        return view("superpower.llista",compact('superpower'));
    }

    public function create()
    {
        return view("superpower.newsuperpower");

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['description' => 'required | min:3']);
        $superpower= new Superpower;
        $superpower->description = $request->description;
        $superpower->save();
        return redirect("superpower")->with('status',"Poder creat!");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $superpower = Superpower::findOrFail($id);
        return view("superpower.updatesuperpower",compact('superpower'));
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
            $request->validate(['description' => 'required | min:3']);
            $superpower = Superpower::findOrFail($id);
            $superpower->description = $request->description;
            $superpower->save();
            return redirect("superpower")->with('status',"Poder actaulizat!");        
        }
        catch(\Illuminate\Database\QueryException $e){
            return redirect('superpower')->with('status',"No es pot actualizar");
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
        $superpower = Superpower::findOrFail($id);
        try{
            $superpower->delete();
            return redirect('superpower')->with('status',"S'ha pogut esborrar");
            

        }
        catch(\Illuminate\Database\QueryException $e){
            echo "No es pot esborrar. <br><h4>Codi de error: ".$e->getMessage()."</h4>";
            return redirect('superpower')->with('status',"No es pot esborrar");
        }
    }
}

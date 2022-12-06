<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Groups;
use App\Models\Superhero;

class GroupsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups = Groups::paginate(5);
        return view("groups.llista",compact('groups'));

        
    }
    public function indexgroups(Groups $grup)
    {
        
        $grup->load("superheroes");
        return view("groups.llistagroup",compact('grup'));        
    }

    public function deletehero(Groups $grup,$id)
    {
        $grup->load("superheroes");
        $groups = Groups::findOrFail($id);

        try{
            $grup->delete();
            return redirect('groups/mostrar',compact('id'))->with('status',"S'ha pogut esborrar");
            

        }
        catch(\Illuminate\Database\QueryException $e){
            echo "No es pot esborrar. <br><h4>Codi de error: ".$e->getMessage()."</h4>";
            return redirect('superhero')->with('status',"No es pot esborrar");
        }
        $groups = Groups::paginate(5);
        $grup->load("superhero");
        return view("groups.llistagroup",compact('grup'),compact('groups'));        
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $superheroes = Superhero::all();
        return view("groups.newgroups",compact('superheroes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['nom' => 'required | min:3 | unique:groups']);
        $groups = new Groups;
        $groups->nom = $request->nom;
        $groups->save();

        //NO SE ESPECIFICAR PER CREAR A LA TABLE GROUP_SUPERHERO i NO SE ESPECIFICAR LA ID
        /*$groupssh = new Groups;
        $groupssh->superheroes->groups_id = $groups->id;
        $groupssh->superheroes->superheroes_id = $request->groups;
        $groupssh->save();*/

        return redirect("groups")->with('status',"Grup creat!");
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $groups = Groups::findOrFail($id);
        try{
            $groups->delete();
            return redirect('groups')->with('status',"S'ha pogut esborrar");
            

        }
        catch(\Illuminate\Database\QueryException $e){
            echo "No es pot esborrar. <br><h4>Codi de error: ".$e->getMessage()."</h4>";
            return redirect('groups')->with('status',"No es pot esborrar");
        }
    }
}

<?php

namespace App\Http\Controllers;
use App\Http\Requests\StoreFamilleRequest;
use App\Models\User;
use App\Models\Famille;

use Illuminate\Http\Request;

class FamilleController extends Controller
{
    public function index(){

        $familles = Famille::paginate(1);

        return view('familles.index', compact('familles'));
    }

    public function create(){
        $users = User::All();

        return view('familles.create', compact('users'));
    }

    public function store( StoreFamilleRequest $request)
    {
        $query= Famille::create($request->all());

        if($query) {
            return redirect()->route('familles.create')->with('success_message','Valider avec succès. merci!');
        }
    }

    public function delete(Famille $famille)
    {
        try{

            $famille->delete();
            return redirect()->route('familles.index')->with('success_message','succès');
        }catch(Exception $e){
            dd($e);
        }
    }

    public function edit(Famille $famille )
    {
        $users=User::all();
        return view('familles.edit', compact('users','famille'));
    }

    public function update(Famille $famille , StoreFamilleRequest $request)
    {
        try{
            $famille->nom = $request->nom;
            $famille->user_id = $request->user_id;
            $famille->update();
            return redirect()->route('familles.index')->with('success_message','la categorie a été modifiée avec succès');
        }catch(Exception $e){
            dd($e);
    }

}


}




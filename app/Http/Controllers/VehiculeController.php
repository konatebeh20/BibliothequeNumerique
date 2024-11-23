<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StorevehiculeRequest;
use App\Models\Vehicule;
use App\Models\Famille;


class VehiculeController extends Controller
{
    public function index(){

        $vehicules = Vehicule::paginate(1);

        return view('vehicule.index', compact('vehicules'));
    }

    public function create(){
        $familles = Famille::All();

        return view('vehicule.create', compact('familles'));
    }

    public function store( StorevehiculeRequest $request)
    {
        $query= Vehicule::create($request->all());

        if($query) {
            return redirect()->route('vehicule.create')->with('success_message','Valider avec succès. merci!');
        }
    }

    public function delete(Vehicule $vehicule)
    {
        try{

            $vehicule->delete();
            return redirect()->route('vehicule.index')->with('success_message','succès');
        }catch(Exception $e){
            dd($e);
        }
    }

    public function edit(vehicule $vehicule )
    {
        $familles=Famille::all();
        return view('vehicule.edit', compact('vehicule','familles'));
    }

    public function update(Vehicule $vehicule , StorevehiculeRequest $request)
    {
        try{
            $vehicule->immat = $request->immat;
            $vehicule->marque = $request->marque;
            $vehicule->famille_id = $request->famille_id;
            $vehicule->update();
            return redirect()->route('vehicule.index')->with('success_message','le Vehicule a été modifié avec succès');
        }catch(Exception $e){
            dd($e);
    }

}


}

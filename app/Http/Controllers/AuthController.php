<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }

    Public function registerPost(Request $request)
    {

        $request->validate([
            'nom'=> 'required',
            'prenom'=> 'required',
            'fonction'=> 'required',
            'email'=> 'required',
            'password'=> 'required',
            'image'=>'required',
        ]);
        $input = $request->all();

        if($image=$request->file('image')){
            $destinationPath ='imgs/';
            $profileImage = date('YmdHis'). " . " . $image->getClientOriginalExtension();
            $image->move($destinationPath,$profileImage);
            $input['image'] = "$profileImage";
        }

            User::create($input);

            return redirect('login')->with('success','Utilisateur enregistrer avec succès');
    }

    Public function loginPost(Request $request)
    {

        $credetials = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::attempt($credetials)){
            return redirect()->route('dashboard')->with('success', 'Vous êtes connectés');
        }
        return back()->with('error', 'Connexion echouée');

    }

    public function profile()
    {
        return view('auth.profile');
    }

    public function index()
    {
        $users=User::paginate(1);
        return view('auth.index', compact('users'));
    }

    public function delete(User $user)
    {
        try{

            $user->delete();
            return redirect()->route('index.users')->with('success_message','succès');
        }catch(Exception $e){
            dd($e);
        }
    }

    public function edit(User $user )
    {
        return view('auth.edit', compact('user'));
    }

    public function update(User $user , Request $request)
    {
        try{
            $user->nom = $request->nom;
            $user->prenom = $request->prenom;
            $user->fonction = $request->fonction;
            $user->email = $request->email;
            $user->update();
            return redirect()->route('index.users')->with('success_message','la categorie a été modifiée avec succès');
        }catch(Exception $e){
            dd($e);
    }

}

}
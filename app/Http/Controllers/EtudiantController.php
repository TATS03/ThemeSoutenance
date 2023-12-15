<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Auth;



class EtudiantController extends Controller
{
    public function add()
    {
        return view('registerT');
    }

    public function submit(Request $request)
    {
        DB::table('etudiant')->insert([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'matricule'=>$request->matricule,
            'filiere'=>$request->filiere,
            'email'=>$request->email,
            'password'=>$request->password
        ]);
        return back()->with('etudiant_created','L\'étudiant a bien été enregistré !');
    }

    public function log()
    {
        return view('loginT');
    }

    public function logSubmit(Request $request)
    {
        $ValidateData= $request->validate([
            'email'=>"required|email",
            'password'=>"required"
        ]);
        $email= $request->input('email');
        $password= $request->input('password');

        // if (DB::table('etudiant')->attempt($request->only('email', 'password'))) {
        //     return redirect()->route('home.index');
        // }elseif (DB::table('employe')->attempt($request->only('email', 'password'))){
        //    return redirect()->route('welcome');
        // }else{
        //    return back()->with('error','Les informations ne sont pas enregistées');
        // }

        

        return back()->with('succes','Bienvenue');
    }
}

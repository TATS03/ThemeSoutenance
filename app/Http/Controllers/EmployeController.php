<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class EmployeController extends Controller
{
    public function addE()
    {
        return view('registerE');
    }

    public function submitE(Request $request)
    {
        DB::table('employe')->insert([
            'nom'=>$request->nom,
            'prenom'=>$request->prenom,
            'email'=>$request->email,
            'password'=>$request->password
        ]);
        return back()->with('prof_created','L\'employé a bien été enregistré !');
    }

    public function logE()
    {
        return view('loginE');
    }

    public function logSubmitE(Request $request)
    {
        $ValidateData= $request->validate([
            'email'=>"required|email",
            'password'=>"required"
        ]);
        $email= $request->input('email');
        $password= $request->input('password');
        

        return back()->with('login_succes','Bienvenue');
    }
}

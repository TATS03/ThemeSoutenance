<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Professeur;
use App\Models\Requetes;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function welcome()
        {
            return view('pages.welcome');
        }
    
    public function listeREQ()
        {
            $requetes = Requetes::all();
            return view('pages.listeREQ',compact("requetes"));
        }

    
    public function listeETD()
        {
            $etudiants = Etudiant::all();
            return view('pages.listeETD',compact("etudiants"));
        }
    
    
    public function listePROF()
        {
            $professeurs = Professeur::all();
            return view('pages.listePROF',compact("professeurs"));    
        }

    public function sign()
        {
            return view('pages.sign');
        }

    public function login()
        {
            return view('pages.login');
        }
   
    public function signprof()
        {   
            return view('pages.signprof');   
        }

    public function loginprof()
        {
            return view('pages.loginprof');
        }
   
    public function requete ()
        {
            return view('pages.requete');
        }

    public function conversation()
        { 
            return view('pages.conversation');
        }

}



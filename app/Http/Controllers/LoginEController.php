<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginEController extends Controller
{
     // Méthode de validation et redirection pour les étudiants
     public function loginUser(Request $request)
     {
         
        //  // Rediriger en cas d'échec de l'authentification pour les étudiants
        //  return redirect()->route('login')->with('error', 'Identifiants invalides pour les étudiants.');
     }

    
}

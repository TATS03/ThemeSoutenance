<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequeteController extends Controller
{
    public function logR()
    {
        return view('requete');
    }


    public function logSubmitR(Request $request)
    {
        $code = $this->generateRandomCode();

        DB::table('requete')->insert([
            'code' => $code,
            'statut' => 'En cours',
            'categorie' => $request->categorie,
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'matricule' => $request->matricule,
            'filiere' => $request->filiere
        ]);

        
        return redirect()->route('info.vue')->with('requete_created', 'La requete a bien été enregistrée !
        Le code de votre requete est ' . $code);
    }

    // Fonction pour générer le code alphanumérique
    private function generateRandomCode()
    {
        $chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $code = '';
        for ($i = 0; $i < 6; $i++) {
            if ($i == 2) {
                $code .= $chars[rand(10, 35)]; // Choisit une lettre
            } else {
                $code .= $chars[rand(0, 9)]; // Choisit un chiffre
            }
        }
        return $code;
    }
    
}
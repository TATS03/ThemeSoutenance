<?php

namespace App\Http\Controllers;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategorieController extends Controller
{

    public function addCat()
    {
        return view('categorie');
    }


    public function submitForm(Request $request)
    {
        DB::table('categorie')->insert([
            'nom'=>$request->nom,
            'lieu_depot'=>$request->lieu_depot,
            'heures_depot'=>$request->heures_depot,
            'pieces_jointes'=>$request->pieces_jointes,
            'maquette'=>$request->maquette
        ]);
         // Génération du code alphanumérique
        //  $randomCode = strtoupper(substr(str_shuffle('abcdefghijklmnopqrstuvwxyz'), 0, 1))
        //  . mt_rand(10, 99)
        //  . mt_rand(100, 999); 
        // $generatedCode = $randomCode;
        // $randomCode = $request->input('code');


        // Autres opérations avec les données du formulaire, telles que l'enregistrement dans la base de données, etc.

        // Rediriger ou renvoyer des données à une autre vue à partir d'ici
        // return view('confirmation', ['generatedCode' => $generatedCode]);
        
        return redirect()->route('info.vue')->with('cat_created', 'La categorie a bien été enregistrée !');

       

       
    }
    public function info(){
        $donnees = DB::table('categorie')->get();
        return view('info', compact('donnees'));
    }
    
}

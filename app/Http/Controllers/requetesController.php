<?php

namespace App\Http\Controllers;

use App\Models\Etudiant;
use App\Models\Requetes;
use Illuminate\Http\Request;
use App\Models\Professeur;
use App\Models\User;
// use Auth;
use Illuminate\Support\Facades\Auth ;
use Illuminate\Support\Facades\Redirect;

class requetesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
{
    if (Auth::check()) {

        $allTeachers = Professeur::all();
        $theUser = Auth::user()->nom;
        $requetes = Requetes::where('nom', $theUser)->get();
        return view('pages.listeREQ', compact("requetes"))->with('allTeachers',$allTeachers);
    } else {
        // Gérer le cas où aucun utilisateur n'est authentifié
    }
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function requeteEtu($EtuId)
    {
        $userId = Auth()->user()->id;
        $theEtudiant = Etudiant::where('user_id',  Auth()->user()->id)->first();

        if($EtuId != $userId){
            return "Vous n'etes pas autoriser a voir cette page !";
        }

        $listeRequetes = Requetes::where('matricule',$theEtudiant->matricule)->get();

        return view('pages.etudiantsReq')->with('mesRequetes',$listeRequetes);
    }

    public function viewSingle($id){

        $theRequete = Requetes::where('id',$id)->first();
        $allTeachers = Professeur::all();
        if($theRequete){
            if(Auth()->user()->perso == "Etudiant"){
                $typUser = "Etudiant";
            }else{
                $typUser = "Professeur";
            }

            if($typUser = "Etudiant"){
                $theEtudiant = Etudiant::where('user_id',  Auth()->user()->id)->first();
                if($theEtudiant->matricule == $theRequete->matricule){
                    return view('pages.singleReq')
                        ->with('requeteChoisis',$theRequete)
                        ->with('teachers',$allTeachers);
                }else {
                    $theRequete = null;
                    return "Vous n'etes pas autoriser a voir cette requete!";
                }
            }else if($typUser = "Professeur"){
                return view('pages.singleReq')
                    ->with('requeteChoisis',$theRequete)
                    ->with('teachers',$allTeachers);;
            }else {
                $theRequete = null;
                return "Vous n'etes pas autoriser a voir cette requete!";
            }
        } else {
            echo "Requetes Introuvable!!";
        }


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

          $requetes = new Requetes();

          $requetes -> matricule = $request ->matricule;
          $requetes -> filiere = $request->filiere;
          $requetes -> matiere =  $request->matiere;
          $requetes -> nom =  $request->nom ;
          $requetes -> object =  $request->object;
          $requetes -> etat = 0;
          $requetes ->message = $request->reqMessage;
          $picNames = [];

        foreach ($request->images as $file) {
            $picName = $file->getClientOriginalName();
            array_push($picNames,$picName);

            $file->move(public_path("uploads/requetes/{$requetes->matricule}-{$requetes->nom}/files"), $picName);
        }
        $picNamesString = implode(",", $picNames);
        $requetes->file = $picNamesString;

          $requetes-> save();

        return Redirect::back()->withSuccess("La requete a ete envoyer a Mr/Mme, {$requetes -> nom} avec success");


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $theRequete = Requetes::where('id',$id)->first();
        $theRequete->nom = $request->newName;
        $theRequete->save();
        return back();
    }

    public function valider(Request $request, $id)
    {

        $theRequete = Requetes::where('id',$id)->first();
        $theRequete->etat = 1 ;
        $theRequete->save();
        return back();
    }

    public function rejeter(Request $request, $id)
    {

        $theRequete = Requetes::where('id',$id)->first();
        $theRequete->etat = 2 ;
        $theRequete->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteReq($id)
    {

        $theRequete = Requetes::where('id',$id)->first();
        $theRequete->delete();
        return redirect()->back();
    }
}

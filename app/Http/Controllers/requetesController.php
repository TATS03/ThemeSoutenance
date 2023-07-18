<?php

namespace App\Http\Controllers;

use App\Models\Requetes;
use Illuminate\Http\Request;
use App\Models\Professeur;

use Auth;

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
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        //
          $requetes = new Requetes();

          $requetes -> matricule = $request ->matricule;
          $requetes -> filiere = $request->filiere;
          $requetes -> matiere =  $request->matiere;
          $requetes -> nom =  $request->nom ;
          $requetes -> object =  $request->object;
          $requetes -> etat = 0;
        
        //   return $request->file('reqPic')->getClientOriginalName();

          $picName =  $request->file('reqPic')->getClientOriginalName();


          $requetes -> file =  $picName;

          $request->file('reqPic')->move(public_path("uploads/requetes/{$requetes->matricule}-{$requetes->nom}/pic"), $picName);

          $requetes-> save();
            

          return to_route('listeREQ');

       
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
    public function destroy($id)
    {
        //
    }
}

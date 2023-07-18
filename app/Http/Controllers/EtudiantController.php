<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;
use App\Models\User; 
use Hash;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants = Etudiant::all();
        return view('pages.listeETD',compact("etudiants"));
        //
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
    public function store(Request  $request)
    {

        //   dd($request);
       
        $user = new User();

        $user -> nom = $request->nom;
        $user -> email = $request-> email;
        $user -> password =  Hash::make( $request->password ) ;
        $user -> perso = 'Etudiant';
        

        $user -> save();


          //dd($request);

        $etudiant = new Etudiant();

        $etudiant -> matricule = $request->matricule;
        $etudiant -> nom =  $request->nom;
        $etudiant -> email =  $request->email;
        $etudiant -> password =  Hash::make( $request->password ) ;
        $etudiant -> filiere =  $request->filiere;
        $etudiant -> niveau =  $request->niveau;

        $etudiant->user_id = $user->id;

        $etudiant -> save();

        // $user->Etudiant()->save($etudiant);


        return to_route('requete');
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
        //
    }
        
    /*
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function delete($id){
       
        $etudiant = Etudiant::find($id);
        $etudiant->delete();
        return to_route('listeETD');
}

// public function Users(){
       
//     $data = Etudiant::all();
//     $data ->get;
//     return view('pages.requete',compact("data"));
// }


   
}

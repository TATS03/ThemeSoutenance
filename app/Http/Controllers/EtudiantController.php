<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
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
    public function store(Request $request)
    {
        // dd($request);
        $etudiant = new Etudiant;

        $etudiant -> matricule = $request->matricule;
        $etudiant -> nom =  $request->nom;
        $etudiant -> email =  $request->Email;
        $etudiant -> password =  Hash::make( $request->password ) ;
        $etudiant -> filiere =  $request->filiere;
        $etudiant -> niveau =  $request->niveau;

        $etudiant -> save();

        return to_route('listeETD');

        // $etudiants = Etudiant::all();

        // return view("listeETD",compact('etudiants'));

       $verif =  $request ->validate([
            'matricule' =>' required |max: 7',
           ' nom'=>' required |max: 30',
           ' email' =>' required |email ',
           ' password '=>' required |password |max: 8 ',
            'filiere' =>' required |max: 30 ',
           ' niveau '=>' required |max: 30 ',

        ]);
        if($verif){

            echo 'verification effectuer';

        }else{

            return redirect()->back();
        }

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

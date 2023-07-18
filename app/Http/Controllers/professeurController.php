<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professeur;
use App\Models\User; 
use Hash;

class professeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $professeurs = Professeur::all();
        return view('pages.listePROF',compact("professeurs")); 
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
        //
          //dd($request);

          $user = new User();

        $user -> nom = $request->nom;
        $user -> email = $request-> email;
        $user -> password =  Hash::make( $request->password ) ;
        $user -> perso = 'Professeur';
        $user -> save();
        

         $professeur = new Professeur();

         $professeur -> nom =  $request->nom;
         $professeur -> email =  $request->email;
         $professeur -> password =  $request->password;
         $professeur -> faculte =  $request->faculte;
         $professeur -> departement =  $request->departement;

         $professeur->user_id = $user->id;

         $professeur -> save();

         return to_route('listePROF');
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
        // //
        // $professeur = Professeur::find($id);
        // $professeur ->update();
        // return to_route('listePROF');
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

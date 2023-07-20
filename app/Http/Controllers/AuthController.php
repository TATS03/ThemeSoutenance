<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
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
        public function newpage()
        {
            return view('pages.new');
        }



    public function listeETD(Request $request )
        {
            $verif =  $request->only("email","password");

                if(Auth::attempt($verif)){
                    // dd1($request);
                    $user = Auth::user();
                    if ($user->perso === 'Professeur'){
                        return redirect()->route('listeREQ');

                    }elseif($user->perso === 'Etudiant'){
                        return redirect()->route('requete');
                    }
                    return redirect()->back();
                }
                else{

                    return back()->withErrors('Identifiants invalides');
                    // return back()->withErrors('Identifiants invalides');

                }
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



    public function requete ()
        {
            $teachers = Professeur::all();
            $theEtudiant =  Etudiant::where('email',Auth::user()->email)->first();

            return view('pages.requete')
                ->with("teachers",$teachers)
                ->with("etuMat",$theEtudiant->matricule)
                ->with("etuFil",$theEtudiant->filiere);

        }

    public function conversation()
        {
            return view('pages.conversation');
        }

    // public function logout(){
    //     Auth::logout();
    // }

}



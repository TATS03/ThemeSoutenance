<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validationrequete extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'Nom'=>'required|min:15',
            'Matricule'=>'required|min:7',
            'Objet'=>'required|max :100',
            'Email'=>'required|Email',
             'Date'=>'required|Date',
            //   'file'=>'required|file',

        ];
    }
     
    public function messages()
    {
        return
        [
            'Nom.required'=>'le champ Nom est requis',
            'Matricule.required'=>'le champ Matricule est requis',
            'Email.required'=>'le champ Email est requis',
             'Email.Email'=>'le champ entree n est pas conforme a un Email',
            'Objet.required'=>'le champ objet est requis',
             'Date.required'=>'le champ Date est requis',
            'NomProf.required'=>'le champ Nom du prof est requis',
            // 'file.required'=>'le champ file est requis',

        ];
    }
}

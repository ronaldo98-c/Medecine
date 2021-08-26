<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PatientRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'Nom'=>'required',
            'Prenom'=>'required',
            'Date_Naissance'=>'required',
            'Lieu_Naissance'=>'required',
            'Groupe_Ethnique'=>'required',
            'Profession'=>'required',
            'Etat_Civil'=>'required',
            'Nationalite'=>'required',
            'Lieu_Residence'=>'required',
            'Contact_Telephonique'=>'required',
            'Email'=>'required',
            'Assurance'=>'required',
            'Nom_Personne_A_Prévenir'=>'required',
            'Prenom_Personne_A_Prévenir'=>'required',
            'Contact_Personne_A_Prévenir'=>'required',
            'Residence_Personne_A_Prévenir'=>'required',
            'Compte_E_Care'=>'required',
        ];
    }
    public function messages()
    {
        return[
           'Nom.required'=>'Veiller Entrer le nom  du patient',
           'Prenom.required'=>'Veiller Entrer le prenom  du patient',
           'Date_Naissance.required'=>'Veiller Entrer la date de naissance  du patient',
            'Lieu_Naissance.required'=>'Veiller Entrer le  lieu de naissance du patient',
            'Groupe_Ethnique.required'=>'Veiller Entrer le groupe ethnique  du patient',
            'Profession.required'=>'Veiller Entrer la profession  du patient',
            'Etat_Civil.required'=>'Veiller Entrer état civil  du patient',
            'Nationalite.required'=>'Veiller Entrer la nationalité  du patient',
            'Lieu_Residence.required'=>'Veiller Entrer la résidence  du patient',
            'Contact_Telephonique.required'=>'Veiller Entrer le contact du patient ',
            'Email.required'=>'Veiller Entrer l\'email  du patient',
            'Assurance.required'=>'Veiller Entrer le nom de l\'assurance du patient',
            'Nom_Personne_A_Prévenir.required'=>'Veiller Entrer le nom d\'une personne a prevenir',
            'Prenom_Personne_A_Prévenir.required'=>'Veiller Entrer le prenom d\'une personne a prevenir',
            'Contact_Personne_A_Prévenir.required'=>'Veiller Entrer le contact',
            'Residence_Personne_A_Prévenir.required'=>'Veiller Entrer la Résidence',
            'Compte_E_Care.required'=>'Veiller Entrer le Compte ECare de utilisateur',
        ];
    }
}

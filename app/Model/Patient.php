<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['Nom','Prenom','Date_Naissance', 'Lieu_Naissance','Groupe_Ethnique','Profession','Etat_Civil','Nationalite','Lieu_Residence','Contact_Telephonique','Email','Assurance','Nom_Personne_A_Prévenir','Prenom_Personne_A_Prévenir','Contact_Personne_A_Prévenir','Residence_Personne_A_Prévenir','Compte_E_Care'];

    public function scopeIdDescending($query)
    {
      return $query->orderBy('id','DESC');
    }
}


<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
class Medecin extends Model
{
   protected $fillable = ['id','Nom','Prenom','Matricule','Nom_Service','Numero_Ordre'];

}

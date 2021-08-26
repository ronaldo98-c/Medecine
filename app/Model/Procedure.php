<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Procedure extends Model
{
   protected $fillable = ['Nom_Patient','Nom_Medecin','Nom_Service','Installation','Lavage','Drappage','Sondage_vésical'];
}

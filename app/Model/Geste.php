<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Geste extends Model
{
   protected $fillable = ['Nom_Patient','Nom_Medecin','Nom_Service','Incision','Dissection'];
}

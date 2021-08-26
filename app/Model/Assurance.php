<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Assurance extends Model
{
    
   protected $fillable = ['Nom','Localisation','Status_Juridique','Capital'];
}

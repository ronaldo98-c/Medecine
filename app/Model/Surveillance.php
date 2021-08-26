<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Surveillance extends Model
{
    protected $fillable = ['medecin_numero_ordre','patient_nom','patient_prenom','Element_A_Surveiller'];
}

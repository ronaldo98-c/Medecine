<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Diagnostic extends Model
{
    protected $fillable = ['choix_examen_id','medecin_numero_ordre','Diagnostic_Principale','Diagnostic_Différentiel','Diagnostic_Travail'];
}

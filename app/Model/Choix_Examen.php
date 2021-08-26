<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Choix_Examen extends Model
{
    protected $fillable = ['patient_id','service_nom','medecin_numero_ordre','examen_complementaire_id','examen_physique_gynecologie_id'];
}

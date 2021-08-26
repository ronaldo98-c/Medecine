<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Consultation extends Model
{
    protected $fillable = ['Date_Consultation','patient_id','medecin_numero_ordre','motif_consulation','histoire_mal'];
}

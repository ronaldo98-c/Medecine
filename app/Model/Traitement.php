<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Traitement extends Model
{
    protected $fillable = ['diagnostic_id','Traitement_Medicamenteux','Traitement_Non_Medicamenteux'];
}

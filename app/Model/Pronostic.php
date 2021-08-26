<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pronostic extends Model
{
    protected $fillable = ['Nature','Date','medecin_id','diagnostic_id'];
}

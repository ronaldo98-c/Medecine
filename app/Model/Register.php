<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
     protected $fillable = ['nom','email','password'];
}

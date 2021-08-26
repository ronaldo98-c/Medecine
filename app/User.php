<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
class User extends \Eloquent implements Authenticatable
{
    use AuthenticableTrait;
    protected $fillable = ['email','password'];

    public static function ferme(){

        auth()->logout();
        return back();
    }
}

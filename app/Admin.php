<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;

class Admin extends Model implements \Illuminate\Contracts\Auth\Authenticatable
{
    use Authenticatable;

    public function Role(){
        return $this->belongsTo('App\Role');
    }
}

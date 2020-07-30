<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['email', 'username', 'password'];

    public function tickets () {
        return $this->hasMany('App\Ticket');
    }

    public function roles () {
        return $this->hasMany('App\Role');
    }
}

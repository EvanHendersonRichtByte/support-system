<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['email', 'username', 'password'];

    public function roles () {
        return $this->belongsToMany('App\Role');
    }

    public function tickets () {
        return $this->hasMany('App\Ticket');
    }

    public function comments () {
        return $this->hasMany('App\Comment');
    }
}

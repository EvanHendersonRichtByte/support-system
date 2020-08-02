<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = ['ticket_id', 'user_id'];

    public function ticket()
    {
        return $this->belongsTo('App\Ticket');
    }

    public function users () {
        return $this->belongsTo('App\User', 'user_id');
    }
}

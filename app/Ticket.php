<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'user_id',
        'ticket_subject',
        'ticket_category',
        'ticket_body',
        'priority',
        'status',
        'assigned_on'
    ];

    public function comments()
    {
        return $this->hasMany('App\Comment');
    }

    public function users () {
        return $this->belongsTo('App\User', 'user_id');
    }
}

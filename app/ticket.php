<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = "ticket";
    //default primarykey adalah id
    protected $primarykey = "id_ticket";
    //untuk mematikan pengotomatisan insert kolom update at
    public $timestamps=false;
}

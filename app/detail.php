<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $table = "detail";
    //default primarykey adalah id
    protected $primarykey = "id_detail";
    //untuk mematikan pengotomatisan insert kolom update at
    public $timestamps=false;
}

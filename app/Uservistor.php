<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uservistor extends Model
{


    protected $table="uservistors";
    protected $fillable = ['ip'];
}

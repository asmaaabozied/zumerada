<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CatogeryTranslation extends Model
{

    public $timestamps = false;
    protected $fillable = ['name','description'];

}//end of model

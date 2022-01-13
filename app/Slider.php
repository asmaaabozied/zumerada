<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

use Sqits\UserStamps\Concerns\HasUserStamps;

class Slider extends Model
{
    use Translatable;
    use HasUserStamps;
    use SoftDeletes;

    protected $fillable = ['image'];
    public $translatedAttributes = ['name','description'];


}

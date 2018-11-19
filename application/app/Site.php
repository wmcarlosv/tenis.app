<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{
    protected $table = 'sites';
    protected $fillable = ['title','description','tags','logo','slider_1','slider_2','slider_3','facebook','twitter','instagram','googleplus'];
}

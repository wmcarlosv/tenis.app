<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $table = 'clubes';
    protected $fillable = ['name','city_id','address','logo','cover','slug'];

    public function city(){
    	return $this->belongsTo('App\City');
    }
}

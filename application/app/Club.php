<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $table = 'clubes';
    protected $fillable = ['name','description','email','phone','facebook','twitter','googleplus','instagram','youtube','city_id','address','logo','cover','slug'];

    public function city(){
    	return $this->belongsTo('App\City');
    }

    public function services(){
    	return $this->belongsToMany('App\Service','club_services','club_id','service_id');
    }

    public function staffs(){
    	return $this->belongsToMany('App\Staff');
    }

    public function users(){
        return $this->hasMany('App\User');
    }
}

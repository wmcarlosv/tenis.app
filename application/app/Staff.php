<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staffs';
    protected $fillable = ['club_id','charge','show_order','name','email','phone'];


    public function club(){
    	return $this->belongsTo('App\Club');
    }
}

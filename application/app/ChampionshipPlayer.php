<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChampionshipPlayer extends Model
{
    protected $table = 'championship_players';
    protected $fillable = ['championship_id','user_id','payment_id','player_category_id'];

    public function payment(){
    	return $this->belongsTo('App\Payment');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }
}

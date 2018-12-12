<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $table = 'games';
    protected $fillable = ['championship_id','game_date','user_player_1_id','user_player_2_id','user_player_winner_id','player_category_id'];

    public function championship(){
    	return $this->belongsTo('App\Championship');
    }

    public function player_category(){
    	return $this->belongsTo('App\PlayerCategory');
    }
}

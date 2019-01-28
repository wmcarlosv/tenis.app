<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ranking extends Model
{
    protected $table = 'rankings';
    protected $fillable = ['championship_id','player_category_id','user_id','points'];

    public function user(){
    	return $this->belongsTo("App\User");
    }
}

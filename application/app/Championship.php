<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Championship extends Model
{
    protected $table = 'championships';
    protected $fillable = ['title','description','cover','datefrom','dateto','point_to_winner_game','total_points'];
}

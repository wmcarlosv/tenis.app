<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Championship extends Model
{
    protected $table = 'Championships';
    protected $fillable = ['title','description','cover','datefrom','dateto','point_to_winner_game','total_points'];
}

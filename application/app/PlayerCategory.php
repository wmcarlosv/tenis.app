<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerCategory extends Model
{
    protected $table = 'player_categories';
    protected $fillable = ['name','slug'];
}

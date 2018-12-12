<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $table = 'notices';
    protected $fillable = ['title','slug','content','avatar','user_id','publisher_date','status','notice_category', 'club_id'];

    public function tags(){
    	return $this->belongsToMany('App\Tag','notice_tags','notice_id','tag_id');
    }

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function notice_category(){
    	return $this->belongsTo('App\NoticeCategory');
    }
}

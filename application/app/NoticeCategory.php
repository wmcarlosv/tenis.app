<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NoticeCategory extends Model
{
    protected $table = 'notice_categories';
    protected $fillable = ['name','slug','parent_id'];

    public function NoticeCategory(){
    	return $this->hasOne('App\NoticeCategory','id','parent_id');
    }
}

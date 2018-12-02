<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    protected $fillable = ['product_id','user_id','payment_method_id','amount','payment_date','status','attachment','reference_number'];

    public function user(){
    	return $this->belongsTo('App\User');
    }

    public function product(){
    	return $this->belongsTo('App\Product');
    }

    public function payment_method(){
    	return $this->belongsTo('App\PaymentMethod');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $table = "payment_methods";
    protected $fillable = ['name','payment_method_config'];
}

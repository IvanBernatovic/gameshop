<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['status_code_id', 'weight', 'full_price', 'user_id', 'address_id', 
    	'payment_method_id', 'stripeToken'];

    public function products()
    {
    	return $this->hasMany('App\Models\ItemProduct');
    }
}

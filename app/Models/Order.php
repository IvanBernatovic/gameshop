<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['status_code_id', 'weight', 'full_price', 'user_id', 'address_id', 
    	'payment_method_id', 'stripeToken'];

    protected $dates = ['created_at', 'updated_at'];

    /**
     * For retrieving order products
     * @return App\Models\Product
     */
    public function products()
    {
    	return $this->hasMany('App\Models\OrderProduct');
    }

    public function status_code()
    {
    	return $this->belongsTo('App\Models\StatusCode');
    }

    public function payment_method()
    {
    	return $this->belongsTo('App\Models\PaymentMethod');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function address()
    {
        return $this->belongsTo('App\Models\Address');
    }

    public function pendingOrderCount()
    {
        return $this->where('status_code_id', 1)->count();
    }
}

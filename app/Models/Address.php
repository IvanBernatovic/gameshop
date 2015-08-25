<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
	protected $table = 'addresses';
    protected $fillable = ['name', 'street', 'country_id', 'state_id', 'city', 'ZIP'];

    /**
	 * Returns Country model instance
	 * @return App\Models\Country
	 */
	public function country()
	{
		return $this->hasOne('\App\Models\Country', 'id', 'country_id');
	}

	/**
	 * Returns State model instance
	 * @return App\Models\State
	 */
	public function state()
	{
		return $this->hasOne('\App\Models\State', 'id', 'state_id');
	}
}

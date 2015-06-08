<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $table = 'products';

	/**
	 * Returns category of product
	 * @return App\Models\Category
	 */
	public function category(){
		return $this->belongsTo('App\Models\Category', 'category_id', 'id');
	}
}

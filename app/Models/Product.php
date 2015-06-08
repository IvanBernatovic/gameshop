<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $table = 'products';

	protected $fillable = ['name', 'category_id', 'sku', 'quantity', 'image', 'image_thumb', 'slug',
							'weight', 'price', 'description', 'discounted_price'];

	/**
	 * Returns category of product
	 * @return App\Models\Category
	 */
	public function category(){
		return $this->belongsTo('App\Models\Category', 'category_id', 'id');
	}
}

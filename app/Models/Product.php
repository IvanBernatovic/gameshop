<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model {

	protected $table = 'products';

	protected $fillable = ['name', 'category_id', 'sku', 'quantity', 'image', 'image_thumb', 'slug',
	'weight', 'price', 'description', 'discounted_price', 'active'];

	/**
	 * Returns category of product
	 * @return App\Models\Category
	 */
	public function category()
	{
		return $this->belongsTo('App\Models\Category');
	}

	/**
	 * Get discounted price if there'is discount
	 * @return Decimal
	 */
	public function getRealPriceAttribute()
	{

		if($this->discounted_price != null)
		{
			return $this->discounted_price;
		}

		return $this->price;
	}

	/**
	 * Model events
	 * @return void
	 */
	public static function boot()
	{
		parent::boot();

		/**
		 * Triggered when Product model is saved
		 */
		static::saving(function($model)
		{

            /**
             * If discounted price is empty string, set it to null
             */
            if(empty(trim($model->discounted_price)))
            {
            	$model->discounted_price = null;
            }
        });
	}
}

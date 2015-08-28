<?php

use Illuminate\Database\Seeder;

class OrderProductTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('order_product')->delete();
        
		\DB::table('order_product')->insert(array (
			0 => 
			array (
				'id' => 1,
				'order_id' => 3,
				'product_id' => 13,
				'quantity' => 1,
				'price' => '449.99',
				'created_at' => '2015-08-25 20:14:09',
				'updated_at' => '2015-08-25 20:14:09',
			),
			1 => 
			array (
				'id' => 2,
				'order_id' => 3,
				'product_id' => 12,
				'quantity' => 1,
				'price' => '44.99',
				'created_at' => '2015-08-25 20:14:09',
				'updated_at' => '2015-08-25 20:14:09',
			),
			2 => 
			array (
				'id' => 3,
				'order_id' => 4,
				'product_id' => 18,
				'quantity' => 1,
				'price' => '39.99',
				'created_at' => '2015-08-25 20:37:19',
				'updated_at' => '2015-08-25 20:37:19',
			),
			3 => 
			array (
				'id' => 4,
				'order_id' => 4,
				'product_id' => 15,
				'quantity' => 1,
				'price' => '44.99',
				'created_at' => '2015-08-25 20:37:19',
				'updated_at' => '2015-08-25 20:37:19',
			),
			4 => 
			array (
				'id' => 5,
				'order_id' => 4,
				'product_id' => 11,
				'quantity' => 1,
				'price' => '39.99',
				'created_at' => '2015-08-25 20:37:19',
				'updated_at' => '2015-08-25 20:37:19',
			),
			5 => 
			array (
				'id' => 6,
				'order_id' => 4,
				'product_id' => 12,
				'quantity' => 1,
				'price' => '44.99',
				'created_at' => '2015-08-25 20:37:19',
				'updated_at' => '2015-08-25 20:37:19',
			),
			6 => 
			array (
				'id' => 7,
				'order_id' => 5,
				'product_id' => 18,
				'quantity' => 1,
				'price' => '39.99',
				'created_at' => '2015-08-25 22:38:18',
				'updated_at' => '2015-08-25 22:38:18',
			),
			7 => 
			array (
				'id' => 8,
				'order_id' => 5,
				'product_id' => 16,
				'quantity' => 1,
				'price' => '59.99',
				'created_at' => '2015-08-25 22:38:18',
				'updated_at' => '2015-08-25 22:38:18',
			),
			8 => 
			array (
				'id' => 9,
				'order_id' => 6,
				'product_id' => 12,
				'quantity' => 1,
				'price' => '44.99',
				'created_at' => '2015-08-26 09:18:13',
				'updated_at' => '2015-08-26 09:18:13',
			),
		));
	}

}

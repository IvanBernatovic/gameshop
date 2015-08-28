<?php

use Illuminate\Database\Seeder;

class OrdersTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('orders')->delete();
        
		\DB::table('orders')->insert(array (
			0 => 
			array (
				'id' => 3,
				'status_code_id' => 1,
				'weight' => '5.60',
				'full_price' => '494.98',
				'user_id' => 15,
				'address_id' => 5,
				'payment_method_id' => 1,
				'stripeToken' => 'tok_16dnnyDgBb3tcaMhtHiO2LsG',
				'created_at' => '2015-08-25 20:14:09',
				'updated_at' => '2015-08-25 20:14:09',
			),
			1 => 
			array (
				'id' => 4,
				'status_code_id' => 1,
				'weight' => '0.80',
				'full_price' => '169.96',
				'user_id' => 15,
				'address_id' => 5,
				'payment_method_id' => 1,
				'stripeToken' => 'tok_16do8VDgBb3tcaMhA2RdlmQW',
				'created_at' => '2015-08-25 20:37:19',
				'updated_at' => '2015-08-25 20:37:19',
			),
			2 => 
			array (
				'id' => 5,
				'status_code_id' => 1,
				'weight' => '0.40',
				'full_price' => '114.98',
				'user_id' => 15,
				'address_id' => 5,
				'payment_method_id' => 1,
				'stripeToken' => 'tok_16dq3VDgBb3tcaMhLklEC3et',
				'created_at' => '2015-08-25 22:38:18',
				'updated_at' => '2015-08-25 22:38:18',
			),
			3 => 
			array (
				'id' => 6,
				'status_code_id' => 1,
				'weight' => '0.20',
				'full_price' => '59.99',
				'user_id' => 15,
				'address_id' => 16,
				'payment_method_id' => 2,
				'stripeToken' => NULL,
				'created_at' => '2015-08-26 09:18:13',
				'updated_at' => '2015-08-26 09:18:13',
			),
		));
	}

}

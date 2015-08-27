<?php

use Illuminate\Database\Seeder;

class PaymentMethodsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('payment_methods')->delete();
        
		\DB::table('payment_methods')->insert(array (
			0 => 
			array (
				'id' => 1,
				'name' => 'Card',
				'created_at' => '2015-08-25 12:46:40',
				'updated_at' => '2015-08-25 12:46:40',
			),
			1 => 
			array (
				'id' => 2,
				'name' => 'Cash on delivery',
				'created_at' => '2015-08-25 12:46:48',
				'updated_at' => '2015-08-25 12:46:48',
			),
		));
	}

}

<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('addresses')->delete();
        
		\DB::table('addresses')->insert(array (
			0 => 
			array (
				'id' => 5,
				'name' => 'Ivan Bernatović',
				'street' => 'First street 32',
				'country_id' => 788,
				'state_id' => NULL,
				'ZIP' => '40000',
				'city' => 'Dallas',
				'created_at' => '2015-08-24 13:57:54',
				'updated_at' => '2015-08-24 13:57:54',
			),
			11 => 
			array (
				'id' => 16,
				'name' => 'Marko Bernatović',
				'street' => 'Obla Odvojak IV 2',
				'country_id' => 191,
				'state_id' => NULL,
				'ZIP' => '32270',
				'city' => 'Županja',
				'created_at' => '2015-08-26 09:18:10',
				'updated_at' => '2015-08-26 09:18:10',
			),
		));
	}

}

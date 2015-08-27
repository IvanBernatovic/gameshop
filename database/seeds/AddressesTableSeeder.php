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
			1 => 
			array (
				'id' => 6,
				'name' => 'Veronika Završki',
				'street' => 'Waldingerova 4',
				'country_id' => 191,
				'state_id' => NULL,
				'ZIP' => '31000',
				'city' => 'Osijek',
				'created_at' => '2015-08-25 15:32:07',
				'updated_at' => '2015-08-25 15:32:07',
			),
			2 => 
			array (
				'id' => 7,
				'name' => 'Veronika Završki',
				'street' => 'Waldingerova 4',
				'country_id' => 191,
				'state_id' => NULL,
				'ZIP' => '31000',
				'city' => 'Osijek',
				'created_at' => '2015-08-25 15:36:16',
				'updated_at' => '2015-08-25 15:36:16',
			),
			3 => 
			array (
				'id' => 8,
				'name' => 'Veronika Završki',
				'street' => '1st Avenue 542',
				'country_id' => 840,
				'state_id' => 37,
				'ZIP' => '31000',
				'city' => 'New York',
				'created_at' => '2015-08-25 15:37:15',
				'updated_at' => '2015-08-25 15:37:15',
			),
			4 => 
			array (
				'id' => 9,
				'name' => 'Veronika Završki',
				'street' => '1st Avenue 542',
				'country_id' => 840,
				'state_id' => 37,
				'ZIP' => '31000',
				'city' => 'New York',
				'created_at' => '2015-08-25 15:38:08',
				'updated_at' => '2015-08-25 15:38:08',
			),
			5 => 
			array (
				'id' => 10,
				'name' => 'Veronika Završki',
				'street' => '1st Avenue 542',
				'country_id' => 840,
				'state_id' => 37,
				'ZIP' => '31000',
				'city' => 'New York',
				'created_at' => '2015-08-25 15:42:24',
				'updated_at' => '2015-08-25 15:42:24',
			),
			6 => 
			array (
				'id' => 11,
				'name' => 'Veronika Završki',
				'street' => '1st Avenue 542',
				'country_id' => 840,
				'state_id' => 37,
				'ZIP' => '31000',
				'city' => 'New York',
				'created_at' => '2015-08-25 15:43:40',
				'updated_at' => '2015-08-25 15:43:40',
			),
			7 => 
			array (
				'id' => 12,
				'name' => 'Veronika Završki',
				'street' => '1st Avenue 542',
				'country_id' => 840,
				'state_id' => 37,
				'ZIP' => '31000',
				'city' => 'New York',
				'created_at' => '2015-08-25 15:44:23',
				'updated_at' => '2015-08-25 15:44:23',
			),
			8 => 
			array (
				'id' => 13,
				'name' => 'Veronika Završki',
				'street' => '1st Avenue 542',
				'country_id' => 840,
				'state_id' => 37,
				'ZIP' => '31000',
				'city' => 'New York',
				'created_at' => '2015-08-25 15:44:38',
				'updated_at' => '2015-08-25 15:44:38',
			),
			9 => 
			array (
				'id' => 14,
				'name' => 'Veronika Završki',
				'street' => '1st Avenue 542',
				'country_id' => 840,
				'state_id' => 37,
				'ZIP' => '31000',
				'city' => 'New York',
				'created_at' => '2015-08-25 16:09:39',
				'updated_at' => '2015-08-25 16:09:39',
			),
			10 => 
			array (
				'id' => 15,
				'name' => 'Veronika Završki',
				'street' => 'Waldingerova 4',
				'country_id' => 191,
				'state_id' => NULL,
				'ZIP' => '31000',
				'city' => 'Osijek',
				'created_at' => '2015-08-25 20:34:19',
				'updated_at' => '2015-08-25 20:34:19',
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

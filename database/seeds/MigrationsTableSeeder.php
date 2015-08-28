<?php

use Illuminate\Database\Seeder;

class MigrationsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('migrations')->delete();
        
		\DB::table('migrations')->insert(array (
			0 => 
			array (
				'migration' => '2015_06_04_114110_create_categories_table',
				'batch' => 1,
			),
			1 => 
			array (
				'migration' => '2015_06_04_120143_create_products_table',
				'batch' => 1,
			),
			2 => 
			array (
				'migration' => '2015_06_04_142238_create_users_table',
				'batch' => 1,
			),
			3 => 
			array (
				'migration' => '2015_08_14_201719_setup_countries_table',
				'batch' => 1,
			),
			4 => 
			array (
				'migration' => '2015_08_14_201720_charify_countries_table',
				'batch' => 1,
			),
			5 => 
			array (
				'migration' => '2015_08_14_202839_setup_states_table',
				'batch' => 1,
			),
			6 => 
			array (
				'migration' => '2015_08_14_202840_charify_states_table',
				'batch' => 1,
			),
			7 => 
			array (
				'migration' => '2015_08_24_132217_create_addresses_table',
				'batch' => 2,
			),
			8 => 
			array (
				'migration' => '2015_08_24_211316_create_status_codes_table',
				'batch' => 3,
			),
			9 => 
			array (
				'migration' => '2015_08_24_213905_create_order_product_table',
				'batch' => 3,
			),
			10 => 
			array (
				'migration' => '2015_08_25_121455_create_payment_methods_table',
				'batch' => 3,
			),
			11 => 
			array (
				'migration' => '2015_08_25_152915_create_orders_table',
				'batch' => 3,
			),
		));
	}

}

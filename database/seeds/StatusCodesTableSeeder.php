<?php

use Illuminate\Database\Seeder;

class StatusCodesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('status_codes')->delete();
        
		\DB::table('status_codes')->insert(array (
			0 => 
			array (
				'id' => 1,
				'name' => 'Pending',
				'created_at' => '2015-08-25 12:22:26',
				'updated_at' => '2015-08-25 12:22:26',
			),
			1 => 
			array (
				'id' => 2,
				'name' => 'Proccessing',
				'created_at' => '2015-08-25 12:22:35',
				'updated_at' => '2015-08-25 12:22:35',
			),
			2 => 
			array (
				'id' => 3,
				'name' => 'Shipped',
				'created_at' => '2015-08-25 12:22:41',
				'updated_at' => '2015-08-25 12:22:41',
			),
			3 => 
			array (
				'id' => 4,
				'name' => 'Complete',
				'created_at' => '2015-08-25 12:22:52',
				'updated_at' => '2015-08-25 12:22:52',
			),
		));
	}

}

<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('users')->delete();
        
		\DB::table('users')->insert(array (
			0 => 
			array (
				'id' => 15,
				'name' => 'Ivan Bernatović',
				'email' => 'ivan.bernatovic.93@gmail.com',
				'password' => '$2y$10$zu7rfNrzJ446iDmJ3D6KWuwflwchQQAviN5YbK1GCB.WP3vyMcpeS',
				'telephone' => NULL,
				'address_id' => 5,
				'activated' => 1,
				'code' => NULL,
				'remember_token' => 'mkWVpKLS88zbCg0hCitoF4U5CeWH8XtB369Cnb6iz6VpMp9fu2UDXU55OqpT',
				'created_at' => '2015-08-24 13:52:10',
				'updated_at' => '2015-08-24 18:53:22',
			),
			1 => 
			array (
				'id' => 19,
				'name' => 'Ivan Bernatoviš',
				'email' => 'ivan.bernatovic.95@gmail.com',
				'password' => '$2y$10$MzxwkCQlx6HAZmjxSwMA.upX0OswR0ShBfl72BkfhyjQBjsQ370ny',
				'telephone' => NULL,
				'address_id' => 8,
				'activated' => 0,
				'code' => 'N420cI12oySMXEoNXWPj56up7GmBqk',
				'remember_token' => NULL,
				'created_at' => '2015-08-24 14:01:15',
				'updated_at' => '2015-08-24 14:01:15',
			),
		));
	}

}

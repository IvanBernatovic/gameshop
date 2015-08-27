<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('categories')->delete();
        
		\DB::table('categories')->insert(array (
			0 => 
			array (
				'id' => 15,
				'parent_id' => NULL,
				'lft' => 1,
				'rgt' => 6,
				'depth' => 0,
				'name' => 'PlayStation 4',
				'slug' => 'playstation-4',
				'created_at' => '2015-06-13 16:39:27',
				'updated_at' => '2015-06-14 15:00:36',
			),
			1 => 
			array (
				'id' => 16,
				'parent_id' => NULL,
				'lft' => 7,
				'rgt' => 10,
				'depth' => 0,
				'name' => 'Xbox One',
				'slug' => 'xbox-one',
				'created_at' => '2015-06-13 16:40:50',
				'updated_at' => '2015-06-14 15:00:36',
			),
			2 => 
			array (
				'id' => 17,
				'parent_id' => NULL,
				'lft' => 11,
				'rgt' => 14,
				'depth' => 0,
				'name' => 'Wii U',
				'slug' => 'wii-u',
				'created_at' => '2015-06-13 16:43:00',
				'updated_at' => '2015-06-14 15:00:36',
			),
			3 => 
			array (
				'id' => 18,
				'parent_id' => NULL,
				'lft' => 15,
				'rgt' => 16,
				'depth' => 0,
				'name' => 'Wii',
				'slug' => 'wii',
				'created_at' => '2015-06-13 16:44:16',
				'updated_at' => '2015-06-14 15:00:36',
			),
			4 => 
			array (
				'id' => 19,
				'parent_id' => NULL,
				'lft' => 19,
				'rgt' => 20,
				'depth' => 0,
				'name' => 'PC',
				'slug' => 'pc',
				'created_at' => '2015-06-13 16:45:26',
				'updated_at' => '2015-06-14 15:00:36',
			),
			5 => 
			array (
				'id' => 20,
				'parent_id' => NULL,
				'lft' => 17,
				'rgt' => 18,
				'depth' => 0,
				'name' => 'PlayStation 3',
				'slug' => 'playstation-3',
				'created_at' => '2015-06-13 16:46:28',
				'updated_at' => '2015-06-14 15:00:36',
			),
			6 => 
			array (
				'id' => 23,
				'parent_id' => 15,
				'lft' => 2,
				'rgt' => 3,
				'depth' => 1,
				'name' => 'Games',
				'slug' => 'ps4-games',
				'created_at' => '2015-06-13 17:01:16',
				'updated_at' => '2015-06-13 17:01:52',
			),
			7 => 
			array (
				'id' => 25,
				'parent_id' => 16,
				'lft' => 8,
				'rgt' => 9,
				'depth' => 1,
				'name' => 'Games',
				'slug' => 'xbox-one-games',
				'created_at' => '2015-06-13 17:02:20',
				'updated_at' => '2015-06-14 15:00:36',
			),
			8 => 
			array (
				'id' => 26,
				'parent_id' => 17,
				'lft' => 12,
				'rgt' => 13,
				'depth' => 1,
				'name' => 'Games',
				'slug' => 'wii-u-games',
				'created_at' => '2015-06-13 17:02:33',
				'updated_at' => '2015-06-14 15:00:36',
			),
			9 => 
			array (
				'id' => 27,
				'parent_id' => 15,
				'lft' => 4,
				'rgt' => 5,
				'depth' => 1,
				'name' => 'Consoles',
				'slug' => 'ps4-consoles',
				'created_at' => '2015-06-13 21:52:12',
				'updated_at' => '2015-06-14 15:00:36',
			),
		));
	}

}

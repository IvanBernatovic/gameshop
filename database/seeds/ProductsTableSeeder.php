<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('products')->delete();
        
		\DB::table('products')->insert(array (
			0 => 
			array (
				'id' => 11,
				'active' => 1,
				'new' => 0,
				'name' => 'Driveclub',
				'category_id' => 23,
				'description' => 'Brand new racing game from Evolution Studios, PlayStation 4 exclusive',
				'price' => '39.99',
				'image' => 'img/ps4-driveclub.jpg',
				'image_thumb' => 'img/thumbs/ps4-driveclub.jpg',
				'slug' => 'driveclub',
				'discounted_price' => '29.99',
				'sku' => 'ps4-driveclub',
				'quantity' => 18,
				'weight' => '0.20',
				'created_at' => '2015-06-09 09:58:11',
				'updated_at' => '2015-06-18 15:03:13',
			),
			1 => 
			array (
				'id' => 12,
				'active' => 1,
				'new' => 1,
				'name' => 'Ryse: Son of Rome',
				'category_id' => 25,
				'description' => 'Adrenaline driven action game from Crytek',
				'price' => '44.99',
				'image' => 'img/ryse-son-of-rome.jpg',
				'image_thumb' => 'img/thumbs/ryse-son-of-rome.jpg',
				'slug' => 'ryse-son-of-rome',
				'discounted_price' => NULL,
				'sku' => 'ryse-son-of-rome',
				'quantity' => 8,
				'weight' => '0.20',
				'created_at' => '2015-06-09 14:35:53',
				'updated_at' => '2015-06-28 23:38:16',
			),
			2 => 
			array (
				'id' => 13,
				'active' => 1,
				'new' => 0,
				'name' => 'PlayStation 4 500GB Black',
				'category_id' => 27,
				'description' => 'PlayStation 4 console with 500GB HDD, Dualshock 4 controller, HDMI cable and power adapter.',
				'price' => '449.99',
				'image' => 'img/playstation-4-500-black.png',
				'image_thumb' => 'img/thumbs/playstation-4-500-black.png',
				'slug' => 'playstation-4-500-black',
				'discounted_price' => NULL,
				'sku' => 'playstation-4-500-black',
				'quantity' => 18,
				'weight' => '5.40',
				'created_at' => '2015-06-09 17:45:57',
				'updated_at' => '2015-06-14 15:01:16',
			),
			3 => 
			array (
				'id' => 14,
				'active' => 1,
				'new' => 0,
				'name' => 'ZombiU',
				'category_id' => 26,
				'description' => 'Exciting zombie survival game from Ubisoft',
				'price' => '39.99',
				'image' => 'img/zombi-u.jpg',
				'image_thumb' => 'img/thumbs/zombi-u.jpg',
				'slug' => 'zombi-u',
				'discounted_price' => NULL,
				'sku' => 'zombi-u',
				'quantity' => 5,
				'weight' => '0.20',
				'created_at' => '2015-06-12 08:39:27',
				'updated_at' => '2015-06-14 14:47:06',
			),
			4 => 
			array (
				'id' => 15,
				'active' => 1,
				'new' => 1,
				'name' => 'The Last Of Us Remastered',
				'category_id' => 23,
				'description' => 'Top selling PS3 game from Naughty Dog in new groove, in 1080p@60fps',
				'price' => '44.99',
				'image' => 'img/the-last-of-us-remaster.jpg',
				'image_thumb' => 'img/thumbs/the-last-of-us-remaster.jpg',
				'slug' => 'the-last-of-us-remaster',
				'discounted_price' => NULL,
				'sku' => 'the-last-of-us-remaster',
				'quantity' => 13,
				'weight' => '0.20',
				'created_at' => '2015-06-12 11:20:18',
				'updated_at' => '2015-06-14 14:58:26',
			),
			5 => 
			array (
				'id' => 16,
				'active' => 1,
				'new' => 0,
				'name' => 'God Of War III Remastered',
				'category_id' => 23,
				'description' => 'Epic epic epic action adventure set in ancient Greece',
				'price' => '59.99',
				'image' => 'img/god-of-war-3-remaster.jpg',
				'image_thumb' => 'img/thumbs/god-of-war-3-remaster.jpg',
				'slug' => 'god-of-war-3-remaster',
				'discounted_price' => NULL,
				'sku' => 'god-of-war-3-remaster',
				'quantity' => 15,
				'weight' => '0.20',
				'created_at' => '2015-06-14 15:16:32',
				'updated_at' => '2015-06-14 15:16:32',
			),
			6 => 
			array (
				'id' => 17,
				'active' => 1,
				'new' => 1,
				'name' => 'FIFA 15',
				'category_id' => 23,
				'description' => 'Top selling football game',
				'price' => '44.99',
				'image' => 'img/fifa-15-ps4.jpg',
				'image_thumb' => 'img/thumbs/fifa-15-ps4.jpg',
				'slug' => 'fifa-15-ps4',
				'discounted_price' => NULL,
				'sku' => 'fifa-15-ps4',
				'quantity' => 16,
				'weight' => '0.20',
				'created_at' => '2015-06-14 15:20:21',
				'updated_at' => '2015-06-14 15:20:21',
			),
			7 => 
			array (
				'id' => 18,
				'active' => 1,
				'new' => 0,
				'name' => 'Pro Evolution Soccer 2015',
				'category_id' => 23,
				'description' => 'Football game from KONAMI',
				'price' => '39.99',
				'image' => 'img/ps4-pes-2015.jpg',
				'image_thumb' => 'img/thumbs/ps4-pes-2015.jpg',
				'slug' => 'ps4-pes-2015',
				'discounted_price' => '29.99',
				'sku' => 'ps4-pes-2015',
				'quantity' => 18,
				'weight' => '0.20',
				'created_at' => '2015-06-14 15:21:18',
				'updated_at' => '2015-06-28 23:37:43',
			),
		));
	}

}

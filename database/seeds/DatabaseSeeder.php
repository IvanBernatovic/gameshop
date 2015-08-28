<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		// $this->call('UserTableSeeder');
		//Seed the countries
		$this->call('CountriesSeeder');
		$this->command->info('Seeded the countries!');

		// Seed the states
		$this->call('StatesSeeder');	
		$this->command->info('Seeded the states!');
		$this->call('MigrationsTableSeeder');
		$this->call('UsersTableSeeder');
		$this->call('CountriesTableSeeder');
		$this->call('StatesTableSeeder');
		$this->call('CategoriesTableSeeder');
		$this->call('AddressesTableSeeder');
		$this->call('ProductsTableSeeder');
		$this->call('StatusCodesTableSeeder');
		$this->call('PaymentMethodsTableSeeder');
		$this->call('OrdersTableSeeder');
		$this->call('OrderProductTableSeeder');
	}

}

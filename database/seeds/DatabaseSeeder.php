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

		// Seed the states
		$this->call('StatesSeeder');	
		$this->call('RolesTableSeeder');
		$this->call('StatusCodesTableSeeder');
		$this->call('PaymentMethodsTableSeeder');
	}

}

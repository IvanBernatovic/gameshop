<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('states')->delete();
        
		\DB::table('states')->insert(array (
			0 => 
			array (
				'id' => 1,
				'iso_3166_2' => 'AL',
				'name' => 'Alabama',
			),
			1 => 
			array (
				'id' => 2,
				'iso_3166_2' => 'AK',
				'name' => 'Alaska',
			),
			2 => 
			array (
				'id' => 3,
				'iso_3166_2' => 'AS',
				'name' => 'American Samoa',
			),
			3 => 
			array (
				'id' => 4,
				'iso_3166_2' => 'AZ',
				'name' => 'Arizona',
			),
			4 => 
			array (
				'id' => 5,
				'iso_3166_2' => 'AR',
				'name' => 'Arkansas',
			),
			5 => 
			array (
				'id' => 6,
				'iso_3166_2' => 'CA',
				'name' => 'California',
			),
			6 => 
			array (
				'id' => 7,
				'iso_3166_2' => 'CO',
				'name' => 'Colorado',
			),
			7 => 
			array (
				'id' => 8,
				'iso_3166_2' => 'CT',
				'name' => 'Connecticut',
			),
			8 => 
			array (
				'id' => 9,
				'iso_3166_2' => 'DE',
				'name' => 'Delaware',
			),
			9 => 
			array (
				'id' => 10,
				'iso_3166_2' => 'DC',
				'name' => 'District of Columbia',
			),
			10 => 
			array (
				'id' => 11,
				'iso_3166_2' => 'FM',
				'name' => 'Federated States of Micronesia',
			),
			11 => 
			array (
				'id' => 12,
				'iso_3166_2' => 'FL',
				'name' => 'Florida',
			),
			12 => 
			array (
				'id' => 13,
				'iso_3166_2' => 'GA',
				'name' => 'Georgia',
			),
			13 => 
			array (
				'id' => 14,
				'iso_3166_2' => 'GU',
				'name' => 'Guam',
			),
			14 => 
			array (
				'id' => 15,
				'iso_3166_2' => 'HI',
				'name' => 'Hawaii',
			),
			15 => 
			array (
				'id' => 16,
				'iso_3166_2' => 'ID',
				'name' => 'Idaho',
			),
			16 => 
			array (
				'id' => 17,
				'iso_3166_2' => 'IL',
				'name' => 'Illinois',
			),
			17 => 
			array (
				'id' => 18,
				'iso_3166_2' => 'IN',
				'name' => 'Indiana',
			),
			18 => 
			array (
				'id' => 19,
				'iso_3166_2' => 'IA',
				'name' => 'Iowa',
			),
			19 => 
			array (
				'id' => 20,
				'iso_3166_2' => 'KS',
				'name' => 'Kansas',
			),
			20 => 
			array (
				'id' => 21,
				'iso_3166_2' => 'KY',
				'name' => 'Kentucky',
			),
			21 => 
			array (
				'id' => 22,
				'iso_3166_2' => 'LA',
				'name' => 'Louisiana',
			),
			22 => 
			array (
				'id' => 23,
				'iso_3166_2' => 'ME',
				'name' => 'Maine',
			),
			23 => 
			array (
				'id' => 24,
				'iso_3166_2' => 'MH',
				'name' => 'Marshall Islands',
			),
			24 => 
			array (
				'id' => 25,
				'iso_3166_2' => 'MD',
				'name' => 'Maryland',
			),
			25 => 
			array (
				'id' => 26,
				'iso_3166_2' => 'MA',
				'name' => 'Massachusetts',
			),
			26 => 
			array (
				'id' => 27,
				'iso_3166_2' => 'MI',
				'name' => 'Michigan',
			),
			27 => 
			array (
				'id' => 28,
				'iso_3166_2' => 'MN',
				'name' => 'Minnesota',
			),
			28 => 
			array (
				'id' => 29,
				'iso_3166_2' => 'MS',
				'name' => 'Mississippi',
			),
			29 => 
			array (
				'id' => 30,
				'iso_3166_2' => 'MO',
				'name' => 'Missouri',
			),
			30 => 
			array (
				'id' => 31,
				'iso_3166_2' => 'MT',
				'name' => 'Montana',
			),
			31 => 
			array (
				'id' => 32,
				'iso_3166_2' => 'NE',
				'name' => 'Nebraska',
			),
			32 => 
			array (
				'id' => 33,
				'iso_3166_2' => 'NV',
				'name' => 'Nevada',
			),
			33 => 
			array (
				'id' => 34,
				'iso_3166_2' => 'NH',
				'name' => 'New Hampshire',
			),
			34 => 
			array (
				'id' => 35,
				'iso_3166_2' => 'NJ',
				'name' => 'New Jersey',
			),
			35 => 
			array (
				'id' => 36,
				'iso_3166_2' => 'NM',
				'name' => 'New Mexico',
			),
			36 => 
			array (
				'id' => 37,
				'iso_3166_2' => 'NY',
				'name' => 'New York',
			),
			37 => 
			array (
				'id' => 38,
				'iso_3166_2' => 'NC',
				'name' => 'North Carolina',
			),
			38 => 
			array (
				'id' => 39,
				'iso_3166_2' => 'ND',
				'name' => 'North Dakota',
			),
			39 => 
			array (
				'id' => 40,
				'iso_3166_2' => 'MP',
				'name' => 'Northern Mariana Islands',
			),
			40 => 
			array (
				'id' => 41,
				'iso_3166_2' => 'OH',
				'name' => 'Ohio',
			),
			41 => 
			array (
				'id' => 42,
				'iso_3166_2' => 'OK',
				'name' => 'Oklahoma',
			),
			42 => 
			array (
				'id' => 43,
				'iso_3166_2' => 'OR',
				'name' => 'Oregon',
			),
			43 => 
			array (
				'id' => 44,
				'iso_3166_2' => 'PW',
				'name' => 'Palau',
			),
			44 => 
			array (
				'id' => 45,
				'iso_3166_2' => 'PA',
				'name' => 'Pennsylvania',
			),
			45 => 
			array (
				'id' => 46,
				'iso_3166_2' => 'PR',
				'name' => 'Puerto Rico',
			),
			46 => 
			array (
				'id' => 47,
				'iso_3166_2' => 'RI',
				'name' => 'Rhode Island',
			),
			47 => 
			array (
				'id' => 48,
				'iso_3166_2' => 'SC',
				'name' => 'South Carolina',
			),
			48 => 
			array (
				'id' => 49,
				'iso_3166_2' => 'SD',
				'name' => 'South Dakota',
			),
			49 => 
			array (
				'id' => 50,
				'iso_3166_2' => 'TN',
				'name' => 'Tennessee',
			),
			50 => 
			array (
				'id' => 51,
				'iso_3166_2' => 'TX',
				'name' => 'Texas',
			),
			51 => 
			array (
				'id' => 52,
				'iso_3166_2' => 'UT',
				'name' => 'Utah',
			),
			52 => 
			array (
				'id' => 53,
				'iso_3166_2' => 'VT',
				'name' => 'Vermont',
			),
			53 => 
			array (
				'id' => 54,
				'iso_3166_2' => 'VI',
				'name' => 'Virgin Islands',
			),
			54 => 
			array (
				'id' => 55,
				'iso_3166_2' => 'VA',
				'name' => 'Virginia',
			),
			55 => 
			array (
				'id' => 56,
				'iso_3166_2' => 'WA',
				'name' => 'Washington',
			),
			56 => 
			array (
				'id' => 57,
				'iso_3166_2' => 'WV',
				'name' => 'West Virginia',
			),
			57 => 
			array (
				'id' => 58,
				'iso_3166_2' => 'WI',
				'name' => 'Wisconsin',
			),
			58 => 
			array (
				'id' => 59,
				'iso_3166_2' => 'WY',
				'name' => 'Wyoming',
			),
			59 => 
			array (
				'id' => 60,
				'iso_3166_2' => 'AE',
				'name' => 'Armed Forces Europe, the Middle East, and Canada',
			),
			60 => 
			array (
				'id' => 61,
				'iso_3166_2' => 'AP',
				'name' => 'Armed Forces Pacific',
			),
			61 => 
			array (
				'id' => 62,
				'iso_3166_2' => 'AA',
			'name' => 'Armed Forces Americas (except Canada)',
			),
		));
	}

}

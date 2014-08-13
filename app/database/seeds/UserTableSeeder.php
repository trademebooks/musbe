<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		User::create([
			'email' => 'yichen@yichen.com',
			'password' => Hash::make('yichen'),
			'activated' => 1
		]);

		foreach(range(1, 30) as $index)
		{
			User::create([
				'email' => $faker->email,
				'password' => $faker->word,
				'activated' => rand(0 , 1)
			]);
		}
	}

}
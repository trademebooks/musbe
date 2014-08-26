<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		User::create([
			'email' => 'yichen@yichen.com',
            'username' => 'yichen',
			'password' => Hash::make('yichen'),
			'activated' => 1
		]);

		foreach(range(1, 100) as $index)
		{
			User::create([
				'email' => $faker->email,
                'username' => $faker->username,
				'password' => Hash::make($faker->word),
				'activated' => rand(0 , 1)
			]);
		}
	}

}
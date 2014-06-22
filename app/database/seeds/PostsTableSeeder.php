<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index)
		{
			Post::create([
				'title' => $faker->sentence(5),
				'location' => $faker->sentence(4),
				'description' => $faker->paragraph(3),
				'level' => $faker->randomDigit() ,
				'owner' => $faker->name()
			]);
		}
	}

}
<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ClickersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 30) as $index)
		{
			Clicker::create([
                'user_id' => rand(1, 30),
                'title' => $faker->title,
                'description' => $faker->paragraph(rand(1, 5)),
                'price' => rand(0, 100)
			]);
		}
	}

}
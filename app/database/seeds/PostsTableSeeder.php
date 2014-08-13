<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$course_code = ['CSCA08', 'CSCA48', 'CSCA67', 'CSCB07', 'CSCB09','CSCB36','CSCB63','CSCB58', 'CSCC01', 'CSCD01'];

		foreach(range(1, 30) as $index)
		{
			Post::create([
				'user_id' => rand(0, 30),
				'book_name' => $faker->sentence(rand(1,5)),
				'auth_name' => $faker->name(),
				'course_code' => $course_code[rand(0, 9)],
				'edition' => rand(0, 20),
				'solutions' => $faker->boolean(50),
				'image' => $faker->imageUrl(rand(50, 500), rand(50, 500)),
				'comments' => $faker->paragraph(rand(1, 3)),
				'price' => rand(0, 200),
			]);
		}
	}

}
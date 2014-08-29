<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;


class BooksTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
		$course_code = ['CSCA08', 'CSCA48', 'CSCA67', 'CSCB07', 'CSCB09','CSCB36','CSCB63','CSCB58', 'CSCC01', 'CSCD01'];
        $course_name = [
            'Programming 1',
            'Programming 2',
            'Programming 3',
            'Programming 4',
            'Programming 5',
            'Programming 6',
            'Programming 7',
            'Programming 8',
            'Programming 9',
            'Programming 10'
        ];

        $course_code_prefixes = CourseCode::all()->toArray();
		foreach(range(1, 500) as $index)
		{
			Book::create([
				'user_id' => rand(1, 100),
				'title' => $faker->sentence(rand(1, 5)),
				'author' => $faker->name(),
				'course_code_prefix' => $course_code_prefixes[rand(0, 90)]['course_code'],
                'course_code_suffix' => $course_code[rand(0, 9)],
                'course_name' => $course_name[rand(0, 9)],
				'edition' => rand(0, 20),
                'description' => $faker->paragraph(1, 3),
				'image' => $faker->imageUrl(rand(200, 500), rand(200, 500)),
				'price' => rand(0, 200),
                'email' => $faker->email,
                'phone_number' => $faker->phoneNumber
            ]);
		}
	}

}
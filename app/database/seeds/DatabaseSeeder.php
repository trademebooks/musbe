<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		User::truncate();
		Book::truncate();
        Clicker::truncate();
		Profile::truncate();

		Eloquent::unguard();

        $this->call('CourseCodeTableSeeder');
		//$this->call('UserTableSeeder');
		//$this->call('BooksTableSeeder');
        //$this->call('ClickersTableSeeder');
		//$this->call('ProfilesTableSeeder');

	}

}

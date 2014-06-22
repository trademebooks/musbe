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
		Post::truncate();

		Eloquent::unguard();

		//$this->call('UserTableSeeder');
		$this->call('PostsTableSeeder');
	}

}

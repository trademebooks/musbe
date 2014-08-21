<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBooksTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('books', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->string('title');
			$table->string('author');
			$table->string('course_code');
            $table->string('course_name');
			$table->string('edition');
            $table->text('description');
			$table->string('image')->default('http://pngimg.com/upload/book_PNG2116.png');
			$table->string('price');
            $table->string('email');
            $table->string('phone_number');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('books');
	}

}

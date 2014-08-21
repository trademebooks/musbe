<?php namespace Acme\Repositories;

use Acme\Repositories\BookRepositoryInterface;
use Book;


class DbBookRepository implements BookRepositoryInterface{

	public function getAll()
	{
		return Book::all();
	}

	public function getById($id)
	{
		return Book::find($id);
	}

}
<?php namespace Acme\Repositories;

use Post;


class DbPostRepository implements PostRepositoryInterface{

	public function getAll()
	{
		return Post::all();
	}

	public function getById($id)
	{
		return Post::find($id);
	}

}
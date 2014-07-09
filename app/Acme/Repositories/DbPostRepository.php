<?php

namespace Acme\Repositories;

class DbPostRepository implements PostRepositoryInterface{

	public function __construct() {
		dd('new db post repo');
	}

	public function getAll()
	{
		return 'get all from the mysqldb';
	}
}
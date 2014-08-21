<?php namespace Acme\Repositories;

interface BookRepositoryInterface {

	public function getAll();

	public function getById($id);

}
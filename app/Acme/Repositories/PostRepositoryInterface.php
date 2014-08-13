<?php namespace Acme\Repositories;


interface PostRepositoryInterface {

	public function getAll();

	public function getById($id);

}
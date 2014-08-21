<?php

use Acme\Repositories\BookRepositoryInterface;


class PagesController extends BaseController {

    protected $book;

    function __construct(BookRepositoryInterface $book)
    {
        $this->book = $book;
    }

	public function home()
	{
        $books = $this->book->getAll();

		return View::make('pages.home')->with('books', $books);
	}

	public function about()
	{
		return View::make('pages.about');
	}

	public function contact()
	{
		return View::make('pages.contact');
	}

    public function addPost()
    {
        return View::make('pages.add_post');
    }

}

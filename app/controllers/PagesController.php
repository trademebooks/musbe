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
        $query = Request::get('q');

        if($query)
        {
            $books = Book::where('title', 'LIKE', "%$query%")->paginate(16);
        }
        else
        {
            $books = Book::paginate(16);
        }

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

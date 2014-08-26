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
            $books = Book::where('title', 'LIKE', "%$query%")->orderBy('created_at', 'DESC')->paginate(17);
        }
        else
        {
            $books = Book::orderBy('created_at', 'DESC')->paginate(17);
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

    public function registrationComplete()
    {
        return View::make('pages.registration_complete');
    }
}

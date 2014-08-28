<?php 

use Acme\Repositories\BookRepositoryInterface;
use Acme\Forms\SellBookForm;

class BooksController extends \BaseController {

    /**
     * @var book
     */
    protected $book;

    /**
     * @param BookRepositoryInterface $book, SellBookForm $sellBookForm
     */
    public function __construct(BookRepositoryInterface $book, SellBookForm $sellBookForm)
	{
		$this->book = $book;
        $this->sellBookForm = $sellBookForm;
	}

	/**
	 * Display a listing of all the books
	 *
	 * @return Response
	 */
	public function index()
	{
		$books = Book::where('user_id' , '=', Sentry::getUser()->id)->get();
		return View::make('books.index', compact('books'));
	}

    /**
     * Display the specified post.
     *
     * @param  int  $id
     * @return Response
     */

    public function show($id)
    {
        $book = Book::findOrFail($id);

        return View::make('books.show', compact('post'));
    }
	/**
	 * Show the form for creating a new book
	 *
	 * @return Response
	 */
	public function create()
	{
        $course_codes = CourseCode::all();
		return View::make('books.create')->with('course_codes', $course_codes);
	}

    /**
     * Show the form for editing the specified post.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $book = Book::find($id);

        return View::make('books.edit', compact('book'));
    }

	/**
	 * Store a newly created book in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $title = Input::get('title');
        $author = Input::get('author');
        $course_name = Input::get('course_name');
        $course_code = Input::get('course_code');
        $description = Input::get('description');

        $image = (Input::get('image') == null) ? asset('custom_files/images/textbook_icon_textless.png') : Input::get('image');
        $edition = (Input::get('edition') == null) ? "None" : Input::get('edition');
        $price = (Input::get('price') == null) ? "Please Contact" : Input::get('price');

        $email = Input::get('email');
        $phone_number = Input::get('phone_number');

        $input = [
            'user_id' => Sentry::getUser()->id,
            'title' => $title,
            'author' => $author,
            'course_code' => $course_code,
            'course_name' => $course_name,
            'edition' => $edition,
            'description' => $description,
            'image' => $image,
            'price' => $price,
            'email' => $email,
            'phone_number' => $phone_number
        ];

        try
        {
            $this->sellBookForm->validate($input);

            Book::create($input);

            return Redirect::route('books.index');
        }
        catch (FormValidationException $e)
        {
            return Redirect::back()->withInput()->withErrors($e->getErrors());
        }

	}

	/**
	 * Update the specified post in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$book = Book::findOrFail($id);

		$data = Input::all();

		$book->update($data);

		return Redirect::route('books.index');
	}

	/**
	 * Remove the specified post from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Book::destroy($id);

		return Redirect::route('books.index');
	}

}

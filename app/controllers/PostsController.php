<?php 

use Acme\Repositories\PostRepositoryInterface;

class PostsController extends \BaseController {

	protected $post;

	public function __construct(PostRepositoryInterface $post) 
	{
		$this->post = $post;
	}

	/**
	 * Display a listing of posts
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = $this->post->getAll();
		return View::make('posts.index', compact('posts'));
	}

	/**
	 * Show the form for creating a new post
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}

	/**
	 * Store a newly created post in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Post::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}
		/*
		Post::create($data);

		$post = new Post();

		$post->something = Input::get('something');

		if (Input::hasFile('thumbnail')) {

			$file = Input::file('thumbnail');
			
			return [
				'path' => $file->getRealPath(),
				'size' => $file->getSize(),
				'mime' => $file->getMimeType(),
				'name' => $file->getClientOriginalName(),
				'extension'=> $file->getClientOriginalExtension() 
			];
			
			$file->move(public_path() . '/uploaded_images/', time() . '-' . $file->getClientOriginalName());
			$post->thumbnail = $file->getRealPath();

		}

		$post->save();
		*/
		
		return Redirect::route('posts.index');
	}

	/**
	 * Display the specified post.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::findOrFail($id);

		return View::make('posts.show', compact('post'));
	}

	/**
	 * Show the form for editing the specified post.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);

		return View::make('posts.edit', compact('post'));
	}

	/**
	 * Update the specified post in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Post::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$post->update($data);

		return Redirect::route('posts.index');
	}

	/**
	 * Remove the specified post from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Post::destroy($id);

		return Redirect::route('posts.index');
	}

}
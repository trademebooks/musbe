<?php

use Acme\Repositories\PostRepositoryInterface;


class PagesController extends BaseController {

	/**
	 * Manages all the static and most commonly used pages.
	 *
	 * @var view
	 */
	protected $post;

	/**
	 * Manages all the static and most commonly used pages.
	 *
	 * @return view
	 */
	function __construct(PostRepositoryInterface $post)
	{
		$this->post = $post;
	}

	/**
	 * Manages all the static and most commonly used pages.
	 *
	 * @return view
	 */
	public function home()
	{
		$posts = $this->post->getById(1);
		return View::make('pages.home')->with('posts', $posts);
	}

	/**
	 * Manages all the static and most commonly used pages.
	 *
	 * @return view
	 */
	public function about()
	{
		return View::make('pages.about');
	}

	/**
	 * Manages all the static and most commonly used pages.
	 *
	 * @return view
	 */
	public function contact()
	{
		return View::make('pages.contact');
	}
	
}

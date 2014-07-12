<?php

use Acme\Forms\ProfileForm;
use Illuminate\Database\Eloquent\ModelNotFoundException;


class ProfilesController extends \BaseController {

	protected $profileForm;

	public function __construct(ProfileForm $profileForm)
	{
		$this->profileForm = $profileForm;
		//$this->beforeFilter('currentUser', ['only' => ['edit' , 'update']]);
	}

	/**
	 * Display a listing of profiles
	 *
	 * @return Response
	 */
	public function index()
	{
		$profiles = Profile::all();

		return View::make('profiles.index', compact('profiles'));
	}

	/**
	 * Show the form for creating a new profile
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('profiles.create');
	}

	/**
	 * Store a newly created profile in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Profile::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Profile::create($data);

		return Redirect::route('profiles.index');
	}

	/**
	 * Display the specified profile.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($username)
	{

		$user = User::with('profile'/*, comments*/)->whereUsername($username)->firstOrFail();  //->get()
		//dd($user->toArray());
		return View::make('profiles.show', compact('user'));
	}

	/**
	 * Show the form for editing the specified profile.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($username)
	{
		$user = User::whereUsername($username)->firstOrFail();  //->get()

		return View::make('profiles.edit', compact('user'));
	}

	/**
	 * Update the specified profile in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($username)
	{
		$user = User::whereUsername($username)->firstOrFail();

		$data = Input::all();

		$this->profileForm->validate($data);

		$user->profile->update($data);

		return Redirect::route('profile.edit', $user->username);
	}

	/**
	 * Remove the specified profile from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Profile::destroy($id);

		return Redirect::route('profiles.index');
	}

}

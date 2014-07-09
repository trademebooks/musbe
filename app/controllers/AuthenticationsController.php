<?php

class AuthenticationsController extends \BaseController {

	/**
	 * Display a listing of authentications
	 *
	 * @return Response
	 */
	public function index()
	{
		$authentications = Authentication::all();

		return View::make('authentications.index', compact('authentications'));
	}

	/**
	 * Show the form for creating a new authentication
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('authentications.create');
	}

	/**
	 * Store a newly created authentication in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Authentication::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Authentication::create($data);

		return Redirect::route('authentications.index');
	}

	/**
	 * Display the specified authentication.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$authentication = Authentication::findOrFail($id);

		return View::make('authentications.show', compact('authentication'));
	}

	/**
	 * Show the form for editing the specified authentication.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$authentication = Authentication::find($id);

		return View::make('authentications.edit', compact('authentication'));
	}

	/**
	 * Update the specified authentication in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$authentication = Authentication::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Authentication::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$authentication->update($data);

		return Redirect::route('authentications.index');
	}

	/**
	 * Remove the specified authentication from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Authentication::destroy($id);

		return Redirect::route('authentications.index');
	}

		/**
	 * Remove the specified authentication from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function testing($id)
	{
		Authentication::destroy($id);

		return Redirect::route('authentications.index');
	}

}

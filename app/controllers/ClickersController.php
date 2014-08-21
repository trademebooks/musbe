<?php

class ClickersController extends \BaseController {

	/**
	 * Display a listing of clickers
	 *
	 * @return Response
	 */
	public function index()
	{
		$clickers = Clicker::all();

		return View::make('clickers.index', compact('clickers'));
	}

	/**
	 * Show the form for creating a new clicker
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('clickers.create');
	}

	/**
	 * Store a newly created clicker in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Clicker::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Clicker::create($data);

		return Redirect::route('clickers.index');
	}

	/**
	 * Display the specified clicker.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$clicker = Clicker::findOrFail($id);

		return View::make('clickers.show', compact('clicker'));
	}

	/**
	 * Show the form for editing the specified clicker.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$clicker = Clicker::find($id);

		return View::make('clickers.edit', compact('clicker'));
	}

	/**
	 * Update the specified clicker in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$clicker = Clicker::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Clicker::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$clicker->update($data);

		return Redirect::route('clickers.index');
	}

	/**
	 * Remove the specified clicker from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Clicker::destroy($id);

		return Redirect::route('clickers.index');
	}

}

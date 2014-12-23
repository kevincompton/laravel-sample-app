<?php

class UserController extends BaseController {

	public function index()
	{
		$users = User::getUsers();

		return View::make('users.index', array('users' => $users));
	}

	public function show($id)
	{
		$user = User::getUser($id);
		$items = Item::getUserItems($id);

		return View::make('users.show', array('items' => $items, 'user' => $user));
	}

	public function create()
	{
		
	}

	public function store()
	{
		
	}

	public function edit($id)
	{
		
	}

	public function update()
	{
		

	}

	public function destroy($id)
	{
		DB::table('users')->where('id', '=', $id)->delete();
		return Redirect::action('UserController@index');
	}

}

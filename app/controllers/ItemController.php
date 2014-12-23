<?php

class ItemController extends BaseController {

	public function index()
	{
		$items = Item::getItems();

		return View::make('items.index', array('items' => $items));
	}

	public function show($id)
	{
		$item = Item::getItem($id);
		$user = User::getUser($item->user_id);

		return View::make('items.show', array('item' => $item, 'user' => $user));
	}

	public function create()
	{
		$users = User::getUsers();

		return View::make('items.create', array('users' => $users));
	}

	public function store()
	{
		$name = Input::get('name');
		$color = Input::get('color');
		$condition = Input::get('condition');
		$price = Input::get('price');
		$owner = Input::get('owner');

		$validator = Validator::make(
		    array(
		        'name' => $name,
		        'color' => $color,
		        'condition' => $condition,
		        'price' => $price,
		        'owner' => $owner
		    ),
		    array(
		        'name' => 'required',
		        'color' => 'required',
		        'condition' => 'required',
		        'price' => 'required | numeric',
		        'owner' => 'required'
		    )
		);
		if ($validator->fails())
		{
    		return Redirect::to('items/create')->withErrors($validator);
		}

		DB::table('items')->insert(
    		array('name' => $name, 'color' => $color, 'condition' => $condition, 'price' => $price, 'user_id' => $owner)
		);

		return Redirect::action('ItemController@index');
	}

	public function edit($id)
	{
		
	}

	public function update()
	{
		

	}

	public function destroy($id)
	{
		DB::table('items')->where('id', '=', $id)->delete();
		return Redirect::action('ItemController@index');
	}

}

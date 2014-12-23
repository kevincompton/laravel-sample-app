<?php


class Item {

	public static function getItems(){
        $items = DB::table('items')->get();
        return $items;
    }

    public static function getUserItems($userID) {
    	$items = DB::table('items')->where('user_id', '=', $userID)->get();
    	return $items;
    }

    public static function getItem($id) {
    	$item = DB::table('items')
    		->where('id','=',$id)
            ->first();

        return $item;
    }

}

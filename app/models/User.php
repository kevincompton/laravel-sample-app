<?php

class User {

	public static function getUsers(){
        $users = DB::table('users')->get();
    	return $users;
    }

    public static function getUser($id) {
    	$user = DB::table('users')
            ->where('id','=',$id)
            ->first();

        return $user;
    }



}

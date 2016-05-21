<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UsersController extends Controller
{
	/**
	* Register a user.
	*
	*@fires App\Events\UserRegistered
	**/
    public function store()
    {

    	User::register([
    		'name' => 'Hai',
    		'email' => 'huynh2hai@example.com',
    		'password' => bcrypt('password')
    	]);
    }
}

<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class UserProfileController extends Controller {

	public static function index(){
		return view ('user.userProfile');
	}

}

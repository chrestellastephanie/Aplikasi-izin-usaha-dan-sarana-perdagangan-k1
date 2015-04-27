<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class SiteController extends Controller {

	public function indexAdminView(){
		return view('index-admin');
	}
	public function showBerkasIUTM($id){
		return view ('debug',compact('id'));
	}

}

<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\database;


use Illuminate\Http\Request;

class UserProfileController extends Controller {

	public static function index($id){
		$izinIUTM = database::getIzinIUTMbyId($id);
		$izinSTPW = database::getIzinSTPWbyId($id);
		$izinITPMB = database::getIzinITPMBbyId($id);
		$noKTP = database::getKTPID($id);
		foreach($noKTP as $ktp){
			$noNPWP = database::getNPWP(var_dump($ktp->id));
		}
		return view ('user.userProfile', compact('izinITPMB','izinIUTM','izinSTPW','noKTP','noNPWP'));
	}

}

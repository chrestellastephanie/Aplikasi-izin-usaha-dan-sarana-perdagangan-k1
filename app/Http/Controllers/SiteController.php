<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\database;


use Illuminate\Http\Request;

class SiteController extends Controller {
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function indexAdminView(){
		return view('index-admin');
	}
	public function showBerkasIUTM($id){
		$iutm = database::getPermohonanIUTMbyId($id);
		return view ('berkas-iutm',compact('iutm'));
	}
	public function showBerkasSTPW($id){
		$stpw = database::getPermohonanSTPWbyId($id);
		return view ('berkas-stpw',compact('stpw'));
	}
	public function showBerkasITPMB($id){
		$itpmb = database::getPermohonanITPMBbyId($id);
		return view ('berkas-itpmb',compact('itpmb'));
	}
	public function showIzinIUTM($id){
		$iutm = database::getPermohonanIUTMbyId($id);

		$pdf = \PDF::loadView('surat-izin-iutm',compact('iutm'));
        return $pdf->stream("tes.pdf"); //kasih nama sesuai no izinnya -> ntar diganti sama save pdf nya aja
		// return view ('surat-izin-iutm',compact('iutm'));
	}
}

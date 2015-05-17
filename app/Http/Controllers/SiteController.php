<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\database;
use Input;

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
		foreach ($iutm as $izin){
			$idpemilik = $izin->direkturPerusahaan;
		}
		$noktp=database::getKTPID($idpemilik);
		foreach($noktp as $ktp){
			$noNPWP = database::getNPWP($ktp->nik);
		}
		return view ('berkas-iutm',compact('iutm','noNPWP'));
	}
	public function showBerkasSTPW($id){
		$stpw = database::getPermohonanSTPWbyId($id);
		foreach ($stpw as $izin){
			$idpemilik = $izin->direkturPerusahaan;
		}
		$noktp=database::getKTPID($idpemilik);
		foreach($noktp as $ktp){
			$noNPWP = database::getNPWP($ktp->nik);
		}
		return view ('berkas-stpw',compact('stpw','noNPWP'));
	}
	public function showBerkasITPMB($id){
		$itpmb = database::getPermohonanITPMBbyId($id);
		foreach ($itpmb as $izin){
			$idpemilik = $izin->direkturPerusahaan;
		}
		$noktp=database::getKTPID($idpemilik);
		foreach($noktp as $ktp){
			$noNPWP = database::getNPWP($ktp->nik);
		}
		return view ('berkas-itpmb',compact('itpmb','noNPWP'));
	}
	
	public function showPermohonanIUTM(){
		$iutm = database::getUnProcessedIUTM();
		return view('permohonan-iutm',compact('iutm'));
	}
	public function showPermohonanSTPW(){
		$stpw = database::getUnProcessedSTPW();
		return view('permohonan-stpw',compact('stpw'));
	}
	public function showPermohonanITPMB(){
		$itpmb = database::getUnProcessedITPMB();
		return view('permohonan-itpmb',compact('itpmb'));
	}

	public function showIzinIUTM($id){
		$iutm = database::getPermohonanIUTMbyId($id);

		$pdf = \PDF::loadView('surat-izin-iutm',compact('iutm'));

        return $pdf->stream("iutm.pdf"); //kasih nama sesuai no izinnya -> ntar diganti sama save pdf nya aja
		


		// return view ('surat-izin-iutm',compact('iutm'));
	}
	public function showIzinSTPW($id){
		$stpw = database::getPermohonanSTPWbyId($id);

		$pdf = \PDF::loadView('surat-izin-stpw',compact('stpw'));
        return $pdf->stream("tes.pdf"); //kasih nama sesuai no izinnya -> ntar diganti sama save pdf nya aja
		// return view ('debug',compact('stpw','id'));
	}
	public function showIzinITPMB($id){
		$itpmb = database::getPermohonanITPMBbyId($id);

		$pdf = \PDF::loadView('surat-izin-itpmb',compact('itpmb'));
        return $pdf->stream("tes.pdf"); //kasih nama sesuai no izinnya -> ntar diganti sama save pdf nya aja
		// return view ('debug',compact('itpmb','id'));
	}
}

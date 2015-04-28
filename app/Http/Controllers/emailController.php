<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class emailController extends Controller {

	public function createPDF(){
		$pdf = \PDF::loadView('surat-izin-iutm');
		return $pdf->stream();
	}

}

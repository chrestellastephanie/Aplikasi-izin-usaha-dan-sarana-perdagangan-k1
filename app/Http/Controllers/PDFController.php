<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App;

class PDFController extends Controller {

	//
	public function index()
    {
        $pdf = App::make('dompdf');
		$pdf->loadHTML('<h1>Test</h1>');
		return $pdf->stream();
    }

}

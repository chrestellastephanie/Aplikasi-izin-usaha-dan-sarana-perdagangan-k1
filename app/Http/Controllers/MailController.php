<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class MailController extends Controller {

	public function sendMail($name, $email, $id_permohonan, $status)
	{
		$data = []
		$data['name'] = $name;
		$data['status'] = $status;
		$data['id_permohonan'] = $id_permohonan;

		// kirim email
		Mail::send('emailing.mail', $data, function($message) {
			$message->to($email, 'Pemohon')->subject('Status Permohonan Izin Usaha');
		});
	}

}

<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreatePermohonanSTPWRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'namaPerusahaan' => 'required|min:3',
			'alamatPerusahaan' => 'required',
			'direkturPerusahaan' => 'required',
			'bentukBadanUsaha' => 'required',
			'bantuan' => 'required',
			'fasilitas' => 'required',
			'bimbingan' => 'required',
			'pelatihan' => 'required',
			'tatacaraPembayaran' => 'required',
			'penyelesaianSengketa' => 'required',
			'perpanjanganPerjanjian' => 'required',
			'pengakhiranPerjanjian' => 'required',
			'pemutusanPerjanjian' => 'required',
			'jaminan' => 'required',
			'hakPemberi' => 'required',
			'kewajibanPemberi' => 'required',
			'hakPenerima' => 'required',
			'kewajibanPenerima' => 'required',
			'wilayahUsaha' => 'required',
			'jangkaWaktu' => 'required',
			'jumlahTempatUsaha' => 'required',	
		];
	}

}

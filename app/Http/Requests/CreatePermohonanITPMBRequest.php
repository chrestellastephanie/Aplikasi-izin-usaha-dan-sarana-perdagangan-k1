<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreatePermohonanITPMBRequest extends Request {

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
			'miras_golA' => 'required',
			'miras_golB' => 'required',
			'miras_golC' => 'required',
		];
	}

}

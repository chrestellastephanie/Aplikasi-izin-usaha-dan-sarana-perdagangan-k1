<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class CreatePermohonanIUTMRequest extends Request {

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
			'modalBersih' => 'required',
			'sahamNasional' => 'required',
			'sahamAsing' => 'required',
			'suratKepemilikanTempat' => 'required',
			'aktaPendirianPerusahaan' => 'required',
			'domisili' => 'required',
			'amdal' => 'required',
			'rencanaMitra' => 'required',
		];
	}

}

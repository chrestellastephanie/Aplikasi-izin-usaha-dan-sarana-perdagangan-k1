<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Permohonaniutm extends Model {

	protected $fillable = [
		'namaPerusahaan',
		'alamatPerusahaan',
		'direkturPerusahaan',
		'bentukBadanUsaha',
		'modalBersih',
		'sahamNasional',
		'sahamAsing',
		'suratKepemilikanTempat',
		'aktaPendirianPerusahaan',
		'domisili',
		'amdal',
		'rencanaMitra',
		'waktuPengajuan',
		'status',
	];

	protected $dates = ['waktuPengajuan'];

	public function scopeNotProcessed($query)
	{
		$query->where('status', '=', 'notProcessed');
	}

	public function waktuPengajuan($date)
	{
		$this->attributes['waktuPengajuan'] = Carbon::createFromFormat('Y-m-d', $date);
	}

}

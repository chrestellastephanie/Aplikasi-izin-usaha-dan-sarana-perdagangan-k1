<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Permohonanitpmb extends Model {

	protected $fillable = [
		'namaPerusahaan',
		'alamatPerusahaan',
		'direkturPerusahaan',
		'bentukBadanUsaha',
		'miras_golA',
		'miras_golB',
		'miras_golC',
		'waktuPengajuan',
		'status',
	];
	
	protected $dates = ['waktuPengajuan'];

	public function scopeAproved($query)
	{
		$query->where('');
	}

	public function waktuPengajuan($date)
	{
		$this->attributes['waktuPengajuan'] = Carbon::createFromFormat('Y-m-d', $date);
	}

}

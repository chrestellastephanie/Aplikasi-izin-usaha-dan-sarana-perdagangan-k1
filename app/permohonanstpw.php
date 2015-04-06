<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class permohonanstpw extends Model {

	protected $fillable = [
		'namaPerusahaan',
		'alamatPerusahaan',
		'direkturPerusahaan',
		'bentukBadanUsaha',
		'bantuan',
		'fasilitas',
		'bimbingan',
		'pelatihan',
		'tatacaraPembayaran',
		'penyelesaianSengketa',
		'perpanjanganPerjanjian',
		'pengakhiranPerjanjian',
		'pemutusanPerjanjian',
		'jaminan',
		'hakPemberi',
		'kewajibanPemberi',
		'hakPenerima',
		'kewajibanPenerima',
		'wilayahUsaha',
		'jangkaWaktu',
		'jumlahTempatUsaha',	
	];

	protected $dates = ['waktuPengajuan'];

	public function scopeAproved($query){
		$query->where('');
	}

	public function waktuPengajuan($date)
	{
		$this->attributes['waktuPengajuan'] = Carbon::createFromFormat('Y-m-d', $date);
	}
}

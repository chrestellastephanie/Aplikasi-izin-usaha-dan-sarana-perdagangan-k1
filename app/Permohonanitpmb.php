<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Permohonanitpmb extends Model {

	protected $table = 'ppl_iusp_permohonanitpmbs';

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
		'aktaPendirianPerusahaan',
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

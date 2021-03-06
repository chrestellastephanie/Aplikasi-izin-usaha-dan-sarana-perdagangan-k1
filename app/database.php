<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class database extends Model {

	public static function getPermohonanIUTM(){

		// return DB::table('ppl_iusp_permohonaniutms')
		// return DB::table('permohonaniutms')
		return DB::table('ppl_iusp_permohonaniutms')
				->orderBy('waktuPengajuan','desc')
				->get();
	}
	public static function getPermohonanSTPW(){
		return DB::table('ppl_iusp_permohonanstpws')
				->orderBy('waktuPengajuan','desc')
				->get();
	}
	public static function getPermohonanITPMB(){
		return DB::table('ppl_iusp_permohonanitpmbs')
				->orderBy('waktuPengajuan','desc')
				->get();
	}
	public static function getPermohonanIUTMbyId($id){
		return DB::table('ppl_iusp_permohonaniutms')
				->where('id','=',$id)
				->get();
	}
	public static function getPermohonanSTPWbyId($id){
		return DB::table('ppl_iusp_permohonanstpws')
				->where('id','=',$id)                       
				->get();
	}
	public static function getPermohonanITPMBbyId($id){
		return DB::table('ppl_iusp_permohonanitpmbs')
				->where('id','=',$id)
				->get();
	}
	public static function getUnProcessedIUTM(){
		return DB::table('ppl_iusp_permohonaniutms')
				->where('status','=','notProcessed')
				->get();	
	}
	public static function getUnProcessedSTPW(){
		return DB::table('ppl_iusp_permohonanstpws')
				->where('status','=','notProcessed')
				->get();	
	}
	public static function getUnProcessedITPMB(){
		return DB::table('ppl_iusp_permohonanitpmbs')
				->where('status','=','notProcessed')
				->get();	
	}
	public static function changeStatusIUTM($id,$status,$tgl,$noIzin){
		DB::table('ppl_iusp_permohonaniutms')
				->where('id','=',$id)
				->update(
					[
						'status' => $status,
						'waktuPengajuan' => $tgl,
						'nomorIzin' => $noIzin,
					]);
	}
	public static function changeStatusSTPW($id,$status,$tgl,$noIzin){
		DB::table('ppl_iusp_permohonanstpws')
				->where('id','=',$id)
				->update(
					[
						'status' => $status,
						'waktuPengajuan' => $tgl,
						'nomorIzin' => $noIzin,
					]);
	}
	public static function changeStatusITPMB($id,$status,$tgl,$noIzin){
		DB::table('ppl_iusp_permohonanitpmbs')
				->where('id','=',$id)
				->update(
					[
						'status' => $status,
						'waktuPengajuan' => $tgl,
						'nomorIzin' => $noIzin,
					]);
	}
	public static function getDisetujuiIUTM(){
		return DB::table('ppl_iusp_permohonaniutms')
				->where('status','=','accepted')
				->orderBy('waktuPengajuan','desc')
				->get();
	}
	public static function getDisetujuiSTPW(){
		return DB::table('ppl_iusp_permohonanstpws')
				->where('status','=','accepted')
				->orderBy('waktuPengajuan','desc')
				->get();
	}
	public static function getDisetujuiITPMB(){
		return DB::table('ppl_iusp_permohonanitpmbs')
				->where('status','=','accepted')
				->orderBy('waktuPengajuan','desc')
				->get();
	}
	public static function getIzinIUTMbyId($id){
		return DB::table('ppl_iusp_permohonaniutms')
				->where('direkturPerusahaan','=',$id)
				->where('status','=','accepted')
				->get();
	}
	public static function getIzinSTPWbyId($id){
		return DB::table('ppl_iusp_permohonanstpws')
				->where('direkturPerusahaan','=',$id)
				->where('status','=','accepted')
				->get();
	}
	public static function getIzinITPMBbyId($id){
		return DB::table('ppl_iusp_permohonanitpmbs')
				->where('direkturPerusahaan','=',$id)
				->where('status','=','accepted')
				->get();
	}
	public static function getKTPID($id){
		return DB::table('ppl_dukcapil_ktp')
				->where('id','=',$id)
				->get();
	}
	public static function getNPWP($noktp){
		return DB::table('ppl_pajak_wajib_pajak')
				->where('no_ktp_pemilik','=',$noktp)
				->get();
	}
}

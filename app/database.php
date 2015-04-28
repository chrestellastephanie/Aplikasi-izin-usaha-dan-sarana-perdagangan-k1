<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class database extends Model {

	public static function getPermohonanIUTM(){
		return DB::table('permohonaniutms')
				->orderBy('waktuPengajuan','desc')
				->get();
	}
	public static function getPermohonanSTPW(){
		return DB::table('permohonanstpws')
				->orderBy('waktuPengajuan','desc')
				->get();
	}
	public static function getPermohonanITPMB(){
		return DB::table('permohonanitpmbs')
				->orderBy('waktuPengajuan','desc')
				->get();
	}
	public static function getPermohonanIUTMbyId($id){
		return DB::table('permohonaniutms')
				->where('id','=',$id)
				->get();
	}
	public static function getPermohonanSTPWbyId($id){
		return DB::table('permohonanstpws')
				->where('id','=',$id)
				->get();
	}
	public static function getPermohonanITPMBbyId($id){
		return DB::table('permohonanitpmbs')
				->where('id','=',$id)
				->get();
	}
	public static function changeStatusIUTM($id,$status,$tgl){
		DB::table('permohonaniutms')
				->where('id','=',$id)
				->update(
					[
						'status' => $status,
						'waktuPengajuan' => $tgl,
					]);
	}
	public static function changeStatusSTPW($id,$status,$tgl){
		DB::table('permohonanstpws')
				->where('id','=',$id)
				->update(
					[
						'status' => $status,
						'waktuPengajuan' => $tgl,
					]);
	}
	public static function changeStatusITPMB($id,$status,$tgl){
		DB::table('permohonanitpmbs')
				->where('id','=',$id)
				->update(
					[
						'status' => $status,
						'waktuPengajuan' => $tgl,
					]);
	}
	public static function getDisetujuiIUTM(){
		return DB::table('permohonaniutms')
				->where('status','=','accepted')
				->orderBy('waktuPengajuan','desc')
				->get();
	}
	public static function getDisetujuiSTPW(){
		return DB::table('permohonanstpws')
				->where('status','=','accepted')
				->orderBy('waktuPengajuan','desc')
				->get();
	}
	public static function getDisetujuiITPMB(){
		return DB::table('permohonanitpmbs')
				->where('status','=','accepted')
				->orderBy('waktuPengajuan','desc')
				->get();
	}
}

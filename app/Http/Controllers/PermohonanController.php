<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Permohonaniutm;
use App\permohonanstpw;
use App\Permohonanitpmb;
use App\database;
use Request;
use Input;
use Mail;
use Carbon\Carbon;
use App\Http\PDF;
use Barryvdh\DomPDF\Facade;
use App\Http\Requests\CreatePermohonanIUTMRequest;
use App\Http\Requests\CreatePermohonanSTPWRequest;
use App\Http\Requests\CreatePermohonanITPMBRequest;



class PermohonanController extends Controller {

	public function __construct()
	{
		$this->middleware('auth',['only'=>'index']);
	}

	public function index()
	{
		$iutm = Permohonaniutm::latest()->NotProcessed()->get();
		$stpw = Permohonanstpw::latest()->NotProcessed()->get();
		$itpmb = Permohonanitpmb::latest()->NotProcessed()->get();

		return view('permohonan.lihatIzin',compact('iutm','stpw','itpmb'));
	}

	public function chooseIzin()
	{
		return view('permohonan.pilihIzin');
	}
	public function show_IUTM_IUPP_IUPPT(){
		return view('permohonan.formPermohonanIUTM');
		// return view('index');
	}
	public function show_STPW(){
		return view('permohonan.formPermohonanSTPW');
	}
	public function show_ITPMB(){
		return view('permohonan.formPermohonanITPMB');
	}
	public function ajukan_IUTM_IUPP_IUPPT(CreatePermohonanIUTMRequest $request){
		$input = $request->all();
		$input['status'] = 'notProcessed';
		$input['tipe'] = 'iutm';
		$input['waktuPengajuan']=Carbon::now();
		//upload file

		$file = $request->file('suratKepemilikanTempat');
		if ($request->hasFile('suratKepemilikanTempat')) { 
			$filename = Carbon::now()->toDateString()."-". $request->get('namaPerusahaan').'-surat-kepemilikan-tempat'.'.'.$file->getClientOriginalExtension();
			$destinationPath = public_path().'\\images\\'.'\\uploaded-image\\';
			$request->file('suratKepemilikanTempat')->move($destinationPath, $filename);
			$input['suratKepemilikanTempat'] = $filename;
		}

		$file = $request->file('aktaPendirianPerusahaan');
		if ($request->hasFile('aktaPendirianPerusahaan')) { 
			$filename = Carbon::now()->toDateString()."-". $request->get('namaPerusahaan').'-akta-pendirian-perusahaan'.'.'.$file->getClientOriginalExtension();
			$destinationPath = public_path().'\\images\\'.'\\uploaded-image\\';
			$request->file('aktaPendirianPerusahaan')->move($destinationPath, $filename);
			$input['aktaPendirianPerusahaan'] = $filename;
		}

		$file = $request->file('domisili');
		if ($request->hasFile('domisili')) { 
			$filename = Carbon::now()->toDateString()."-". $request->get('namaPerusahaan').'-domisili'.'.'.$file->getClientOriginalExtension();
			$destinationPath = public_path().'\\images\\'.'\\uploaded-image\\';
			$request->file('domisili')->move($destinationPath, $filename);
			$input['domisili'] = $filename;

		}

		$file = $request->file('amdal');
		if ($request->hasFile('amdal')) { 
			$filename = Carbon::now()->toDateString()."-". $request->get('namaPerusahaan').'-amdal'.'.'.$file->getClientOriginalExtension();
			$destinationPath = public_path().'\\images\\'.'\\uploaded-image\\';
			$request->file('amdal')->move($destinationPath, $filename);
			$input['amdal'] = $filename;
		}
		$file = $request->file('rencanaMitra');
		if ($request->hasFile('rencanaMitra')) { 
			$filename = Carbon::now()->toDateString()."-". $request->get('namaPerusahaan').'-rencana mitra'.'.'.$file->getClientOriginalExtension();
			$destinationPath = public_path().'\\images\\'.'\\uploaded-image\\';
			$request->file('rencanaMitra')->move($destinationPath, $filename);
			$input['rencanaMitra'] = $filename;
		}
		Permohonaniutm::create($input);

		return redirect('/');
	}

	public function ajukan_STPW(CreatePermohonanSTPWRequest $request){
		$input = $request->all();
		$input['status'] = 'notProcessed';
		$input['tipe'] = 'stpw';
		$input['waktuPengajuan']=Carbon::now();
		
		permohonanstpw::create($input);
		return redirect('/');
	}

	public function ajukan_ITPMB(CreatePermohonanITPMBRequest $request){
		$input = $request->all();
		$input['status'] = 'notProcessed';
		$input['tipe'] = 'itpmb';
		$input['waktuPengajuan']=Carbon::now();
		//upload file
		$file = $request->file('aktaPendirianPerusahaan');
		if ($request->hasFile('aktaPendirianPerusahaan')) { 
			$filename = Carbon::now()->toDateString()."-". $request->get('namaPerusahaan').'-akta-pendirian-perusahaan'.'.'.$file->getClientOriginalExtension();
			$destinationPath = public_path().'\\images\\'.'\\uploaded-image\\';
			$request->file('aktaPendirianPerusahaan')->move($destinationPath, $filename);
			$input['aktaPendirianPerusahaan'] = $filename;
		}

		Permohonanitpmb::create($input);

		return redirect('/');
	}
	public function berkasIUTMView(){
		return view ('berkas-iutm');
	}
	public function berkasSTPWView(){
		return view ('berkas-stpw');
	}
	public function berkasITPMBView(){
		return view ('berkas-itpmb');
	}
	public function sendMail($email, $status) //$name, $email, $id_permohonan, $status)
	{
		$isi_email = '';
		if ($status == 'accepted'){
			$isi_email = 'Yang terhormat, warga kota Bandung. Selamat, permohonan izin usaha anda dengan id : 001 telah diterima. Silahkan ambil surat izin anda di dinas blablabla Jalan lalalala, dengan membawa hasil print SKRD yang berada di lampiran email ini sebagai. Sebelum anda mengambil surat izin, anda perlu membayar retribusi sesuai dengan perda blablabla di loket No.XX dengan menggunakan SKRD yang telah anda print. Terima Kasih' ;
		} else {
			$isi_email = 'Mohon maaf, permohonan izin usaha anda dengan id : 001 telah ditolak, dikarenakan tidak memenuhi ketentuan permohonan izin usaha. Terima Kasih' ;
		}

		// kirim email
		Mail::raw($isi_email, function($message) {
    		$message->from('coderbodoh@gmail.com', 'Dinas Izin Usaha Kota Bandung');
 	   		$message->to($email);
		} );
	}
	public function setujuIUTM(){
		$id = Input::get('id');
		$status = 'accepted';
		$tgl = Carbon::now();
		$noSurat = 'IUTM-IUPP-IUPPT/'.$tgl->year.'/'.$tgl->month.'/'.$id;
		database::changeStatusIUTM($id,$status, $tgl, $noSurat);
		
		// $iutm = database::getPermohonanIUTMbyId($id);
		// $pdf = \PDF::loadView('surat-izin-iutm',compact('iutm'));
        // return $pdf->download("tes.pdf"); //kasih nama sesuai no izinnya -> ntar diganti sama save pdf nya aja
		// PermohonanController::sendMail('m2t.math@gmail.com',$status);

		return redirect('admin/permohonan/view/iutm'); // balik ke halaman awal
	}

	

	public static function setujuSTPW(){
		$id = Input::get('id');
		$status = 'accepted';
		$tgl = Carbon::now();
		$noSurat = 'STPW/'.$tgl->year.'/'.$tgl->month.'/'.$id;
		database::changeStatusSTPW($id,$status, $tgl, $noSurat);
		return redirect('admin/permohonan/view/stpw');
	}

	public static function setujuITPMB(){
		$id = Input::get('id');
		$status = 'accepted';
		$tgl = Carbon::now();
		$noSurat = 'ITPMB/'.$tgl->year.'/'.$tgl->month.'/'.$id;
		database::changeStatusITPMB($id,$status, $tgl, $noSurat);
		return redirect('admin/permohonan/view/itpmb');
	}
	public static function tolakIUTM(){
		$id = Input::get('id');
		$status = 'rejected';
		$tgl = Carbon::now();
		database::changeStatusIUTM($id,$status, $tgl);
		return redirect('admin/permohonan/view/iutm');
	}
	public static function tolakSTPW(){
		$id = Input::get('id');
		$status = 'rejected';
		$tgl = Carbon::now();
		database::changeStatusSTPW($id,$status, $tgl);
		return redirect('admin/permohonan/view/stpw');
	}
	public static function tolakITPMB(){
		$id = Input::get('id');
		$status = 'rejected';
		$tgl = Carbon::now();
		database::changeStatusITPMB($id,$status, $tgl);
		return redirect('admin/permohonan/view/itpmb');
	}
	public static function showAcceptedIUTM(){
		$iutm = database::getDisetujuiIUTM();
		return view ('izin-disetujui-iutm', compact('iutm'));
	}
	public static function showAcceptedSTPW(){
		$stpw = database::getDisetujuiSTPW();
		return view ('izin-disetujui-stpw', compact('stpw'));
	}
	public static function showAcceptedITPMB(){
		$itpmb = database::getDisetujuiITPMB();
		return view ('izin-disetujui-itpmb', compact('itpmb'));
	}
}

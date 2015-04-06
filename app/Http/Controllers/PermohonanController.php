<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Permohonaniutm;
use App\permohonanstpw;
use App\Permohonanitpmb;
use Request;
use Carbon\Carbon;
use App\Http\Requests\CreatePermohonanIUTMRequest;
use App\Http\Requests\CreatePermohonanSTPWRequest;
use App\Http\Requests\CreatePermohonanITPMBRequest;



class PermohonanController extends Controller {

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
		$input['waktuPengajuan']=Carbon::now();
		//upload file

		$file = $request->file('suratKepemilikanTempat');
		if ($request->hasFile('suratKepemilikanTempat')) { 
			$filename = Carbon::now()->toDateString()." - ". $request->get('namaPerusahaan').' surat kepemilikan tempat'.'.'.$file->getClientOriginalExtension();
			$destinationPath = storage_path().'\\uploaded-image\\';
			$request->file('suratKepemilikanTempat')->move($destinationPath, $filename);
			$input['suratKepemilikanTempat'] = $filename;
		}

		$file = $request->file('aktaPendirianPerusahaan');
		if ($request->hasFile('aktaPendirianPerusahaan')) { 
			$filename = Carbon::now()->toDateString()." - ". $request->get('namaPerusahaan').' akta pendirian perusahaan'.'.'.$file->getClientOriginalExtension();
			$destinationPath = storage_path().'\\uploaded-image\\';
			$request->file('aktaPendirianPerusahaan')->move($destinationPath, $filename);
			$input['aktaPendirianPerusahaan'] = $filename;
		}

		$file = $request->file('domisili');
		if ($request->hasFile('domisili')) { 
			$filename = Carbon::now()->toDateString()." - ". $request->get('namaPerusahaan').' domisili'.'.'.$file->getClientOriginalExtension();
			$destinationPath = storage_path().'\\uploaded-image\\';
			$request->file('domisili')->move($destinationPath, $filename);
			$input['domisili'] = $filename;

		}

		$file = $request->file('amdal');
		if ($request->hasFile('amdal')) { 
			$filename = Carbon::now()->toDateString()." - ". $request->get('namaPerusahaan').' amdal'.'.'.$file->getClientOriginalExtension();
			$destinationPath = storage_path().'\\uploaded-image\\';
			$request->file('amdal')->move($destinationPath, $filename);
			$input['amdal'] = $filename;
		}

		$file = $request->file('rencanaMitra');
		if ($request->hasFile('rencanaMitra')) { 
			$filename = Carbon::now()->toDateString()." - ". $request->get('namaPerusahaan').' rencana mitra'.'.'.$file->getClientOriginalExtension();
			$destinationPath = storage_path().'\\uploaded-image\\';
			$request->file('rencanaMitra')->move($destinationPath, $filename);
			$input['rencanaMitra'] = $filename;
		}
		Permohonaniutm::create($input);

		return redirect('permohonan');
	}

	public function ajukan_STPW(CreatePermohonanSTPWRequest $request){
		$input = $request->all();
		$input['status'] = 'notProcessed';
		$input['waktuPengajuan']=Carbon::now();
		
		permohonanstpw::create($input);
		return redirect('permohonan');
	}

	public function ajukan_ITPMB(CreatePermohonanITPMBRequest $request){
		$input = $request->all();
		$input['status'] = 'notProcessed';
		$input['waktuPengajuan']=Carbon::now();
		//upload file
		$file = $request->file('aktaPendirianPerusahaan');
		if ($request->hasFile('aktaPendirianPerusahaan')) { 
			$filename = Carbon::now()->toDateString()." - ". $request->get('namaPerusahaan').' akta pendirian perusahaan'.'.'.$file->getClientOriginalExtension();
			$destinationPath = storage_path().'\\uploaded-image\\';
			$request->file('aktaPendirianPerusahaan')->move($destinationPath, $filename);
			$input['aktaPendirianPerusahaan'] = $filename;
		}

		Permohonanitpmb::create($input);

		return redirect('permohonan');
	}

}

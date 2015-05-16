@extends('page-admin')

@section('content')
<h2> Berkas IUTM, IUPP, IUPPT</h2><br><br>


	@foreach ($iutm as $permohonan)
	<form id="setuju" method="post" action="/admin/setujuIUTM">
		<input name="_token" hidden value="{!! csrf_token() !!}" />
		<input type="hidden" name="id" value="{{$permohonan->id}}">	
	</form>
	<form id="tolak" method="post" action="/admin/tolakIUTM">
		<input name="_token" hidden value="{!! csrf_token() !!}" />
		<input type="hidden" name="id" value="{{$permohonan->id}}">	
	</form>

		<h4>Nama Perusahaan Pemohon : {{$permohonan->namaPerusahaan}}</h4>
	<div class="contentSize">
		<table style="width:60%;">
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">NPWP (status bayar)</td>
				<td style="width:40%;">cek dari yang lain</td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">HO</td>
				<td style="width:40%;">cek dari yang lain</td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">IMB</td>
				<td style="width:40%;">cek dari yang lain</td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">Alamat</td>
				<td style="width:40%;">{{$permohonan->alamatPerusahaan}}</td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">Bentuk Badan Usaha</td>
				<td style="width:40%;">{{$permohonan->bentukBadanUsaha}}</td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">Modal Bersih</td>
				<td style="width:40%;">{{$permohonan->modalBersih}}</td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">Saham Nasional</td>
				<td style="width:40%;">{{$permohonan->sahamNasional}}</td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">Saham Asing</td>
				<td style="width:40%;">{{$permohonan->sahamAsing}}</td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">Surat Kepemilikan Tempat</td>
				<td style="width:40%;"><a href="/iusp/public/images/uploaded-image/{{$permohonan->suratKepemilikanTempat}}">{{$permohonan->suratKepemilikanTempat}}</a></td>
			</tr>
			<hr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="aktaPendirianValid" value="valid"></td>
				<td style="width:15%;">Akta Pendirian Perusahaan</td>
				<td style="width:40%;"><a href="/iusp/public/images/uploaded-image/{{$permohonan->aktaPendirianPerusahaan}}">{{$permohonan->aktaPendirianPerusahaan}}</a></td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="domisiliValid" value="valid"></td>
				<td style="width:15%;">Domisili Perusahaan</td>
				<td style="width:40%;"><a href="/iusp/public/images/uploaded-image/{{$permohonan->domisili}}">{{$permohonan->domisili}}</a></td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="amdalValid" value="valid"></td>
				<td style="width:15%;">Amdal</td>
				<td style="width:40%;"><a href="/iusp/public/images/uploaded-image/{{$permohonan->amdal}}">{{$permohonan->amdal}}</a></td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="mitraValid" value="valid"></td>
				<td style="width:15%;">Rencana Mitra</td>
				<td style="width:40%;"><a href="/iusp/public/images/uploaded-image/{{$permohonan->rencanaMitra}}">{{$permohonan->rencanaMitra}}</a></td>
			</tr>
		</table><br>
		<button form="setuju" class="btn btn_style buttonSetuju">Setuju</button> <button form="tolak" class="btn btn_style btnTolak">Tolak</button>
	</div>
	@endforeach
@endsection
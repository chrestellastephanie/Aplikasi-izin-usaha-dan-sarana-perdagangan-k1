@extends('page-admin')

@section('content')

<h2> Berkas STPW </h2><br><br>


	@foreach ($stpw as $permohonan)
	<form id="setuju" method="post" action="/iusp/public/admin/setujuSTPW">
		<input name="_token" hidden value="{!! csrf_token() !!}" />
		<input type="hidden" name="id" value="{{$permohonan->id}}">	
	</form>
	<form id="tolak" method="post" action="/iusp/public/admin/tolakSTPW">
		<input name="_token" hidden value="{!! csrf_token() !!}" />
		<input type="hidden" name="id" value="{{$permohonan->id}}">	
	</form>

		<h4>Nama Perusahaan Pemohon : {{$permohonan->namaPerusahaan}}</h4>
		<hr>
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
				<td style="width:20%;">Bentuk badan usaha</td>
				<td style="width:40%;">{{$permohonan->bentukBadanUsaha}}</td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">Bantuan pihak pemberi</td>
				<td style="width:40%;">{{$permohonan->bantuan}}</td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">Fasilitas</td>
				<td style="width:40%;">{{$permohonan->fasilitas}}</td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">Bimbingan dari pihak pemberi</td>
				<td style="width:40%;">{{$permohonan->bimbingan}}</td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">Pelatihan</td>
				<td style="width:40%;">{{$permohonan->pelatihan}}</td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">Tata cara pembayaran</td>
				<td style="width:40%;">{{$permohonan->tatacaraPembayaran}}</td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">Penyelesaian Sengketa</td>
				<td style="width:40%;">{{$permohonan->penyelesaianSengketa}}</td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">Cara perpanjangan perjanjian</td>
				<td style="width:40%;">{{$permohonan->perpanjanganPerjanjian}}</td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">Pengakhiran perjanjian</td>
				<td style="width:40%;">{{$permohonan->pengakhiranPerjanjian}}</td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">Pemutusan perjanjian</td>
				<td style="width:40%;">{{$permohonan->pemutusanPerjanjian}}</td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">Jaminan</td>
				<td style="width:40%;">{{$permohonan->jaminan}}</td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">Hak pemberi</td>
				<td style="width:40%;">{{$permohonan->hakPemberi}}</td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">Kewajiban pemberi</td>
				<td style="width:40%;">{{$permohonan->kewajibanPemberi}}</td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">Hak penerima</td>
				<td style="width:40%;">{{$permohonan->hakPenerima}}</td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">Kewajiban penerima</td>
				<td style="width:40%;">{{$permohonan->kewajibanPenerima}}</td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">Wilayah usaha</td>
				<td style="width:40%;">{{$permohonan->wilayahUsaha}}</td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">Jangka waktu</td>
				<td style="width:40%;">{{$permohonan->jangkaWaktu}}</td>
			</tr>
		</table><br>
		<button form="setuju" class="btn btn_style buttonSetuju">Setuju</button> <button form="tolak" class="btn btn_style btnTolak">Tolak</button>
	</div>
	@endforeach
@endsection
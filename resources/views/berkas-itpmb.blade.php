@extends('page-admin')

@section('content')
<h2> Berkas ITPMB</h2><br><br>


	@foreach ($itpmb as $permohonan)
	<form id="setuju" method="post" action="/admin/setujuITPMB">
		<input name="_token" hidden value="{!! csrf_token() !!}" />
		<input type="hidden" name="id" value="{{$permohonan->id}}">	
	</form>
	<form id="tolak" method="post" action="/admin/tolakITPMB">
		<input name="_token" hidden value="{!! csrf_token() !!}" />
		<input type="hidden" name="id" value="{{$permohonan->id}}">	
	</form>

		<h4>Nama Perusahaan Pemohon : {{$permohonan->namaPerusahaan}}</h4>
	<div class="contentSize">
		<table style="width:60%;">
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">Nama Perusahaan</td>
				<td style="width:40%;">{{$permohonan->namaPerusahaan}}</td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">Alamat Perusahaan</td>
				<td style="width:40%;">{{$permohonan->alamatPerusahaan}}</td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">Pemilik</td>
				<td style="width:40%;">{{$permohonan->direkturPerusahaan}}</td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">Bentuk badan usaha</td>
				<td style="width:40%;">{{$permohonan->bentukBadanUsaha}}</td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">Miras Gol A</td>
				<td style="width:40%;">{{$permohonan->miras_golA}}</td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">Miras Gol B</td>
				<td style="width:40%;">{{$permohonan->miras_golB}}</td>
			</tr>
			<tr>
				<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">Miras Gol C</td>
				<td style="width:40%;">{{$permohonan->miras_golC}}</td>
			</tr>
		</table><br>
		<button form="setuju" class="btn btn_style buttonSetuju">Setuju</button> <button form="tolak" class="btn btn_style btnTolak">Tolak</button>
	</div>
	@endforeach
@endsection
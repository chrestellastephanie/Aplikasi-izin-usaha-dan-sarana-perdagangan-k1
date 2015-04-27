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
				{{--<td style="width:1%;"><input type="checkbox" name="KepemilikanTempatValid" value="valid"></td>
				<td style="width:20%;">Surat Kepemilikan Tempat</td>
				<td style="width:40%;"><a href="/images/uploaded-image/{{$permohonan->suratKepemilikanTempat}}">{{$permohonan->suratKepemilikanTempat}}</a></td>--}}
			</tr>
		</table><br>
		<button form="setuju" class="btn btn_style buttonSetuju">Setuju</button> <button form="tolak" class="btn btn_style btnTolak">Tolak</button>
	</div>
	@endforeach
@endsection
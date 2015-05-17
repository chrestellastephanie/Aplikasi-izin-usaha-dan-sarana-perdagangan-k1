@extends('page-admin')

@section('content')
	<!-- get id yang login -->
	<?php 
		$idlogin= $_GET['id'];
		echo $idlogin;
	?>
	<h1>Daftar permohonan : </h1>
	<h2>STPW</h2>
	<ul>
	@foreach ($stpw as $mohon)
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-md-9">
					<li>
						<h4>{{ $mohon->namaPerusahaan }}</h4>
					</li>
					<li>
						{{ $mohon->waktuPengajuan }}
					</li>
				</div>
				<div class="col-md-3">
					<form id="cekberkas" method="post" action="/iusp/public/admin/permohonan/view/berkasSTPW/{{$mohon->id}}">
						<input name="_token" hidden value="{!! csrf_token() !!}" />
						<input type="hidden" name="id" value="{{$permohonan->id}}">	
						<input type="hidden" name="iduser" value="{{$idlogin}}">
					</form>
					<button form="cekberkas" class="btn2 btn_style">cek berkas</button>
				</div>
			</div>
		</div>
	@endforeach
	</ul>
@endsection
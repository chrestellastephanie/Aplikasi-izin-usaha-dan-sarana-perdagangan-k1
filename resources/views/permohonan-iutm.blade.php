@extends('page-admin')

@section('content')
<!-- get id yang login -->
	<?php 
		$idlogin= $_GET['id'];
		echo $idlogin;
	?>
	<h1>Daftar permohonan : </h1>
	<h3>IUTM-IUPP-IUPPT</h3>
	<ul>
	@foreach ($iutm as $mohon)
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
					<a href="berkasIUTM/{{$mohon->id}}?id=$idlogin"><button class="btn2 btn_style">cek berkas</button></a>					
				</div>
			</div>
		</div>
	@endforeach
	</ul>
@endsection
@extends('page-admin')

@section('content')
	<h1>Daftar permohonan : </h1>
	<h3>IUTM-IUPP-IUPPT</h3>
	<ul>
	@foreach ($iutm as $mohon)
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-md-8">
					<li>
						<h4>{{ $mohon->namaPerusahaan }}</h4>
					</li>
					<li>
						{{ $mohon->waktuPengajuan }}
					</li>
				</div>
				<div class="col-md-4">
					<a href="berkasIUTM/{{$mohon->id}}"><button class="btn2 btn_style">cek berkas</button></a> |
					<select>
						<option>Accept</option>
						<option>Decline</option>
					</select>
					<button class="btn2 btn_style">ubah status</button>
				</div>
			</div>
		</div>
	@endforeach
	</ul>
	<h2>STPW</h2>
	<ul>
	@foreach ($stpw as $mohon)
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-md-8">
					<li>
						<h4>{{ $mohon->namaPerusahaan }}</h4>
					</li>
					<li>
						{{ $mohon->waktuPengajuan }}
					</li>
				</div>
				<div class="col-md-4">
					<a href="berkasSTPW/{{$mohon->id}}"><button class="btn2 btn_style">cek berkas</button></a> |
					<select>
						<option>Accept</option>
						<option>Decline</option>
					</select>
					<button class="btn2 btn_style">ubah status</button>
				</div>
			</div>
		</div>
	@endforeach
	</ul>
	<h2>ITPMB</h2>
	<ul>
	@foreach ($itpmb as $mohon)
		<div class="panel panel-default">
			<div class="panel-body">
				<div class="col-md-8">
					<li>
						<h4>{{ $mohon->namaPerusahaan }}</h4>
					</li>
					<li>
						{{ $mohon->waktuPengajuan }}
					</li>
				</div>
				<div class="col-md-4">
					<a href="berkasITPMB/{{$mohon->id}}"><button class="btn2 btn_style">cek berkas</button></a> |
					<select>
						<option>Accept</option>
						<option>Decline</option>
					</select>
					<button class="btn2 btn_style">ubah status</button>
				</div>
			</div>
		</div>
	@endforeach
	</ul>
@endsection
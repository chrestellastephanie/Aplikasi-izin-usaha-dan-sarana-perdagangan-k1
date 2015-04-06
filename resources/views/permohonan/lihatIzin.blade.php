@extends('single-page')

@section('content')
	<h1>Daftar permohonan : </h1>
	<h2>IUTM-IUPP-IUPPT</h2>
	<ul>
	@foreach ($iutm as $mohon)
		<li>
			{{ $mohon->namaPerusahaan }}
		</li>
	@endforeach
	<ul>
	<h2>STPW</h2>
	<ul>
	@foreach ($stpw as $mohon)
		<li>
			{{ $mohon->namaPerusahaan }}
		</li>
	@endforeach
	<ul>
	<h2>ITPMB</h2>
	<ul>
	@foreach ($itpmb as $mohon)
		<li>
			{{ $mohon->namaPerusahaan }}
		</li>
	@endforeach
	<ul>
@endsection
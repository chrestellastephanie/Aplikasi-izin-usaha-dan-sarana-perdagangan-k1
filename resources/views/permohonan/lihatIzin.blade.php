@extends('single-page')

@section('content')
	<h1>Daftar permohonan : </h1>
	<h3>IUTM-IUPP-IUPPT</h3>
	<ul>
	@foreach ($iutm as $mohon)
		
		<li>
			{{ $mohon->namaPerusahaan }}
		</li>
		
	@endforeach
	</ul>
	<h2>STPW</h2>
	<ul>
	@foreach ($stpw as $mohon)
		<li>
			{{ $mohon->namaPerusahaan }}
		</li>
	@endforeach
	</ul>
	<h2>ITPMB</h2>
	<ul>
	@foreach ($itpmb as $mohon)
		<li>
			{{ $mohon->namaPerusahaan }}
		</li>
	@endforeach
	</ul>
@endsection
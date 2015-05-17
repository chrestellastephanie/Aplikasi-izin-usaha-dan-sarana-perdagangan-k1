@extends('page-admin')

@section ('content')
	<h1>Izin : </h1>
	<h2>ITPMB</h2>
	<ul>
	@foreach ($itpmb as $mohon)
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
					<a href="itpmb/{{$mohon->id}}"><button class="btn2 btn_style">Lihat Izin</button></a>
				</div>
			</div>
		</div>
	@endforeach
	</ul>
@endsection
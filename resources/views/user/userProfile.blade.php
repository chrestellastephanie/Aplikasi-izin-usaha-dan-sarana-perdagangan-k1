@extends ('single-page')

@section('content')
	<h1>User's Profile</h1>
	<div class="biodata">
		<div class="col-md-9 lead">
			 @foreach($noKTP as $ktpID)
			<br>Nama: {{$ktpID->nama}}
			<br>ID KTP: {{$ktpID->nik}}
			<br>email: {{$ktpID->email}}
			@endforeach
			<br>
			<br>No NPWP: 
			<br>Izin yang dimiliki : <br>
				@foreach($izinIUTM as $iutm)
					{{$iutm->nomorIzin}} <button>perpanjang</button>
				@endforeach
				@foreach($izinSTPW as $stpw)
					{{$stpw->nomorIzin}} <button>perpanjang</button>
				@endforeach
				@foreach($izinITPMB as $itpmb)
					{{$itpmb->nomorIzin}} <button>perpanjang</button>
				@endforeach
		</div>

	</div>
@endsection
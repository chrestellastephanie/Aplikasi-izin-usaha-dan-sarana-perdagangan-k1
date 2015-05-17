@extends ('single-page')

@section('content')
	<h1>User's Profile</h1>
	<div class="biodata">
		<div class="col-md-3">
			<img src="{{ asset('images/pic1.png') }}" alt="..." class="img-thumbnail">
		</div>
		<div class="col-md-9 lead">
			<br>Nama:	
			<br>ID KTP:
			<br>No NPWP:
			<br>Izin yang dimiliki : 
				@foreach($izinIUTM as $iutm)
					{{$iutm->nomorIzin}}
				@endforeach
				@foreach($izinSTPW as $stpw)
					{{$stpw->nomorIzin}}
				@endforeach
				@foreach($izinITPMB as $itpmb)
					{{$itpmb->nomorIzin}}
				@endforeach
		</div>

	</div>
@endsection
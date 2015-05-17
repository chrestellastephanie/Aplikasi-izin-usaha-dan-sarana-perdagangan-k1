@extends ('single-page')

@section('content')
	<h1>User's Profile</h1>
	<div class="biodata">
		<div class="col-md-9 lead">



			 @foreach($noKTP as $ktpID)
			<br><b>Nama:</b> {{$ktpID->nama}}
			<br><b>ID KTP:</b> {{$ktpID->nik}}
			<br><b>email:</b> {{$ktpID->email}}
			@endforeach
			<br>
			<br>No NPWP: 
			<br><b>Izin yang dimiliki :</b> <br>
				@foreach($izinIUTM as $iutm)
				<form id="perpanjang" method="post" action="/iusp/public/perpanjangIUTM">
					<input name="_token" hidden value="{!! csrf_token() !!}" />
					<input type="hidden" name="id" value="{{$iutm->id}}">	
				</form>
					{{$iutm->nomorIzin}} <button class="btn btn_style" form="perpanjang">perpanjang</button>
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
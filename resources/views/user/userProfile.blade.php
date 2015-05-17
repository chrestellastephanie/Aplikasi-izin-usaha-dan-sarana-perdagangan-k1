@extends ('single-page')

@section('content')
	<h1>User's Profile</h1>
	<div class="biodata">
		<div class="col-md-9 lead">



			 @foreach($noKTP as $ktpID)
			<br><b>Nama:</b> {{$ktpID->nama}}
			<br><b>ID KTP:</b> {{$ktpID->nik}}
			<br><b>email:</b> {{$ktpID->email}}
			
			<br>
			<br>No NPWP: 
			<br><b>Izin yang dimiliki :</b> <br>
				@foreach($izinIUTM as $iutm)
				<form id="perpanjang" method="post" action="/iusp/public/perpanjangIUTM">
					<input name="_token" hidden value="{!! csrf_token() !!}" />
					<input type="hidden" name="id" value="{{$iutm->id}}">
					<input type="hidden" name="ktp" value="{{$ktpID->id}}">
				</form>
					{{$iutm->nomorIzin}} <button class="btn btn_style" form="perpanjang">perpanjang</button>
				@endforeach
				@foreach($izinSTPW as $stpw)
				<form id="perpanjang" method="post" action="/iusp/public/perpanjangSTPW">
					<input name="_token" hidden value="{!! csrf_token() !!}" />
					<input type="hidden" name="id" value="{{$stpw->id}}">	
					<input type="hidden" name="ktp" value="{{$ktpID->id}}">

				</form>
					{{$stpw->nomorIzin}} <button>perpanjang</button>
				@endforeach
				@foreach($izinITPMB as $itpmb)
				<form id="perpanjang" method="post" action="/iusp/public/perpanjangITPMB">
					<input name="_token" hidden value="{!! csrf_token() !!}" />
					<input type="hidden" name="id" value="{{$itpmb->id}}">	
					<input type="hidden" name="ktp" value="{{$ktpID->id}}">
					
				</form>
					{{$itpmb->nomorIzin}} <button class="btn btn_style" form="perpanjang">perpanjang</button>
				@endforeach
			@endforeach
		</div>

	</div>
@endsection
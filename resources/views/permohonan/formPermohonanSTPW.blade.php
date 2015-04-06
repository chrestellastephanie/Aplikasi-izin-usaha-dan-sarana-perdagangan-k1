@extends('single-page')

@section('content')
<div class="container">
	<h1>Form Permohonan Izin Usaha STPW</h1>
	<hr/>
	
	@include('errors.list')

	{!! Form::open(['url' => 'permohonan/STPWSuccess','files' => true]) !!}
	<input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
	<div class="form-horizontal">
		<h4>Data perusahaan</h4>
		</hr>
		{!! Form::label('namaPerusahaan', 'Nama Perusahaan:')!!}
		{!! Form::text('namaPerusahaan',null, ['class' => 'form-control'])!!}

		{!! Form::label('alamatPerusahaan', 'Alamat Perusahaan:')!!}
		{!! Form::text('alamatPerusahaan',null, ['class' => 'form-control'])!!}

		{!! Form::label('direkturPerusahaan', 'Direktur Perusahaan:')!!}
		{!! Form::text('direkturPerusahaan',null, ['class' => 'form-control'])!!}

		{!! Form::label('bentukBadanUsaha', 'Bentuk Badan Usaha:')!!}<br>
		{!! Form::select('bentukBadanUsaha', [
		   'perusahaanPerseorangan' => 'Perusahaan Perseorangan',
		   'firma' => 'Firma',
		   'cv' => 'Perseroan Komanditer (CV)',
		   'pt' => 'Perseroan Terbatas',
		   'perusahaanNegara' => 'Perusahaan Negara',
		   'perusahaanDaerah' => 'Perusahaan Daerah']
		, ['class' => 'form-control']) !!}
		<br><br><br>
		<h4>Perjanjian</h4>
		{!! Form::label('bantuan', 'Bantuan dari pemberi waralaba:')!!}
		{!! Form::text('bantuan',null, ['class' => 'form-control'])!!}

		{!! Form::label('fasilitas', 'Fasilitas dari pemberi waralaba:')!!}
		{!! Form::text('fasilitas',null, ['class' => 'form-control'])!!}

		{!! Form::label('bimbingan', 'Bimbingan dari pemberi waralaba:')!!}
		{!! Form::text('bimbingan',null, ['class' => 'form-control'])!!}

		{!! Form::label('pelatihan', 'Pelatihan dari pemberi waralaba:')!!}
		{!! Form::text('pelatihan',null, ['class' => 'form-control'])!!}

		{!! Form::label('tatacaraPembayaran', 'Tata cara pembayaran:')!!}
		{!! Form::text('tatacaraPembayaran',null, ['class' => 'form-control'])!!}		

		{!! Form::label('penyelesaianSengketa', 'Tata cara penyelesaian sengketa:')!!}
		{!! Form::text('penyelesaianSengketa',null, ['class' => 'form-control'])!!}	

		{!! Form::label('perpanjanganPerjanjian', 'Tata cara perpanjangan perjanjian:')!!}
		{!! Form::text('perpanjanganPerjanjian',null, ['class' => 'form-control'])!!}	

		{!! Form::label('pengakhiranPerjanjian', 'Tata cara pengakhiran perjanjian:')!!}
		{!! Form::text('pengakhiranPerjanjian',null, ['class' => 'form-control'])!!}	

		{!! Form::label('pemutusanPerjanjian', 'Tata cara pemutusan perjanjian:')!!}
		{!! Form::text('pemutusanPerjanjian',null, ['class' => 'form-control'])!!}	

		{!! Form::label('jaminan', 'Jaminan pemberi waralaba:')!!}
		{!! Form::text('jaminan',null, ['class' => 'form-control'])!!}


		<br><br>
		<h4>Hak dan Kewajiban</h4>
		{!! Form::label('hakPemberi', 'Hak pemberi waralaba:')!!}
		{!! Form::text('hakPemberi',null, ['class' => 'form-control'])!!}

		{!! Form::label('kewajibanPemberi', 'Kewajiban pemberi waralaba:')!!}
		{!! Form::text('kewajibanPemberi',null, ['class' => 'form-control'])!!}

		{!! Form::label('hakPenerima', 'Hak penerima waralaba:')!!}
		{!! Form::text('hakPenerima',null, ['class' => 'form-control'])!!}

		{!! Form::label('kewajibanPenerima', 'Kewajiban penerima waralaba:')!!}
		{!! Form::text('kewajibanPenerima',null, ['class' => 'form-control'])!!}

		<br><br>
		<h4>Lain-lain</h4>
		{!! Form::label('wilayahUsaha', 'Wilayah usaha:')!!}
		{!! Form::text('wilayahUsaha',null, ['class' => 'form-control'])!!}

		{!! Form::label('jangkaWaktu', 'Jangka waktu perjanjian:')!!}
		{!! Form::text('jangkaWaktu',null, ['class' => 'form-control'])!!}

		{!! Form::label('jumlahTempatUsaha', 'Jumlah tempat usaha:')!!}
		{!! Form::text('jumlahTempatUsaha',null, ['class' => 'form-control'])!!}

		
		<br><br>
		{!! Form::submit('Submit',['class' => 'btn btn-primary form-control']) !!}
	</div>
	{!! Form::close() !!}
	
</div>
<br>
@endsection
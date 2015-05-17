@extends('single-page')

@section('content')
<!-- get id yang login -->
	<?php 
		$idlogin= $_GET['id'];
	?>
<div class="container">
	<h1>Form Permohonan Izin Usaha ITPMB</h1>
	<hr/>
	
	{!! Form::open(['url' => 'permohonan/ITPMBSuccess','files' => true]) !!}
	<div class="form-horizontal">

		@include('errors.list')

		<h4>Data perusahaan</h4>
		</hr>
		{!! Form::label('namaPerusahaan', 'Nama Perusahaan:')!!}
		{!! Form::text('namaPerusahaan',null, ['class' => 'form-control'])!!}

		{!! Form::label('alamatPerusahaan', 'Alamat Perusahaan:')!!}
		{!! Form::text('alamatPerusahaan',null, ['class' => 'form-control'])!!}

		{!! Form::hidden('direkturPerusahaan', 'NIK penanggung jawab:')!!}
		{!! Form::hidden('direkturPerusahaan',$idlogin, ['class' => 'form-control'])!!}

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
		<h4>Jenis Miras</h4>
		{!! Form::label('miras_golA', 'Miras golongan A:')!!}
		{!! Form::text('miras_golA',null, ['class' => 'form-control'])!!}

		{!! Form::label('miras_golB', 'Miras golongan B:')!!}
		{!! Form::text('miras_golB',null, ['class' => 'form-control'])!!}

		{!! Form::label('miras_golC', 'Miras golongan C:')!!}
		{!! Form::text('miras_golC',null, ['class' => 'form-control'])!!}
		<br><br>
		<h4>Unggah Berkas</h4>
		<div class="panel panel-default">
			<div class="panel-body">
				{!! Form::label('aktaPendirianPerusahaan', 'Akta Pendirian Perusahaan:')!!}
				{!! Form::file('aktaPendirianPerusahaan') !!}
			</div>
		</div>
		<br><br>
		{!! Form::submit('Submit',['class' => 'btn btn-primary form-control']) !!}
	</div>
	{!! Form::close() !!}
	
</div>
<br>
@endsection
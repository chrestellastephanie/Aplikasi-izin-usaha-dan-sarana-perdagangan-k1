@extends('single-page')

@section('content')
<!-- get id yang login -->
	<?php 
		$idlogin= $_GET['id'];
	?>
<div class="container">
	<h1>Form Permohonan Izin Usaha IUTM/IUPP/IUPPT</h1>
	<hr/>
	
	{!! Form::open(['url' => 'permohonan/IUTMSuccess','files' => true]) !!}
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
		<h4>Modal dan Saham</h4>
		{!! Form::label('modalBersih', 'Modal Bersih:')!!}
		{!! Form::text('modalBersih',null, ['class' => 'form-control'])!!}

		{!! Form::label('sahamNasional', 'Saham Nasional:')!!}
		{!! Form::text('sahamNasional',null, ['class' => 'form-control'])!!}

		{!! Form::label('sahamAsing', 'Saham Asing:')!!}
		{!! Form::text('sahamAsing',null, ['class' => 'form-control'])!!}
		<br><br>
		<h4>Unggah Berkas</h4>
		<div class="panel panel-default">
			<div class="panel-body">
				{!! Form::label('suratKepemilikanTempat', 'Surat Kepemilikan Tempat:')!!}
				{!! Form::file('suratKepemilikanTempat') !!}
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				{!! Form::label('aktaPendirianPerusahaan', 'Akta Pendirian Perusahaan:')!!}
				{!! Form::file('aktaPendirianPerusahaan') !!}
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				{!! Form::label('domisili', 'Domisili Perusahaan:')!!}
				{!! Form::file('domisili') !!}
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				{!! Form::label('amdal', 'Amdal:')!!}
				{!! Form::file('amdal') !!}
			</div>
		</div>
		<div class="panel panel-default">
			<div class="panel-body">
				{!! Form::label('rencanaMitra', 'Rencana Mitra:')!!}
				{!! Form::file('rencanaMitra') !!}
			</div>
		</div>
		<br><br>
		{!! Form::submit('Submit',['class' => 'btn btn-primary form-control']) !!}
	</div>
	{!! Form::close() !!}
	
</div>
<br>
@endsection
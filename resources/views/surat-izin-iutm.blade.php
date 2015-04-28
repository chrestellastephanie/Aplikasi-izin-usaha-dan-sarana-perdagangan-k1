<html>
<head>
<title>Surat Izin IUTM/IUPP/IUPPT</title>
<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{url('css/style.css')}}" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

<style>
body {background-color:white}
</style>
</head>
<body>
	<div class="container">
		<div class="kop">
			<div class="col-md-2">
				<img src="{{url('images/bandung.png')}}">
			</div>
			<div class="col-md-10">
				<h2>PEMERINTAH PROVINSI KOTA BANDUNG</h2>
				<h3>Dinas Koperasi, UKM dan Perindustrian Perdagangan</h3>
			</div>
			<hr>
		</div>

		<div class="isi">
			@foreach($iutm as $permohonan)
				Nomor izin : IUTM-IUPP-IUPPT/<?php echo date("Y/m"); ?>/{{$permohonan->id}}

				<table >
					<tr>
						<td>Nama Perusahaan</td>
						<td>:</td>
						<td>{{$permohonan->namaPerusahaan}}</td>
					</tr>
					<tr>
						<td>Nama Penangungg Jawab</td>
						<td>:</td>
						<td>{{$permohonan->direkturPerusahaan}}</td>
					</tr>
					<tr>
						<td>Alamat Perusahaan</td>
						<td>:</td>
						<td>{{$permohonan->alamatPerusahaan}}</td>
					</tr>
					<tr>
						<td>Nilai Kekayaan Bersih</td>
						<td>:</td>
						<td>{{$permohonan->modalBersih}}</td>
					</tr>
					<tr>
						<td>Bentuk Usaha</td>
						<td>:</td>
						<td>{{$permohonan->bentukBadanUsaha}}</td>
					</tr>
				</table>
			@endforeach
		</div>
	</div>
	


</body>
</html>
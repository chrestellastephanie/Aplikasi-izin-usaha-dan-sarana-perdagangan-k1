<html>
<head>
<title>Surat Izin IUTM/IUPP/IUPPT</title>
<link rel="stylesheet" href="{{url('css/style.css')}}" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style>
body {background-image: url('images/bandung.png');}
</style>
</head>
<body>
	<div class="container">
		<div class="kop">
			<div class="kop-logo">
				<img src="{{url('public/images/bandung.png')}}">
			</div>
			<div class="kop-namadinas">
				<h3>PEMERINTAH PROVINSI KOTA BANDUNG</h3>
				<h4>Badan Pelayanan Perizinan Terpadu</h4>
			</div>
			<hr>
		</div>
		<div class="judul">
			SURAT IZIN IUTM-IUPP-IUPPT 
		</div>

			@foreach($iutm as $permohonan)
				<div class="noIzin">Nomor izin : {{$permohonan->nomorIzin}}</div>
				<br><br><br>
			<div class="isi">
				<table style="width:90%;">
					<br>
					<tr>
						<td style="width:40%;">Nama Perusahaan</td>
						<td style="width:3%;">:</td>
						<td>{{$permohonan->namaPerusahaan}}</td>
					</tr>
					<tr>
						<td style="width:40%;">Nama Penanggung Jawab</td>
						<td style="width:3%;">:</td>
						<td>{{$permohonan->direkturPerusahaan}}</td>
					</tr><br>
					<tr>
						<td style="width:40%;">Alamat Perusahaan</td>
						<td style="width:3%;">:</td>
						<td>{{$permohonan->alamatPerusahaan}}</td>
					</tr><br>
					<tr>
						<td style="width:40%;">Nilai Kekayaan Bersih</td>
						<td style="width:3%;">:</td>
						<td>Rp. {{$permohonan->modalBersih}},00</td>
					</tr><br>
					<tr>
						<td style="width:40%;">Bentuk Usaha</td>
						<td style="width:3%;">:</td>
						<td>{{$permohonan->bentukBadanUsaha}}</td>
					</tr><br>
				</table>
			</div>
			@endforeach
			<br>
		<div class="ketentuan">
			<b>SIUP ini dibuat dengan ketentuan</b><br>
			<table style="width:100%">
				<tr>
					<td style="width:10%; vertical-align: text-top;">PERTAMA</td>
					<td style="width:2%; vertical-align: text-top;">:</td>
					<td>Surat Izin Usaha Perdagangan (SIUP) ini berlaku untuk melakukan kegiatan usaha perdagangan di seluruh wilayah Republik Indonesia selama perusahaan masih menjalankan kegiatan usaha perdagangan dan wajib mendaftar ulang selama 5 tahun sekali</td>
				</tr>
				<tr>
					<td style="width:10%; vertical-align: text-top;">KEDUA</td>
					<td style="width:2%; vertical-align: text-top;">:</td>
					<td>Pemilik/penanggung jawab wajib menyampaikan laporan kegiatan usaha perdagangannya dua kali dalam setahun dengan jadwal untuk semester pertama paling lambat tanggal 31 Juli dan untuk semester kedua paling lambat tanggal 31 Januari tahun berikutnya</td>
				</tr>
				<tr>
					<td style="width:10%; vertical-align: text-top;">KETIGA</td>
					<td style="width:2%; vertical-align: text-top;">:</td>
					<td>Tidak berlaku untuk kegiatan perdagangan berjangka komoditi</td>
				</tr>
				<tr>
					<td style="width:10%; vertical-align: text-top;">KEEMPAT</td>
					<td style="width:2%; vertical-align: text-top;">:</td>
					<td>Tidak untuk melakukan kegiatan usaha selain yang tercantum dalam SIUP ini</td>
				</tr>
			</table>
		</div>
		<br><br><br>
		<div class="sign">
			<table>
				<tr>
					<td>Dikeluarkan di</td>
					<td>:</td>
					<td>Bandung</td>
				</tr>
				<tr>
					@foreach ($iutm as $permohonan)
					<td>Pada Tanggal</td>
					<td>:</td>
					<td><?php echo substr($permohonan->updated_at,0,10)?></td>
					@endforeach
				</tr>
				<tr>
					<td>Pendaftaran ulang tanggal</td>
					<td>:</td>
					<td></td>
				</tr>
			</table>

			<br><br><br>
			KEPALA DINAS, <br><br><br><br><br>
			<u>Eric M Athohari</u><br>
			NIP.49234610517
		</div>


	</div>
</body>
</html>
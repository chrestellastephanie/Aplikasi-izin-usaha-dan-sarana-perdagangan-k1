<p>Yang terhormat, {{ $name }}!</p>
 
<p>Terima kasih telah mengirimkan permohonan izin usaha ke sistem online.</p>

@if ($status == "accepted")
	<p>Selamat, permohonan anda dengan id : {{ $id_permohonan }} telah diterima. Silahkan ambil surat izin anda di dinas blablabla jalan lalalala, dengan membawa hasil print SKRD yang berada di lampiran email ini sebagai. Sebelum anda mengambil surat izin, anda perlu membayar retribusi sesuai dengan perda blablabla di loket lalala dengan menggunakan SKRD yang telah anda print</p>
	<p>Terima Kasih</p>	
@else
	<p>Mohon maaf, permohonan anda dengan id : {{ $id_permohonan }} telah ditolak, dikarenakan tidak memenuhi ketentuan permohonan izin usaha.</p>
	<p>Terima Kasih</p>	
@endif
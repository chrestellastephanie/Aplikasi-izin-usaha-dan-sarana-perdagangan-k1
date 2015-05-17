<p>Yang terhormat, {{ $name }}.</p>
 
<p>Terima kasih telah mengirimkan permohonan izin usaha ke Aplikasi Izin Usaha dan Sarana Perdagangan.</p>

@if ($status == "accepted")
	<p>Selamat, permohonan anda dengan Nomor : {{ $noSurat }} telah diterima. Silahkan ambil surat izin anda di Badan Pelayanan Perizinan Terpadu, Jl. Cianjur No.34, dengan membawa hasil print SKRD yang berada di lampiran email ini. Sebelum anda mengambil surat izin, anda perlu membayar retribusi di loket N0.7 dengan menggunakan SKRD yang telah anda print</p>
	<p>Terima Kasih</p>	
@else
	<p>Mohon maaf, permohonan anda dengan Nomor : {{ $noSurat }} telah ditolak, dikarenakan tidak memenuhi ketentuan permohonan izin usaha.</p>
	<p>Terima Kasih</p>	
@endif
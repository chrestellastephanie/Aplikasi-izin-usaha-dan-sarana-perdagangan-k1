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

		</div>

	</div>
@endsection
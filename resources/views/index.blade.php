<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<title>Izin Usaha dan Sarana Perdagangan</title>
<!-- Bootstrap -->
<!-- <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' /> -->
<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!--[if lt IE 9]>
     <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
     <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!--  webfonts  -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
<!-- // webfonts  -->
<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
<!-- <link href="css/style.css" rel="stylesheet" type="text/css" media="all" /> -->
<!-- start plugins -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</head>
<body>
	<!-- get id yang login -->
	<?php 
		$idlogin= $_GET['id'];
		// echo $idlogin;
	?>


<div class="header_bg"><!-- start header -->
	<div class="container">
		<div class="row header">
		<nav class="navbar" role="navigation">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="/"><img src="{{ asset('images/logo.png') }}" alt="" class="img-responsive"/> </a>
		    </div>
		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="menu nav navbar-nav ">
		        <li class="active"><a href="/">home</a></li>
		         <li><a href="user-profile/{{$idlogin}}?id={{$idlogin}}">user profile</a></li>
                  <li><a href="/">Logout</a></li>
                  <script type="text/javascript">
                      $('#logoutLink').click(function(e) {
                          $.ajax({
                              type: 'get',
                              url: 'http://e-gov-bandung.tk/dukcapil/api/public/auth/logout',
                              success: function(data) {
                              },
                              error: function(data) {
                                  // alert(data);
                              }
                          });
                      })
                  </script>
		        <!-- <li><a href="about.html">ITPMB</a></li> 
		        <li><a href="contact.html">contact</a></li> -->
		      </ul>
		      <!-- <form class="navbar-form navbar-right" role="search">
		        <div class="form-group my_search">
		          <input type="text" class="form-control" placeholder="Search">
		        </div>
		        <button type="submit" class="btn btn-default">Search</button>
		      </form> -->
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		</div>
		<div class="row slider text-center">
			<div class="col-md-8">
					<div class="col-md-10 slider_text">
						<h2>Mau buat usaha?</h2>
						<h3>Daftar dulu yuk!</h3><br>
						<a href="#pilihanIzin"><button class="btn_style">Ajukan Izin</button></a> &nbsp;
						<a href="user-profile/{{$idlogin}}?id={{$idlogin}}"><button class="btn_style">Perpanjang izin</button></a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="slider_img">
						<img src="{{ asset('images/pic1.png') }}" alt="" class="img-responsive"/>
					</div>
				</div>
			</div>
	</div>
</div>
<div class="main"><!-- start main -->
<div class="container main">
	<div class="row grids_of_3" id="pilihanIzin">
				<div class="col-md-4 grid1_of_3">
					  <h2>Toko Modern,
					  	<br>Pusat Perbelanjaan,
					  	<br>Pengelolaan Pasar
					  </h2>
					  <img src="images/icon1.png" class="img-responsive"/>
					  <p>IUTM,IUPP, dan IUPPT adalah izin untuk dapat melaksanakan usaha pusat perbelanjaan dan toko modern yang diterbitkan oleh pemerintah Kota Bandung</p>
				     <div class="rd_more1">
						<a href="permohonan/ajukan-IUTM-IUPP-IUPPT?id={{$idlogin}}"><button class="btn_style">Ajukan Izin</button></a>
					</div>					
				</div>
				<div class="col-md-4 grid1_of_3">
					<h2><br>Penjualan minuman beralkohol</h2>
					  <img src="images/icon2.png" class="img-responsive"/>
					  <p>ITPMB adalah izin tertulis yang diterbitkan oleh pemerintah Kota Bandung untuk tempat penjualan minuman beralkohol kepada orang atau badan yang akan melakukan penjualan minuman beralkohol</p>
				      <div class="rd_more1">
						<a href="permohonan/ajukan-ITPMB?id={{$idlogin}}"><button class="btn_style">Ajukan Izin</button></a>
					</div>					
				</div>
				<div class="col-md-4 grid1_of_3">
					<h2><br>Pendaftaran <br>waralaba</h2>
					  <img src="images/icon3.png" class="img-responsive"/>
					  <p>STPW adalah bukti pendaftaran prospektus/perjanjian yang diberikan kepada pemberi waralaba dan/atau penerima waralaba</p>
				     <div class="rd_more1">
						<a href="permohonan/ajukan-STPW?id={{$idlogin}}"><button class="btn_style">Ajukan Izin</button></a>
					</div>	
				</div>
			    <div class="clearfix"></div>
	</div>
	<!-- <div class="row grids_btm top">
		<div class="col-md-6">
			<div class="grid_list">
				<div class="images_1_of_1">
					<p>27</p>
				</div>
				<div class="grid_1_of_1">
					  	<h3>Lorem Ipsum is simply text </h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,<span class="hide">sed do eiusmod tempor incididunt magna aliqua.</span> </p>	   
	 			</div>
	 			 <div class="clearfix"></div>
			</div>
			</div>
			<div class="col-md-6">
				<div class="grid_list">
				<div class="images_1_of_1">
					<p>0$</p>
				</div>
					<div class="grid_1_of_1">
					  	<h3>Lorem Ipsum is simply text </h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,<span class="hide">sed do eiusmod tempor incididunt magna aliqua.</span> </p>   
	 				</div>
				</div>
				 <div class="clearfix"></div>
			</div>
	</div> 
	<div class="row grids_btm top">
		<div class="col-md-6">
			<div class="grid_list">
				<div class="images_1_of_1">
					<p>0$</p>
				</div>
				<div class="grid_1_of_1">
					  	<h3>Lorem Ipsum is simply text </h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,<span class="hide">sed do eiusmod tempor incididunt magna aliqua.</span> </p>	   
	 			</div>
	 			 <div class="clearfix"></div>
			</div>
			</div>
			<div class="col-md-6">
				<div class="grid_list">
				<div class="images_1_of_1">
					<p>35</p>
				</div>
					<div class="grid_1_of_1">
					  	<h3>Lorem Ipsum is simply text </h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,<span class="hide">sed do eiusmod tempor incididunt magna aliqua.</span> </p>   
	 				</div>
				</div>
				 <div class="clearfix"></div>
			</div>
	</div>-->
</div>
</div>
<div class="footer_bg"><!-- start footre -->
	<div class="container">
		<div class="row  footer">
			<div class="col-md-3 span1_of_4">
				<h4>about us</h4>
				<p><b>Aplikasi Izin Usaha dan Sarana Perdagangan</b>
					<br>
					Aplikasi ini dibuat untuk mempermudah warga Kota Bandung untuk mengajukan permohonan izin usaha dan sarana perdagangan. Aplikasi ini mengurangi jumlah berkas yang harus diberikan pemohon dan mempersingkat jalur birokrasi.
				</p>				
			</div>
			<div class="col-md-3 span1_of_4">
				<h4>Address</h4>
				<p class="top">Dinas Koperasi, UKM dan Perindustrian Perdagangan</p>
				<p>Jl. Kawaluyaan No. 2 Bandung</p>
				<p>Phone:(022) 730 83 58</p>
				<p>Fax: (022) 730 83 58</p>
			</div>
			
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<div class="footer_btm"><!-- start footer_btm -->
	<div class="container">
		<div class="row  footer1">
			<div class="col-md-5">
				<div class="soc_icons">
					<ul class="list-unstyled">
						<li><a class="icon1" href="#"></a></li>
						<li><a class="icon2" href="#"></a></li>
						<li><a class="icon3" href="#"></a></li>
						<li><a class="icon4" href="#"></a></li>
						<li><a class="icon5" href="#"></a></li>
						<div class="clearfix"></div>
					</ul>	
				</div>
			</div>
			<div class="col-md-7 copy">
				<p class="link text-right"><span>&#169; All rights reserved | Design by&nbsp;<a href="http://w3layouts.com/"> W3Layouts</a></span></p>
			</div>
		</div>
	</div>
</div>
<script>
	$(function() {
	  $('a[href*=#]:not([href=#])').click(function() {
	    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
	      var target = $(this.hash);
	      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
	      if (target.length) {
	        $('html,body').animate({
	          scrollTop: target.offset().top
	        }, 1000);
	        return false;
	      }
	    }
	  });
	});
</script>
</body>
</html>
<!DOCTYPE html>

<html>
<head>
	<title></title>
	<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
	<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<link rel="stylesheet" type="text/css" href="fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/Home.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/customebootrap.css">
</head>
<body class='fontGotham'>
	<section class='wrapper container-fluid'>
		<!--Start Menu Atas-->
		<header class='row'>
			<section class='atas'>
				<div class='container'>
					<div class='navigasi'>
						<ul class='menu nav navbar-nav pull-right visible-lg visible-md'>
							<li class='signup'>Sign Up</li>
							<li>Login</li>
						</ul>
						<ul class='menu nav visible-xs visible-sm mulus'>
							<li class='signup '>Sign Up</li>
							<li>Login</li>
						</ul>
					</div>
				</div>
			</section>
			<section class='banner col-md-12 col-xs-12 col-lg-12 col-sm-12'>
				<div class='container'>
					<div class='Logo col-md-5 col-xs-5 col-lg-5 col-sm-5'>
						<h1 class='visible-lg visible-md'>SMART TOKO</h1>

						<h2 class='visible-sm'>SMART TOKO</h2>
						<h3 class='visible-xs'>SMART TOKO</h3>
					</div>
					<div class='search col-md-7 col-lg-7 col-sm-7 col-xs-7'>
						<form class="navbar-form" role="search">
					        
					          <input type="text" class="form-control col-md-5" placeholder="Cari Barang...">
					        
					    </form>
					</div>
				</div>
			</section>
			<section class='bannertwo col-md-12 col-xs-12 col-sm-12 col-lg-12'>
				
					<nav role="navigation" class="navbar-default container">
						    <!-- Brand and toggle get grouped for better mobile display -->
						    <div class="navbar-header">
						        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
						        	<center>
						            <span class="sr-only">Toggle navigation</span>
						            <span class="icon-bar"></span>
						            <span class="icon-bar"></span>
						            <span class="icon-bar"></span>
						        </center>
						        </button>
						       
						    </div>
						    <!-- Collection of nav links and other content for toggling -->
						    <div id="navbarCollapse" class="collapse navbar-collapse">
						        <ul class="nav navbar-nav">
						            <li><a href="#">Promo Buku</a></li>
						            <li><a href="#">Personal Care</a></li>
						            <li><a href="#">Hobi</a></li>
						            <li><a href="#">Kamera</a></li>
						            <li><a href="#">Handphone</a></li>
						            <li><a href="#">Elektronik</a></li>
						            <li><a href="#">Sepeda</a></li>
						            <li><a href="#">Fashion</a></li>
						        </ul>
						       
						    </div>
					</nav>
				
			</section>

		</header> <!--End Menu Atas-->
		<section class='row'>
			<section class='menuSamping col-lg-3 col-md-3 col-xs-12'>
				<div class='row backgroundmerah'>
					<div class='col-lg-2 col-md-1'></div>
					<div class='Iduser col-lg-10 col-md-11'>
						<div class='col-lg-5 col-md-6 col-sm-12 col-xs-12'>
							<img src="img/ika.png" alt='...' class='center-block img-circle imageprofil img-responsive'>
						</div>
							<div class='col-lg-7 col-md-6 col-xs-12 text-center hidden-lg hidden-md'>
								<h5 class='aprilia'>Aprilia S</h5>
								<span class='jobs'>Founder Asia Bagus</span>
							</div>
							<div class='col-lg-7 col-md-6 col-xs-12 hidden-xs hidden-sm'>
								<h5 class='aprilia'>Aprilia S</h5>
								<span class='jobs'>Founder Asia Bagus</span>
							</div>
					</div>
				</div>
				<div class='row menuku'>
					<ul>
						<li><span>Profile</span></li>
						<li><span>Pemantau Pembelian</span></li>
						<li><span>Order Management</span></li>
						<li><span>SmartWallet</span></li>
						<li><span>My Review</span></li>
						<li><span>Logout</span></li>
					</ul>
				</div>
			</section>
			<section class='menuData col-lg-9 col-md-9 col-xs-12 col-sm-12'>
				<section class='wrappering'>
					<div class='header'>
						<h2 class='text-center'>Order Management</h2>
					</div>

					<div class='well tabs'>
						<ul class="nav nav-tabs nav-justified" role="tablist">
						  <li role="presentation" class="active"><a href="#orba" aria-controls="orba" role="tab" data-toggle="tab">OrderBaru</a></li>
						  <li role="presentation"><a href="#konpeng" aria-controls="konpeng" role="tab" data-toggle="tab">Konfirmasi Pengiriman</a></li>
						  <li role="presentation"><a href="#stapeng" aria-controls="stapeng" role="tab" data-toggle="tab">Status Pengiriman</a></li>
						  <li role="presentation"><a href="#daftra" aria-controls="daftra" role="tab" data-toggle="tab">Daftar Transaksi</a></li>
						</ul>

						<div class="tab-content borderhitam" style='background-color:#EAEAEA;'> <!--Include data terpisah-->
						  <div role="tabpanel" class="tab-pane fade in active" id="orba">
						  		...
						  </div>
						  <div role="tabpanel" class="tab-pane fade" id="konpeng">
						  	...
						  </div>
						  <div role="tabpanel" class="tab-pane fade" id="stapeng">
						  		...
						  </div>
						  <!--Start-->
						  <div role="tabpanel" class="tab-pane fade" id="daftra">
						  		<section>
	<!--Data Pembeli-->
	<br>
	<fieldset class='well the-fieldset borderblackfield'>
		<div class='row'>
			<div class='col-lg-4 col-md-4 col-xs-12 col-sm-4'>
				<input type='text' class='form-control col-lg-12 col-md-12 col-xs-12 col-sm-12' placeholder='INV/ Nama Pembeli'>
			</div>

			<div class='col-lg-2 col-md-2 col-xs-12 col-sm-2'>
				<div class="dropdown">
						<button class="col-md-12 col-xs-12 btn btn-default dropdown-toggle" style='padding:5px;'type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
										    Status
										    <span class="caret"></span>
						</button>
						<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
										    <li><a href="#">Ditolak</a></li>
										    <li><a href="#">Diterima</a></li>
						</ul>
				</div>
			</div>
			<div class='col-lg-3 col-md-3 col-xs-10 col-sm-3 hidden-xs'>
				<input type='text' class='form-control col-md-12 col-xs-12 col-sm-12' placeholder="    /        /"/>
			</div>
			<div class='col-lg-3 col-md-3 col-xs-10 col-sm-3 visible-xs' style='margin-top:10px;'>
				<input type='text' class='form-control col-md-12 col-xs-12 col-sm-12' placeholder="    /        /"/>
			</div>
			<div class='col-lg-1 col-md-1 col-xs-1 col-sm-1 visible-xs' style='padding-left:0px; margin-top:10px;'>
				<img src="img/date.png" class='asu'>
			</div>
			<div class='col-lg-1 col-md-1 col-xs-1 col-sm-1 hidden-xs' style='padding-left:0px;'>
				<img src="img/date.png" class='asu'>
			</div>
			<div class='col-md-2 col-md-2 col-sm-2 col-xs-12'>
				
					<div style='background-color:#a1a1a1; color:#FFFFFF; padding:5px; cursor:pointer; margin-top:10px;' class='visible-xs'>
						<span>Cari</span><i class='fa fa-search'></i>
					</div>
					<div style='background-color:#a1a1a1; color:#FFFFFF; padding:5px; cursor:pointer;' class='visible-sm visible-md visible-lg'>
						<span>Cari</span><i class='fa fa-search' style='margin-left:5px;'></i>
					</div>
			</div>
		</div>
			<div class='row identitas'>
									<div class='text-center head'>
										<div class='col-md-4 col-xs-4'>
											<span>Nama: Customer Satu</span>
										</div>
										<div class='col-md-4 col-xs-4'>
											<span>Invoice: AB5EI</span>
										</div>
										<div class='col-md-4 col-xs-4'>
											<span>Tgl. Transaksi: 15-03-2016</span>
										</div>
									</div>
			</div>
			
			<!--Start Info Table-->
			<div class='row'>

				<div class='wrappers'>
								<div class='col-lg-5 col-md-5 col-xs-12 col-sm-5'>
									<table class="table data">
										 <tr>
										 	<td>No. Telp</td>
										 	<td>085743699897</td>
										 </tr>
										 <tr>
										 	<td>Alamat</td>
										 	<td>Jalan Kapten Patimurah no 50 rt 11 rt 04 simpang IV sipin</td>
										 </tr>
										 <tr>
										 	<td>Provinsi</td>
										 	<td>Jambi</td>
										 </tr>
										 <tr>
										 	<td>Kecamatan</td>
										 	<td>Kramat Jati</td>
										 </tr>
										 <tr>
										 	<td>Kode Pos</td>
										 	<td>13510</td>
										 </tr>
										</table>
									</div>
									<div class='col-md-2 col-xs-12 col-sm-2 col-lg-2 visible-xs' style='border-bottom:3px solid black;'></div>
									<div class='col-md-2 col-xs-12 col-sm-2 col-lg-2 hidden-xs'></div>
									<div class='col-lg-4 col-md-4 col-xs-12 col-sm-2'>
										<table class='table data'>
											<tr>
											 	<td>Nama</td>
											 	<td>JNE</td>
											 </tr>
											 <tr>
											 	<td>Paket</td>
											 	<td>Reguler</td>
											 </tr>
											 <tr>
											 	<td>Total Berat</td>
											 	<td>900 gr</td>
											 </tr>

											 <tr>
											 	<td>Total Biaya</td>
											 	<td>9000</td>
											 </tr>
										</table>
										
									</div>
						</div>
			</div><!--End Info-->
			<div class='row sembunyikan'>
				<div class='pull-right buttonup'>
						<span>Sembunyikan</span><img src="img/Untitled-1.png">
				</div>
			</div>
</fieldset><!--End Data Pembeli-->
	<!--Start Info Status-->
<fieldset class="well the-fieldset borderblackfield" style='padding:0px;'>
	 <legend class='text-center' style='color:#ff9900;'><span style='background:#E7E7E7;'>Info Status</span></legend>
	 <div class='row'>
	 	<div class='col-md-12 col-xs-12'>
	 		<table class='table table-striped table-bordered'>
		 		<thead class='text-center'>
		 				<td>Tanggal Status</td>
		 				<td>Posisi</td>
		 				<td>Detail Status</td>
		 		</thead>
		 		<tbody>
		 			<tr>
		 				<td><span>13-03-2016</span> <span>21:23:21</span></td>
		 				<td><span>Ekspedisi</span></td>
		 				<td><span>Order dikirim kepada pembeli</span></td>
		 			</tr>
		 			<tr>
		 				<td><span>13-03-2016</span> <span>21:23:21</span></td>
		 				<td><span>Penjual</span></td>
		 				<td><span>Order diterima</span></td>
		 			</tr>
		 			<tr>
		 				<td><span>13-03-2016</span> <span>21:23:21</span></td>
		 				<td><span>Ekspedisi</span></td>
		 				<td><span>Melakukan Check Out</span></td>
		 			</tr>
		 		</tbody>	
	 		</table>	

	 	</div>
	 	 

	 </div>
	
	
</fieldset>
<!--End Info Status-->

	<!--Start Barang Yang Dibeli-->
<fieldset class="well the-fieldset">
       <legend class='text-center' style='color:#ff9900;'><span style='background:#E7E7E7;'>Barang yang dibeli</span></legend>
	    <section class='col-lg-12 col-md-12 col-xs-12'>
		       		<div class='row item'>
					       			<div class='col-lg-2 col-md-2 col-sm-12 col-xs-12'>
					       				<img src="img/item_03.jpg" alt='...' class='center-block img-responsive'>
					       			</div>
					       			<div class='defenisi col-lg-5 col-md-5 col-xs-12 col-sm-12'>

					       				<!--Mobile-->
					       				<h5 class='text-center hidden-lg hidden-md'><b>New Balance Casual Sneakers Navy</b></h5>
					       				
					       				<span class='khusus text-center hidden-lg hidden-md'>Berat: 200 gr</span>

					       				<!--Dekstop-->
					       				<h5 class='hidden-sm hidden-xs'><b>New Balance Casual Sneakers Navy</b></h5>
					       				
					       				<span class='khusus hidden-sm hidden-xs'>Berat: 200 gr</span>
					       			</div>
					       			<div class='col-lg-3 col-md-3 col-xs-12 col-sm-12 somplak'>
					       				<span class='khusus page-header visible-xs visible-sm'>Pembelian</span>
					       				<span class='khusus'>Rp. 518.000 X 1</span>


					       			</div>
					       			<hr class='visible-sm visible-xs'>
					       			<div class='col-md-2 col-xs-12 col-sm-12 somplak'>

					       				<span class='khusus page-header text-center visible-xs visible-sm'>Total</span>
					       				<span class='khusus hidden-sm hidden-xs'>Rp.699.000</span>
					       				<span class='khusus hidden-xs hidden-sm'>200gr</span>
					       				<span class='khusus text-center visible-xs visible-sm'>Rp.699.000</span>
					       				<span class='khusus text-center visible-xs visible-sm'>200gr</span>
					       			</div>
					       			
					       			
					</div>
					<div class='row item'>
					       			<div class='col-lg-2 col-md-2 col-sm-12 col-xs-12'>
					       				<img src="img/item_14.jpg" alt='...' class='center-block img-responsive'>
					       			</div>
					       			<div class='defenisi col-lg-5 col-md-5 col-xs-12 col-sm-12'>

					       				<!--Mobile-->
					       				<h5 class='text-center hidden-lg hidden-md'><b>New Balance Casual Sneakers Navy</b></h5>
					       				
					       				<span class='khusus text-center hidden-lg hidden-md'>Berat: 200 gr</span>

					       				<!--Dekstop-->
					       				<h5 class='hidden-sm hidden-xs'><b>New Balance Casual Sneakers Navy</b></h5>
					       				
					       				<span class='khusus hidden-sm hidden-xs'>Berat: 200 gr</span>
					       			</div>
					       			<div class='col-lg-3 col-md-3 col-xs-12 col-sm-12 somplak'>
					       				<span class='khusus page-header visible-xs visible-sm'>Pembelian</span>
					       				<span class='khusus'>Rp. 518.000 X 1</span>


					       			</div>
					       			<hr class='visible-sm visible-xs'>
					       			<div class='col-md-2 col-xs-12 col-sm-12 somplak'>

					       				<span class='khusus page-header text-center visible-xs visible-sm'>Total</span>
					       				<span class='khusus hidden-sm hidden-xs'>Rp.699.000</span>
					       				<span class='khusus hidden-xs hidden-sm'>200gr</span>
					       				<span class='khusus text-center visible-xs visible-sm'>Rp.699.000</span>
					       				<span class='khusus text-center visible-xs visible-sm'>200gr</span>
					       			</div>
					       			
					       			
					</div>
					<div class='row item'>
					       			<div class='col-lg-2 col-md-2 col-sm-12 col-xs-12'>
					       				<img src="img/item_02.jpg" alt='...' class='center-block img-responsive'>
					       			</div>
					       			<div class='defenisi col-lg-5 col-md-5 col-xs-12 col-sm-12'>

					       				<!--Mobile-->
					       				<h5 class='text-center hidden-lg hidden-md'><b>New Balance Casual Sneakers Navy</b></h5>
					       				
					       				<span class='khusus text-center hidden-lg hidden-md'>Berat: 200 gr</span>

					       				<!--Dekstop-->
					       				<h5 class='hidden-sm hidden-xs'><b>New Balance Casual Sneakers Navy</b></h5>
					       				
					       				<span class='khusus hidden-sm hidden-xs'>Berat: 200 gr</span>
					       			</div>
					       			<div class='col-lg-3 col-md-3 col-xs-12 col-sm-12 somplak'>
					       				<span class='khusus page-header visible-xs visible-sm'>Pembelian</span>
					       				<span class='khusus'>Rp. 518.000 X 1</span>


					       			</div>
					       			<hr class='visible-sm visible-xs'>
					       			<div class='col-md-2 col-xs-12 col-sm-12 somplak'>

					       				<span class='khusus page-header text-center visible-xs visible-sm'>Total</span>
					       				<span class='khusus hidden-sm hidden-xs'>Rp.699.000</span>
					       				<span class='khusus hidden-xs hidden-sm'>200gr</span>
					       				<span class='khusus text-center visible-xs visible-sm'>Rp.699.000</span>
					       				<span class='khusus text-center visible-xs visible-sm'>200gr</span>
					       			</div>
					       			
					       			
					</div>
					
		</section>					       
</fieldset><!--End Barang Yang Dibeli-->
<fieldset class='well the-fieldset borderblackfield'>
			<div class='row identitas'>
									<div class='text-center head'>
										<div class='col-md-4 col-xs-4'>
											<span>Nama: Customer Dua</span>
										</div>
										<div class='col-md-4 col-xs-4'>
											<span>Invoice: AB5EI</span>
										</div>
										<div class='col-md-4 col-xs-4'>
											<span>Tgl. Transaksi: 17-03-2016</span>
										</div>
									</div>
									
			</div>
			
			<!--Start Info Table-->
			<div class='row'>
						<div class='wrappers displaynone'>
								<div class='col-lg-5 col-md-5 col-xs-12 col-sm-5'>
									<table class="table data">
										 <tr>
										 	<td>No. Telp</td>
										 	<td>085743699897</td>
										 </tr>
										 <tr>
										 	<td>Alamat</td>
										 	<td>Jalan Kapten Patimurah no 50 rt 11 rt 04 simpang IV sipin</td>
										 </tr>
										 <tr>
										 	<td>Provinsi</td>
										 	<td>Jambi</td>
										 </tr>
										 <tr>
										 	<td>Kecamatan</td>
										 	<td>Kramat Jati</td>
										 </tr>
										 <tr>
										 	<td>Kode Pos</td>
										 	<td>13510</td>
										 </tr>
										</table>
									</div>
									<div class='col-md-2 col-xs-12 col-sm-2 col-lg-2 visible-xs' style='border-bottom:3px solid black;'></div>
									<div class='col-md-2 col-xs-12 col-sm-2 col-lg-2 hidden-xs'></div>
									<div class='col-lg-4 col-md-4 col-xs-12 col-sm-2'>
										<table class='table data'>
											<tr>
											 	<td>Nama</td>
											 	<td>JNE</td>
											 </tr>
											 <tr>
											 	<td>Paket</td>
											 	<td>Reguler</td>
											 </tr>
											 <tr>
											 	<td>Total Berat</td>
											 	<td>900 gr</td>
											 </tr>

											 <tr>
											 	<td>Total Biaya</td>
											 	<td>9000</td>
											 </tr>
										</table>
										
									</div>
						</div>
			</div><!--End Info-->
			<div class='row sembunyikan'>
				<div class='pull-right buttonup'>
						<span>Sembunyikan</span><img src="img/Untitled-1.png">
				</div>
			</div>
</fieldset><!--End Data Pembeli-->
</section>
						  </div>
						  <!--End-->
						</div>	
						
					</div>	
				</section>
			</section>
		</section>

		<footer class='row'>
			<div class='container'>
				<div class='col-md-6 col-xs-6 col-sm-6'>
					<span class='pull-left visible-xs'>Copyright &#169 2016 smartbisnis.co.id. All Right Reserved</span>
					<span class='copyright pull-left hidden-xs'>Copyright &#169 2016 smartbisnis.co.id. All Right Reserved</span>
				</div>
				<div class='col-md-6 col-xs-6 col-sm-6'>
					<img src="img/telkomlogo.png" alt='...' class='pull-right img-responsive'>
				</div>
			</div>
		</footer>
	
	</section>

</body>
</html>
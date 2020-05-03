

<!DOCTYPE html>
<html lang="en">
<head>
<title>PIORA</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Health medical template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/styles/bootstrap4/bootstrap.min.css">
<link href="<?php echo base_url();?>assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/styles/responsive.css">
</head>
<body>

<div class="super_container">
	<!-- Navbar -->
	<div class="menu trans_500">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<div class="menu_close_container"><div class="menu_close"></div></div>
			<form action="<?php echo base_url('Welcome/hasil')?>" action="GET" id="search_container_form" class="search_container_form">
				<input type="text" name="cari" class="search_container_input" placeholder="cari obat" required="required">
												<button  class="search_container_button"><i class="fa fa-search" aria-hidden="true"></i></button>
													</form>
			<ul>
			<li class="menu_item"><a href="<?php echo site_url('index'); ?>">Home</a></li>
				<li class="menu_item"><a href="<?php echo site_url('artikel'); ?>">Artikel</a></li>
				<li class="menu_item"><a href="<?php echo site_url('Welcome/obat'); ?>">Obat</a></li>
				<li class="menu_item"><a href="<?php echo site_url('dic'); ?>">Keluhan</a></li>
				<li class="menu_item"><a href="<?php echo site_url('faq'); ?>">FAQ</a></li>
				
			</ul>
		</div>
		<div class="menu_social">
			<ul>
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
	</div>

	<!-- Home -->

		<div>
		<!-- Header -->
		<header class="header" id="header">
			<div>
				<div class="header_top">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
									<div class="logo">
										<a href="<?php echo site_url('index'); ?>">PIORA<span><sup>+</sup></span></a>	
									</div>
									<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header_nav" id="header_nav_pin">
					<div class="header_nav_inner">
						<div class="header_nav_container">
							<div class="container">
								<div class="row">
									<div class="col">
										<div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
										<nav class="main_nav">
												<ul class="d-flex flex-row align-items-center justify-content-start">
													<li ><a href="<?php echo site_url('index'); ?>">Home</a></li>
													<li><a href="<?php echo site_url('artikel'); ?>">Artikel</a></li>
													<li><a href="<?php echo site_url('Welcome/obat'); ?>">Obat</a></li>
													<li><a href="<?php echo site_url('dic'); ?>">Drug interaction checker</a></li>
													<li><a href="<?php echo site_url('faq'); ?>">FAQ</a></li>
														</ul>
											</nav>
											<div class="search_content d-flex flex-row align-items-center justify-content-end ml-auto">
											<form action="<?php echo base_url('Welcome/hasil')?>" action="GET" id="search_container_form" class="search_container_form">
										<input id="textbox" name="cari" type="text" class="search_container_input" placeholder="cari obat" required="required">
												<button id="start-btn" class="search_container_button"><i class="fa fa-microphone" aria-hidden="true"></i></button>
													</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</header>
	</div>


	<!--PenjelasanObat-->
	<div class="home_read-obat" >
		<div class="container">

			

			<?php foreach ($isi->result() as $dt):?>
			<h1><br><br><br>
			</h1>

			<h2><br>Info Obat<br><br></h2>

			<div class="gol-obat"><img src="<?php echo base_url('assets/images/' . $dt->golongan_obat);?>.png" title="<?php $dt->golongan_obat?>" alt="<?php $dt->golongan_obat?>" ></div>
		

			<table class="table table-bordered">

	      	  <tr>
		      	<th>Nama Generik Obat</th>
		      	<td><?php echo $dt->nama_generik ?></td>
		      </tr>
		      <tr>
		      	<th>Nama Merk Dagang Obat</th>
		      	<td><?php echo $dt->merek_dagang ?></td>
		      </tr>
			  <tr>
		      	<th>Indikasi Obat</th>
		        <td><?php echo $dt->indikasi_obat ?></td>
			  </tr>
			  <tr>
		      	<th>Kontra Indikasi Obat</th>
		        <td><?php echo $dt->kontraindikasi_obat ?></td>
			  </tr>
		      <tr>
		      	<th>Bentuk Obat</th>
				<td><?php echo $dt->bentuk ?></td>
			  </tr>
			  <tr>
			  	<th>Reaksi Obat Lain</th>
				<td><?php echo $dt->reaksi_obatlain ?></td>
			  </tr>
			  <tr>
			  	<th>Efek Samping </th>
				<td><?php echo $dt->efek_samping?></td>
			  </tr>

			  <tr>
			  	<th>Aturan Tambahan </th>
				<td><?php echo $dt->aturan_tambahan?></td>
			  </tr>
			  <tr>
			  	<th>Golongan Obat </th>
				<td><?php echo $dt->golongan_obat?></td>
			  </tr>
			  
			  

  			</table>

			  <br>
			  <div style="padding-bottom:60px">
			  <?php echo $dt->deskripsi ?>
			  <br>
			  <br>
			  <br>
				
  			<?php endforeach ?>
		</div>
	</div>






	<!-- Footer -->
	<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url();?>/assets/images/footer.jpg" data-speed="0.8">
		</div>

		<div class="footer_content">
			<div class="container">
				<div class="row">

					<!-- Footer About -->
					<div class="col-lg-3 footer_col">
						<div class="footer_about">
							<div class="logo">
								<a href="#">PIORA<span>+</span></a>
							</div>
							<div class="footer_about_text">Pusat Informasi Obat ITERA.</div>
							<div class="footer_social">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="copyright">
									Copyright &copy;<script>document.write(new Date().getFullYear());</script> Piora | Pusat Informasi obat Institut Teknologi Sumatera
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="<?php echo base_url();?>/assets/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo base_url();?>/assets/styles/bootstrap4/popper.js"></script>
<script src="<?php echo base_url();?>/assets/styles/bootstrap4/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/easing/easing.js"></script>
<script src="<?php echo base_url();?>/assets/plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?php echo base_url();?>/assets/js/custom.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/script.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>PIORA</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Health medical template project">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/styles/bootstrap4/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/styles/bootstrap4/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/js/jquery-3.3.1.min.js">
	
	<link href="<?php echo base_url(); ?>/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/styles/artikel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/styles/responsive.css">


	 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>/assets/styles/druginteractionchecker.css">
  





</head>

<body>

<div class="super_container">

		<!-- Navbar -->

		<div class="menu trans_500">
			<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
				<div class="menu_close_container">
					<div class="menu_close"></div>
				</div>
				<form action="<?php echo base_url('Welcome/hasil')?>" action="GET" id="search_container_form" class="search_container_form">
				<input type="text" name="cari" class="search_container_input" placeholder="cari obat" required="required">
												<button  class="search_container_button"><i class="fa fa-search" aria-hidden="true"></i></button>
													</form>
				<ul>
				<li class="menu_item"><a href="<?php echo site_url('index'); ?>">Home</a></li>
					<li class="menu_item"><a href="<?php echo site_url('Artikel'); ?>">Artikel</a></li>
					<li class="menu_item"><a href="<?php echo site_url('Welcome/obat'); ?>">Obat</a></li>
					<li class="menu_item"><a href="<?php echo site_url('dic'); ?>">Drug interaction checker</a></li>
					<li class="menu_item"><a href="<?php echo site_url('faq'); ?>">FAQ</a></li>
				</ul>
			</div>
			<div class="menu_social">
				<ul>
					<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
				</ul>
			</div>
		</div>

		<!-- Home -->

		<div class="home">
		


			<!-- Header -->

			<header class="header" id="header">
				<div>
					<div class="header_top">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
										<div class="logo">
											<a href="<?php echo site_url('index'); ?>" style="color:black;">PIORA<span><sup>+</sup></span></a>
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
														<li><a href="<?php echo site_url('dic'); ?>">Drug Interaction Checker</a></li>
														<li><a href="<?php echo site_url('faq'); ?>">FAQ</a></li>
														</ul>
												</nav>
												<div class="search_content d-flex flex-row align-items-center justify-content-end ml-auto" > 
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

			<div class="home_container">
				<div class="container">
					<div class="row">
						<div class="col" style="margin-top: 100px;text-align:center;">

								<h1>Data Covid 19</h1>
								<h3>Bersama kita lewati pandemi</h3>
								<h5>#TetapDirumah #DirumahAja #CuciTangan #JagaKesehatan</5>
							
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- Artikel / News -->

		<div class="news">
			<div class="container">
				<div class="row " style=" ">
					<!-- News Posts -->
					<div class="col-lg-12">

					<?php
					
						$get_globalposf  = file_get_contents('https://api.kawalcorona.com/positif');

						$data_globalposf = json_decode($get_globalposf, true);

						$global_posf = $data_globalposf["value"];

			

						$get_globalrec  = file_get_contents('https://api.kawalcorona.com/sembuh');
					
						$data_globalrec = json_decode($get_globalrec, true);

						$global_rec = $data_globalrec["value"];


						$get_globaldied  = file_get_contents('https://api.kawalcorona.com/meninggal');

						$data_globaldied = json_decode($get_globaldied, true);

	
						$global_died = $data_globaldied["value"];
	

					?>
						

					<div class="row">
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4" style="margin-bottom: 40px;">
								<div class="card bg-danger img-card box-primary-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL POSITIF</p>
												<h2 class="mb-0 number-font"><?php echo $global_posf ?></h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"> <img src= "<?php echo base_url(); ?>/assets/images/sad-u6e.png" width="50" height="50" alt="Positif"> </div>
										</div>
									</div>
								</div>

							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4 "style="margin-bottom: 40px;">
								<div class="card bg-success img-card box-secondary-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL SEMBUH</p>
												<h2 class="mb-0 number-font"><?php echo $global_rec ?></h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"> <img src="<?php echo base_url(); ?>/assets/images/happy-ipM.png" width="50" height="50" alt="Positif"> </div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							<div class="col-sm-12 col-md-6 col-lg-6 col-xl-4" style="margin-bottom: 40px;">
								<div class="card  bg-secondary img-card box-success-shadow">
									<div class="card-body">
										<div class="d-flex">
											<div class="text-white">
												<p class="text-white mb-0">TOTAL MENINGGAL</p>
												<h2 class="mb-0 number-font"><?php echo $global_died ?></h2>
												<p class="text-white mb-0">ORANG</p>
											</div>
											<div class="ml-auto"> <img src="<?php echo base_url(); ?>/assets/images/emoji-LWx.png" width="50" height="50" alt="Positif"> </div>
										</div>
									</div>
								</div>
							</div><!-- COL END -->
							
							<br>
							<div class="col-sm-12 text-center" style="margin-bottom: 40px;"><p>Sumber data : Kementerian Kesehatan & JHU. API By Ethnical Hacker Indonesia - Kawalcorona.com</p></div>
						</div>



						<?php 
					


					$get_indonesia =  file_get_contents('https://api.kawalcorona.com/indonesia');

					$data_indonesia = json_decode($get_indonesia, true);

					$indo_pos = $data_indonesia[0]["positif"];
					$indo_rec = $data_indonesia[0]["sembuh"];
					$indo_died = $data_indonesia[0]["meninggal"];

		

					// $namapro = $data_provinsi["name"];
					// $positif = $data_provinsi["value"];

					?>

							
							<!-- COL END -->

							<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xl-16">
								<div class="card overflow-hidden bg-white work-progress">
									<div class="card-header">
										<h3 class="card-title">Data Kasus Coronavirus di Indonesia</h3>
									</div>
									<div class="card-body">
									<div class="row mt-6">
											<div class="col text-center">
												<h5 class="font-weight-normal mt-2">POSITIF</h5>
												<h3 class="text-xxl mb-1 social-content  number-font"><?php echo $indo_pos ?></h3>
												<p class="mb-0 text-muted"><span class="text-lg font-weight-700"></span>ORANG</p>
												
											</div>
											<div class="col text-center">
												<h5 class="font-weight-normal mt-2">SEMBUH</h5>
												<h3 class="text-xxl mb-1 social-content danger number-font"><?php echo $indo_rec ?></h3>
												<p class="mb-0 text-muted"><span class="text-lg font-weight-700"></span>ORANG</p>
												
											</div>
											<div class="col text-center">
												<h5 class="font-weight-normal mt-2">MENINGGAL</h5>
												<h3 class="text-xxl mb-1 social-content  number-font"><?php echo $indo_died ?></h3>
												<p class="mb-0 text-muted"><span class="text-lg font-weight-700"></span>ORANG</p>
											
											</div>
									</div>
								</div>
							</div><!-- COL END -->

							<br>

							<!-- PENGAMBILAN DATA DARI API -->


					<?php 
					
					
					$get_provinsi =  file_get_contents('https://api.kawalcorona.com/indonesia/provinsi/');


					$data_provinsi = json_decode($get_provinsi, true);

					// $get_indonesia =  file_get_contents('https://api.kawalcorona.com/indonesia');

					// $data_indonesia = file_get_contents($get_indonesia, true);

					// $indo_pos = $data_indonesia["positif"];
					// $indo_rec = $data_indonesia["sembuh"];
					// $indo_died = $data_indonesia["meninggal"];

		

					// $namapro = $data_provinsi["name"];
					// $positif = $data_provinsi["value"];

					?>







							<!-- PENGAMBILAN DATA DARI API -->


							<!-- ROW-3 OPEN -->
						<div class="row row-cards">
							<div class="col-sm-12 col-md-12 col-lg-12 col-xl-14">
								<div class="card">
									<div class="card-header ">
										<h3 class="card-title">Data Kasus Coronavirus di Indonesia Berdasarkan Provinsi</h3>
									</div>
									<div class="card-body">
										<div class="table-responsive service">
										<div class="table-wrapper-scroll-y my-custom-scrollbar">
											<table class="table table-bordered table-hover mb-0 text-nowrap css-serial">
												<thead>
													<tr>
														<th class="atasbro">No.</th>
														<th class="atasbro">Provinsi</th>
														<th class="atasbro">Positif</th>
														<th class="atasbro">Sembuh</th>
														<th class="atasbro">Meninggal</th>
														
													</tr>
												</thead>
												<tbody>
														 
												
												<?php 



												
															
															for($i=0; $i<=33; $i++){


																$namapro = $data_provinsi[$i]["attributes"]["Provinsi"];
															$positif = $data_provinsi[$i]["attributes"]["Kasus_Posi"];
															$sembuh =  $data_provinsi[$i]["attributes"]["Kasus_Semb"];
															$meninggal =  $data_provinsi[$i]["attributes"]["Kasus_Meni"];

															
															
														?>
															<tr>
																<td><?php echo $i+1; ;?></td>
																<td><?php echo $namapro;?></td>
																<td><?php echo $positif;?></td>
																<td><?php echo $sembuh;?></td>
																<td><?php echo $meninggal;?></td>
															</tr>
																
														 <?php
															 
																 }
															
											
												
												?>
												



													
												</tbody>
											</table>

										</div>

										</div>
									</div>
								</div>
							</div><!-- COL END -->
						</div>
						<!-- ROW-3 CLOSED -->





							
						</div>

</div>


						
					</div>
				</div>
			</div>
		</div>


		<!-- Footer -->

		<footer class="footer">
			<div class="parallax_background parallax-window" data-parallax="scroll" style="background-image:url(<?php echo base_url(); ?>/assets/images/footer.jpg" data-speed="0.8"></div>
			<div class="footer_content">
				<div class="container">
					<div class="row">

						<!-- Footer About -->
						<div class="col-lg-3 footer_col">
							<div class="footer_about">
								<div class="logo">
									<a href="<?php echo site_url('Welcome'); ?>">PIORA<sup>+</sup></a>
								</div>
								<div class="footer_about_text">Pusat Informasi Obat ITERA.</div>
								<div class="footer_social">
									<ul class="d-flex flex-row align-items-center justify-content-start">
										<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									</ul>
								</div>
								<div class="copyright">
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
									Copyright &copy;<script>
										document.write(new Date().getFullYear());
									</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> & edited with group 9
									<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								</div>
							</div>
						</div>
					</div>
				</div>
		</footer>
	</div>


	<script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/styles/bootstrap4/popper.js"></script>
	<script src="<?php echo base_url(); ?>/assets/styles/bootstrap4/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="<?php echo base_url(); ?>/assets/plugins/easing/easing.js"></script>
	<script src="<?php echo base_url(); ?>/assets/plugins/parallax-js-master/parallax.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/custom.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/script.js"></script>
</body>

</html>
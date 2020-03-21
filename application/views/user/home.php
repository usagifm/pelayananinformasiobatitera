<!DOCTYPE html>
<html lang="en">

<head>
	<title>PIORA</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Health medical template project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/styles/bootstrap4/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/styles/bootstrap4/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/js/jquery-3.3.1.min.js">
	<link href="<?php echo base_url(); ?>/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/styles/main_styles.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/styles/responsive.css">
</head>

<body>

	<div class="super_container">

		<!-- Navbar -->

		<div class="menu trans_500">
			<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
				<div class="menu_close_container">
					<div class="menu_close"></div>
				</div>
				<form action="#" class="menu_search_form">
					<input type="text" class="menu_search_input" placeholder="Search" required="required">
					<button class="menu_search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
				</form>
				<ul>
					<li class="menu_item"><a href="<?php echo site_url('Home'); ?>">Home</a></li>
					<li class="menu_item"><a href="<?php echo site_url('artikel'); ?>">Artikel</a></li>
					<li class="menu_item"><a href="<?php echo site_url('obat'); ?>">Obat</a></li>
					<li class="menu_item"><a href="<?php echo site_url('Keluhan'); ?>">Drug interaction checker</a></li>
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

		<div class="home" style="height:700px">

			<div id="demo" class="carousel slide col-md-30" data-ride="carousel" style="margin-top:60px;">
				<ul class="carousel-indicators" style="margin-top:300px">
					<li data-target="#demo" data-slide-to="0" class="active"></li>
					<li data-target="#demo" data-slide-to="1"></li>
					<li data-target="#demo" data-slide-to="2"></li>
				</ul>
				<!-- Ganti gambar dengan file gambar kalian -->
				<div class="carousel-inner" style="width:1366px">
					<div class="carousel-item active">
						<img class="d-block w-100" src="assets/images/1.jpg" height="597">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="assets/images/2.jpg" height="597">
					</div>
					<div class="carousel-item">
						<img class="d-block w-100" src="assets/images/3.jpg" height="597">
					</div>
				</div>

				<a class="carousel-control-prev" href="#demo" data-slide="prev">
					<span class="carousel-control-prev-icon"></span>
				</a>
				<a class="carousel-control-next" href="#demo" data-slide="next">
					<span class="carousel-control-next-icon"></span>
				</a>
			</div>

			<!-- membuat panah next dan previous -->
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>

	<!-- Header -->

	<header class="header" id="header">
		<div>
			<div class="header_top">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
								<div class="logo">
									<a href="<?php echo site_url('Welcome'); ?>">PIORA<span><sup>+</sup></span></a>
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
												<li class="active"><a href="<?php echo site_url('index'); ?>">Home</a></li>
												<li><a href="<?php echo site_url('artikel'); ?>">Artikel</a></li>
												<li><a href="<?php echo site_url('Welcome/obat'); ?>">Obat</a></li>
												<li><a href="<?php echo site_url('keluhan'); ?>">Drug Interaction Checker</a></li>
												<li><a href="<?php echo site_url('faq'); ?>">FAQ</a></li>
											</ul>
										</nav>
										<div class="search_content d-flex flex-row align-items-center justify-content-end ml-auto">
											<form action="#" id="search_container_form" class="search_container_form">
												<input type="text" class="search_container_input" placeholder="cari obat" required="required">
												<button class="search_container_button"><i class="fa fa-search" aria-hidden="true"></i></button>
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
				<div class="col">
					<div class="home_content">
						<div class="home_title">Institut Teknologi Sumatera</div>
						<div class="home_text">Pusat Informasi Obat ITERA.</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>

	<!-- Info Boxes -->

	<div class="info">
		<div class="container">
			<div class="row row-eq-height">

				<?php $i = 0 ?>
				<?php foreach ($konten->result_array() as $br) :
					//$id_admin=$br['id_admin']; 
					$judul = $br['judul'];
					$gambar = $br['gambar'];
					$body = $br['body'];
					$slug = $br['slug'];
					$id_artikel = $br['id_artikel'];
					$kategori = $br['kategori'];
					$create_at = $br['create_at'];
				?>
					<!-- Info Box -->
					<div class="col-lg-4 info_box_col">
						<div class="info_box">
							<div class="info_image"><img height="132px" width="360px" src="<?php echo base_url() . 'assets/images/posts/' . $gambar; ?>" alt=""></div>
							<div class="info_content">
								<div class="info_title"><?php echo $judul; ?></div>
								<div class="info_text"><?php echo word_limiter($body, 10); ?></div>
								<div class="button info_button"><a href="<?php echo site_url('detail_artikel/read/' . $id_artikel); ?>"><span>read more</span><span>read more</span></a></div>
							</div>
						</div>
					</div>
					<?php if (++$i == 3) break; ?>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
	<!-- FAQ & News -->

	<div class="stuff">
		<div class="container">
			<div class="row">

				<!-- FAQ -->
				<div class="col-lg-6" style="margin-top:5px">
					<div class="faq">
						<div class="faq_title">FAQ</div>
						<div class="elements_accordions">
							<div class="accordions">

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div>Bagaimana cara mendapatkan informasi suatu penyakit ?</div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>ketika anda membuka website ini, anda akan masuk pada halaman home dan dihalama home anda bisa masuk ke halaman keluhan dan disana akan ada pertanyaan mengenai keluhan sakit , setelah anda menjawab pertanyaan-pertanyaan tersebut maka anda akan mengetahui sakit yang anda derita. </p>
										</div>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div>Bagaimana cara mendapatkan infromasi suatu penyakit ?</div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>ketika anda membuka website ini, anda akan masuk pada halaman home dan dihalama home anda bisa masuk ke halaman keluhan dan disana akan ada pertanyaan mengenai keluhan sakit , setelah anda menjawab pertanyaan-pertanyaan tersebut maka anda akan mengetahui sakit yang anda derita. </p>
										</div>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div>Bagaimana cara mendapatkan infromasi suatu penyakit ?</div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>ketika anda membuka website ini, anda akan masuk pada halaman home dan dihalama home anda bisa masuk ke halaman keluhan dan disana akan ada pertanyaan mengenai keluhan sakit , setelah anda menjawab pertanyaan-pertanyaan tersebut maka anda akan mengetahui sakit yang anda derita. </p>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<!-- FAQ2 -->

				<div class="col-lg-6" style="margin-top:30px">
					<div class="faq">
						<div class="faq_title"></div>
						<div class="elements_accordions">
							<div class="accordions">

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div>Bagaimana cara mendapatkan informasi suatu penyakit ?</div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>ketika anda membuka website ini, anda akan masuk pada halaman home dan dihalama home anda bisa masuk ke halaman keluhan dan disana akan ada pertanyaan mengenai keluhan sakit , setelah anda menjawab pertanyaan-pertanyaan tersebut maka anda akan mengetahui sakit yang anda derita. </p>
										</div>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div>Bagaimana cara mendapatkan infromasi suatu penyakit ?</div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>ketika anda membuka website ini, anda akan masuk pada halaman home dan dihalama home anda bisa masuk ke halaman keluhan dan disana akan ada pertanyaan mengenai keluhan sakit , setelah anda menjawab pertanyaan-pertanyaan tersebut maka anda akan mengetahui sakit yang anda derita. </p>
										</div>
									</div>
								</div>

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center deactive">
										<div>Bagaimana cara mendapatkan infromasi suatu penyakit ?</div>
									</div>
									<div class="accordion_panel">
										<div>
											<p>ketika anda membuka website ini, anda akan masuk pada halaman home dan dihalama home anda bisa masuk ke halaman keluhan dan disana akan ada pertanyaan mengenai keluhan sakit , setelah anda menjawab pertanyaan-pertanyaan tersebut maka anda akan mengetahui sakit yang anda derita. </p>
										</div>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>

				<!-- Latest News Post -->
				<div class="latest d-flex flex-row align-items-start justify-content-start">
					<div class="faq_title">
						<ul class="d-flex flex-row align-items-start justify-content-start">
						</ul>
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

	<script src="<?php echo base_url(); ?>/assets/js/jquery-3.3.1.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/styles/bootstrap4/popper.js"></script>
	<script src="<?php echo base_url(); ?>/assets/styles/bootstrap4/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
	<script src="<?php echo base_url(); ?>/assets/plugins/easing/easing.js"></script>
	<script src="<?php echo base_url(); ?>/assets/plugins/parallax-js-master/parallax.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/js/custom.js"></script>
</body>

</html>
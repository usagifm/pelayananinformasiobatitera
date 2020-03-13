<!DOCTYPE html>
<html lang="en">
<head>
<title>PIORA</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Health medical template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/styles/bootstrap4/bootstrap.min.css">
<link href="<?php echo base_url();?>/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
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
			<form action="#" class="menu_search_form">
				<input type="text" class="menu_search_input" placeholder="Search" required="required">
				<button class="menu_search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
			</form>
			<ul>
				<li class="menu_item"><a href="<?php echo site_url('Home'); ?>">Home</a></li>
				<li class="menu_item"><a href="<?php echo site_url('artikel'); ?>">Artikel</a></li>
				<li class="menu_item"><a href="<?php echo site_url('obat'); ?>">Obat</a></li>
				<li class="menu_item"><a href="<?php echo site_url('keluhan'); ?>">Keluhan</a></li>
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

	<div class="home">
		<div class="background_image" style="background-image:url(<?php echo base_url();?>/assets/images/index_itera.png)"></div>

		<!-- Header -->

		<header class="header" id="header">
			<div>
				<div class="header_top">
					<div class="container">
						<div class="row">
							<div class="col">
								<div class="header_top_content d-flex flex-row align-items-center justify-content-start">
									<div class="logo">
										<a href="<?php echo site_url('Welcome'); ?>">PIORA<span>+</span></a>	
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
													<li><a href="<?php echo site_url('keluhan'); ?>">Keluhan</a></li>
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

				<?php $i=0 ?>
				<?php foreach ($konten->result_array() as $br) :
          					   //$id_admin=$br['id_admin'];
          					   $judul=$br['judul'];
          					   $gambar=$br['gambar'];
          					   $body=$br['body'];
          					   $slug=$br['slug'];
          					   $id_artikel=$br['id_artikel'];
          					   $kategori=$br['kategori'];
           					   $create_at=$br['create_at'];
                    ?>
				<!-- Info Box -->
				<div class="col-lg-4 info_box_col">
					<div class="info_box">
						<div class="info_image"><img src="<?php echo base_url().'assets/images/posts/'.$gambar;?>" alt=""></div>
						<div class="info_content">
							<div class="info_title"><?php echo $judul; ?></div>
							<div class="info_text"><?php echo word_limiter($body,10); ?></div>
							<div class="button info_button"><a href="<?php echo site_url('detail_artikel/read/'.$id_artikel); ?>"><span>read more</span><span>read more</span></a></div>
						</div>
					</div>
				</div>
						<?php if (++$i == 3) break; ?>
						<?php endforeach; ?>
			</div>
		</div>
	</div>

	<!-- CTA -->

	<div class="cta">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url();?>/assets/images/cta_1.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="cta_container d-flex flex-xl-row flex-column align-items-xl-start align-items-center justify-content-xl-start justify-content-center">
						<div class="cta_content text-xl-left text-center">
							<div class="cta_title">Kenali gejala sakit anda di sini.</div>
							<div class="cta_subtitle">priksakan gejala-gejala penyakit anda.</div>
						</div>
						<div class="button cta_button ml-xl-auto"><a href="<?php echo site_url('keluhan'); ?>"><span>Keluhan</span><span>call now</span></a></div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- FAQ & News -->

	<div class="stuff">
		<div class="container">
			<div class="row">

				<!-- FAQ -->
				<div class="col-lg-7">
					<div class="faq">
						<div class="faq_title">FAQ</div>
						<div class="elements_accordions">
							<div class="accordions">

								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center deactive"><div>Bagaimana cara mendapatkan infromasi suatu penyakit ?</div></div>
									<div class="accordion_panel">
										<div>
											<p>ketika anda membuka website ini, anda akan masuk pada halaman home dan dihalama home anda bisa masuk ke halaman keluhan dan disana akan ada pertanyaan mengenai keluhan sakit , setelah anda menjawab pertanyaan-pertanyaan tersebut maka anda akan mengetahui sakit yang anda derita. </p>
										</div>
									</div>
								</div>
								
								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center deactive"><div>Bagaimana cara mendapatkan infromasi suatu penyakit ?</div></div>
									<div class="accordion_panel">
										<div>
											<p>ketika anda membuka website ini, anda akan masuk pada halaman home dan dihalama home anda bisa masuk ke halaman keluhan dan disana akan ada pertanyaan mengenai keluhan sakit , setelah anda menjawab pertanyaan-pertanyaan tersebut maka anda akan mengetahui sakit yang anda derita. </p>
										</div>
									</div>
								</div>
								
								<div class="accordion_container">
									<div class="accordion d-flex flex-row align-items-center deactive"><div>Bagaimana cara mendapatkan infromasi suatu penyakit ?</div></div>
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

				<!-- Latest News -->
				<div class="col-lg-5">
					<div class="news">
						<div class="news_title">Latest News</div>
						<div class="news_container">
						
									<?php $i=0 ?>
									<?php foreach ($konten->result_array() as $br) :
												   //$id_admin=$br['id_admin'];
												   $judul=$br['judul'];
												   $gambar=$br['gambar'];
												   $body=$br['body'];
												   $slug=$br['slug'];
												   $id_artikel=$br['id_artikel'];
												   $kategori=$br['kategori'];
												   $create_at=$br['create_at'];
										?>						

							<!-- Latest News Post -->
							<div class="latest d-flex flex-row align-items-start justify-content-start">
								<div><div class="latest_image"><img src="<?php echo base_url().'assets/images/posts/'.$gambar;?>" alt=""></div></div>
								<div class="latest_content">
									<div class="latest_title"><a href="<?php echo site_url('detail_artikel/read/'.$id_artikel); ?>"><?php echo $judul; ?></a></div>
									<div class="latest_info">
										<ul class="d-flex flex-row align-items-start justify-content-start">
											<li><a><?php echo $create_at; ?></a></li>
										</ul>
									</div>
								</div>
							</div>
									<?php if (++$i == 3) break; ?>
									<?php endforeach; ?>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="parallax_background parallax-window" data-parallax="scroll" style="background-image:url(<?php echo base_url();?>/assets/images/footer.jpg" data-speed="0.8"></div>
		<div class="footer_content">
			<div class="container">
				<div class="row">

					<!-- Footer About -->
					<div class="col-lg-3 footer_col">
						<div class="footer_about">
							<div class="logo">
								<a href="<?php echo site_url('Welcome'); ?>">PIORA<span>+</span></a>	
							</div>
							<div class="footer_about_text">Pusat Informasi Obat ITERA.</div>
							<div class="footer_social">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li>																<a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div>
							<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> & edited with group 9
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>PIORA</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Health medical template project">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/styles/bootstrap4/bootstrap.min.css">
	<link href="<?php echo base_url(); ?>/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/plugins/OwlCarousel2-2.2.1/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/styles/artikel.css">
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
			<div class="parallax_background parallax-window" style="background-image:url(<?php echo base_url(); ?>/assets/images/obat-1.png)"></div>


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
								<div class="home_title">Artikel</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<!-- Artikel / News -->

		<div class="news">
			<div class="container">
				<div class="row">
					<!-- News Posts -->
					<div class="col-lg-8">
						<div class="news_posts">
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

								<div class="news_post">
									
									<div class="news_post_image"><img height="420px" width="700px" src="<?php echo base_url('assets/images/posts/' . $gambar);?>" alt=""></div>

									<div class="news_post_content">
										<div class="news_post_date"><a href="#">
												<td><?php echo $create_at ?></td>
											</a></div>
										<div class="news_post_title"><a href="#">
												<td><?php echo $judul; ?></td>
											</a></div>
										<div class="news_post_text">
											<p>
												<td><?php echo word_limiter($body, 20); ?></td>
											</p>
										</div>
									</div>
									<div class="button news_post_button"><a href="<?php echo site_url('detail_artikel/read/' . $id_artikel); ?>/<?php echo $slug; ?>"><span>baca selengkapnya</span><span>baca selengkapnya</span></a></div>
								</div>
							<?php endforeach; ?>
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
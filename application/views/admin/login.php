<!DOCTYPE html>
<html lang="en">
<head>
	<title>Administrator</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url();?>/assets/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<h3>Login KLINIK ITERA</h3>
					<h5>Selamat Datang Di KLINIK ITERA</h5>
					<img src="<?php echo base_url();?>/assets/images/Logo PIO.png" alt="IMG">
				</div>
				<div class="panel-body">
				<?php if($this->session->flashdata('login_failed')): ?>
                    <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
                    <?php endif; ?>
										<form class="login100-form validate-form" role="form" action="<?php echo base_url('admin/auth'); ?>" method="POST">
					<span class="login100-form-title">
						Admin Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							
						</span>
						<a class="txt2" href="#">
							
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							
							<i  aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="<?php echo base_url();?>/assets/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>/assets/login/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url();?>/assets/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>/assets/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>/assets/login/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url();?>/assets/login/js/main.js"></script>

</body>
</html>
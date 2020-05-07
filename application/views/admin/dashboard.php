<!-- Tampilkan halaman Dashboard -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?php echo base_url();?>/assets/images/Logo PIO.png">

    <title>Administrator PIORA</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>/assets/bootstrap/css/style-admin.css" rel="stylesheet">

    <!-- font-awesome untuk ikon -->
    <link href="<?php echo base_url();?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
  </head>

  <body>

    <nav><?php include 'template/navbar.php'; ?></nav>

    <div class="container-fluid">
      <div class="row">
          <aside>
              <?php $home = "class='active'"; ?>
              <?php include 'template/sidebar.php'; ?>
          </aside>

          <section id="konten">
          <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h1 class="page-header">Halo <?php echo $this->session->userdata("nama"); ?></h1>
  <div class="container text-center text-white">
  <div class="row justify-content-start">
          <div class="col-4 bg-white">
          &nbsp;
          &nbsp;
          &nbsp;
          &nbsp;
          </div>
          <div class="col-4 bg-white">
          &nbsp;
          &nbsp;
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-4 bg-white">
          &nbsp;
          &nbsp;
          </div>
          <div class="col-4 bg-white">
          &nbsp;
          &nbsp;
          </div>
        </div>
  <div class="row justify-content-end">
          <div class="col-4 bg-white">
            <h1>PUSAT INFOMASI OBAT</h1>
            <H2>KLINIK INSTITUT TEKNOLOGI SUMATERA</H2>
            <H3>PROGRAM STUDI FARMASI</H3>
          </div>
  </div>

          </section>

      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>/assets/bootstrap/js/jquery.js"></script>
    <script src="<?php echo base_url();?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/assets/bootstrap/js/holder.js"></script>
  </body>
</html>

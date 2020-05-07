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
  <div class="container top">

<ul class="breadcrumb">
  <li>
    <a href="<?php echo site_url("admin"); ?>">
      <?php echo ucfirst($this->uri->segment(1));?>
    </a> 
    <span class="divider"></span>
  </li>
  <li class="active">
    <?php echo ucfirst($this->uri->segment(2));?>
  </li>
</ul>

<div class="page-header users-header">
  
</div>

<?php echo validation_errors(); ?>
<?php echo form_open_multipart('admin/simpan_admin'); ?>
<div class="col-sm-9">

  <h2>Buat Admin</h2>
    <form enctype="multipart/form-data" method="post" accept-charset="utf-8">
        <div class="col-sm-12 col-sm-offset-3 col-md-10 col-md-offset-2 main">

<form class="form" action="" method="POST">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control" placeholder="Username" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" placeholder="Password" required>
    </div>
    <div class="form-group">
        <label for="nama-lengkap">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" class="form-control" placeholder="Nama Lengkap" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" class="form-control" placeholder="Email"/>
    </div>

    <div class="form-group">
        <button type="submit" name="simpan" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
    </div>

</form>
  
     

          </section>

      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>/assets/bootstrap/js/jquery.js"></script>
    <script src="<?php echo base_url();?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/assets/bootstrap/js/holder.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>/assets/ckeditor/ckeditor.js"></script>
  </body>
</html>

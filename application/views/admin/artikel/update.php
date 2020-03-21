<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Edit Artikel</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url();?>assets/bootstrap/css/simple-sidebar.css" rel="stylesheet">
  
  <link href="<?php echo base_url();?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet">

  <link href="<?php echo base_url();?>/assets/styles/header-admin.css" rel="stylesheet">

<link href="<?php echo base_url();?>/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 



</head>

<body>


<div class="header_top_content d-flex flex-row align-items-center justify-content-start"> 
									<div class="logo"> 
										<a href="<?php echo site_url('Welcome'); ?>">PIORA<span><sup>+</sup></span></a>	 
									</div> 
								</div> 
  <div class="d-flex " id="wrapper">

    <!-- Sidebar -->
    <div class="bg-secondary border-right text-light " id="sidebar-wrapper">
    <div class="make-me-sticky">
      <div class="sidebar-heading text-light bg-dark">Main Menu </div>
      <div class="list-group list-group-flush text-light bg-secondary">
        <a href="<?php echo base_url();?>admin/dashboard" class="list-group-item list-group-item-action text-light bg-secondary"><i class="fa fa-home fa-lg"></i> Dashboard</a>
        <a href="<?php echo base_url();?>admin/artikel" class="list-group-item list-group-item-action text-light bg-secondary"><i class="fa fa-newspaper-o fa-lg"></i> Artikel</a>
        <a href="<?php echo base_url();?>admin/obat" class="list-group-item list-group-item-action text-light bg-secondary"><i class="fa fa-th-list fa-lg"></i> Obat</a>
        <a href="<?php echo base_url();?>admin/info" class="list-group-item list-group-item-action text-light bg-secondary"><i class="fa fa-users fa-lg"></i> Info Admin</a>
      
      </div>
      </div>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->


    <div id="page-content-wrapper">

    
      <nav class="navbar navbar-expand-lg navbar-light bg-info border-bottom">
        <button class="btn btn-primary" id="menu-toggle"><</button>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse text-light bg-info" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0 " >
            <li class="nav-item active ">
              <a class="nav-link text-light" href="<?php echo site_url('Welcome'); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Settings
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="#">Account Information</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>

      <div class="container-fluid">
      <div class="col-lg-12 col-sm-offset-3 col-md-10 col-md-offset-2 main">


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
<div class="col-sm-9">
<?php
                      foreach ($artikel->result_array() as $data_artikel) :
                       $id_artikel=$data_artikel['id_artikel'];
          					   $judul=$data_artikel['judul'];
          					   $body=$data_artikel['body'];
          					   $kategori	=$data_artikel['kategori'];
                       ?>
                      <?php endforeach;?>
  <h2>Edit Artikel</h2>
    <form action="<?php echo base_url().'posts/update'?>" enctype="multipart/form-data" method="post" accept-charset="utf-8">
    <div class="form-group">
    <label>Title</label>
    <input type="hidden" name="id_artikel" value="<?php echo "$id_artikel"; ?>">
    <input type="text" class="form-control" name="judul"  placeholder="Add Title" required oninvalid="this.setCustomValidity('silakan isi kolom ini')" oninput="setCustomValidity('')" value="<?php echo "$judul"; ?>"/>
  </div>
  <div class="form-group">
    <label>Body</label>
    <textarea id="ckeditor" class="form-control" name="body"  placeholder="Add Body" rows="16" required oninvalid="this.setCustomValidity('silakan isi kolom ini')" oninput="setCustomValidity('')"><?php echo "$body"; ?></textarea>
  </div>
  <div class="form-group">
    <label>Category</label>
    <select name="kategori" class="form-control">
              <option value="Herbal">Herbal</option>
              <option value="Technology">Technology</option>
          </select>
  </div>
  <button type="submit" name="login" class="btn btn-primary pull-right"><i class="fa fa-save"></i> Simpan Berita</button>
</form>   </div>
    <script>
                CKEDITOR.replace( 'ckeditor' );
            </script>
  
     

    <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->
  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>

</body>

</html>

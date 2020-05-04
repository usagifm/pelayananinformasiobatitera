<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">


  <meta name="viewport" content="width=device-width, initial-scale=1">
  
 
  <script>document.getElementsByTagName("html")[0].className += " js";</script>
  
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard Admin</title>

  <!-- Bootstrap core CSS -->
  <!-- Bootstrap core CSS -->




</head>

<body>

<link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdn.metroui.org.ua/v4/css/metro-all.min.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/style-admin.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/profile.css">


  <header class="cd-main-header js-cd-main-header">
    <div class="cd-logo-wrapper">
    <a href="#0" class="cd-logo"><img src="<?php echo base_url();?>assets/images/cd-logo.svg" alt="Logo"></a>
    </div>
    
    <div class="cd-search js-cd-search">
      
    </div>
  
    <button class="reset cd-nav-trigger js-cd-nav-trigger" aria-label="Toggle menu"><span></span></button>
  
    <ul class="cd-nav__list js-cd-nav__list">
      <li class="cd-nav__item"><a href="<?php echo site_url('index'); ?>">Halaman Utama</a></li>
      <li class="cd-nav__item"><a href="#0">Developer</a></li>
      <li class="cd-nav__item cd-nav__item--has-children cd-nav__item--account js-cd-item--has-children">
        <a href="<?php echo base_url(); ?>login/logout">
        <img src="<?php echo base_url();?>assets/images/cd-avatar.svg" alt="avatar">
          <span>Logout</span>
        </a>
    
    
      </li>
    </ul>
  </header> <!-- .cd-main-header -->
  
  <main class="cd-main-content">


 <nav class="cd-side-nav js-cd-side-nav">
      <ul class="cd-side__list js-cd-side__list">
        <li class="cd-side__label"><span>Main</span></li>
        <li class="cd-side__item cd-side__item--has-children ">
          <a href="<?php echo base_url();?>admin/dashboard">Dashboard</a>
          
        </li>

        <li class="cd-side__item cd-side__item--has-children cd-side__item--bookmarks">
          <a href="<?php echo base_url();?>admin/artikel">Artikel</a>
          
        </li>
    
        <li class="cd-side__item cd-side__item--has-children cd-side__item--overview ">
          <a href="<?php echo base_url();?>admin/obat">Obat</a>
          
          
        </li>
      </ul>
    
      <ul class="cd-side__list js-cd-side__list">
        <li class="cd-side__label"><span>Secondary</span></li>
      
    
        <li class="cd-side__item cd-side__item--has-children cd-side__item--users  cd-side__item--selected ">
          <a href="<?php echo base_url();?>admin/info">Users</a>
          
      
        </li>
      </ul>
    
    </nav>



  

    <div class="main">

        <div class="form-profile ">


        <ul class="breadcrumb" style="font-size:15px;">
<li>
<a style="text-decoration:none; color:black;" href="<?php echo site_url("admin"); ?>">
  <?php echo ucfirst($this->uri->segment(1));?>
</a> 
<span class="divider"> / </span>

</li>
<li class="active">
<?php echo ucfirst($this->uri->segment(2));?>
</li>
</ul>

        
        <?php echo validation_errors(); ?>
<?php echo form_open_multipart('admin/simpan_admin'); ?>

  <h2>Buat Admin</h2>
    <form enctype="multipart/form-data" method="post" accept-charset="utf-8">
      

<form class="form" action="" method="POST">
    <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username"  placeholder="Username" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password"  placeholder="Password" required>
    </div>
    <div class="form-group">
        <label for="nama-lengkap">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email"  placeholder="Email"/>
    </div>

    <div class="form-group">
        <button type="submit" name="simpan" class="btn btn-primary "><i class="fa fa-save"></i> Simpan</button>
    </div>


</form>
              
    
    <!-- /#page-content-wrapper -->

  
     <!-- .content-wrapper -->
  </main> <!-- .cd-main-content -->

  <script src="https://cdn.metroui.org.ua/v4/js/metro.min.js"></script>
  <script src="<?php echo base_url();?>assets/js/util.js"></script> <!-- util functions included in the CodyHouse framework -->
  <script src="<?php echo base_url();?>assets/js/menu-aim.js"></script>
  <script src="<?php echo base_url();?>assets/js/main-admin.js"></script>
  <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
  <script src="<?php echo base_url();?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>/assets/bootstrap/js/holder.js"></script>

  <!-- Menu Toggle Script -->
 

  <script>
    $("#menu-toggle").click(function(e) {
      e.preventDefault();
      $("#wrapper").toggleClass("toggled");
    });
  </script>
</body>

</html>

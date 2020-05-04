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
  </header> <!-- .cd-main-header --> <!-- .cd-main-header -->
  
  <main class="cd-main-content">


 <nav class="cd-side-nav js-cd-side-nav">
      <ul class="cd-side__list js-cd-side__list">
        <li class="cd-side__label"><span>Main</span></li>
        <li class="cd-side__item cd-side__item--has-children ">
          <a href="<?php echo base_url();?>admin/dashboard">Dashboard</a>
          
        </li>

        <li class="cd-side__item cd-side__item--has-children cd-side__item--bookmarks cd-side__item--selected ">
          <a href="<?php echo base_url();?>admin/artikel">Artikel</a>
          
        </li>
    
        <li class="cd-side__item cd-side__item--has-children cd-side__item--overview ">
          <a href="<?php echo base_url();?>admin/obat">Obat</a>
          
          
        </li>
      </ul>
    
      <ul class="cd-side__list js-cd-side__list">
        <li class="cd-side__label"><span>Secondary</span></li>
      
    
        <li class="cd-side__item cd-side__item--has-children cd-side__item--users ">
          <a href="<?php echo base_url();?>admin/info">Users</a>
          
      
        </li>
      </ul>
    
 
    </nav>



  

    <div class="main">

        <div class="form-profile ">
   
  
  <aside>
          <?php $home = "class='active'"; ?>
        
      </aside>

  <div class="container-fluid">
 

<ul class="breadcrumb" style="font-size:15px;">
<li>
<a style="text-decoration:none; color:black;" href="<?php echo site_url("admin"); ?>">
  <?php echo ucfirst($this->uri->segment(1));?>
</a> 
<span class="divider">/ </span>

</li>
<li class="active"> <?php echo ucfirst($this->uri->segment(2));?>
</li>
</ul>

<?php echo validation_errors(); ?>
<?php echo form_open_multipart('posts/create'); ?>
<div class="col-sm-9">

<h2>Buat Artikel</h2>
<form action="http://localhost/piora-onprogress/index.php/posts/create" enctype="multipart/form-data" method="post" accept-charset="utf-8">
<div class="form-group">
<label>Title</label>
<input type="text"  name="judul" placeholder="Add Title" required oninvalid="this.setCustomValidity('silakan isi kolom ini')" oninput="setCustomValidity('')">
</div>
<div class="form-group">
<label>Body</label>
<textarea id="ckeditor" name="body" placeholder="Add Body" rows="16" required oninvalid="this.setCustomValidity('silakan isi kolom ini')" oninput="setCustomValidity('')"></textarea>
</div>
<div class="form-group">
    <label>Category</label>
    <select name="kategori" >
              <option value="Herbal">Herbal</option>
              <option value="Technology">Technology</option>
          </select>
  </div>
<div class="form-group">
<label>Upload Image</label>
<input type="file" name="userfile" required oninvalid="this.setCustomValidity('silakan isi kolom ini')" oninput="setCustomValidity('')">
</div>
<button type="submit" name="login" class="btn btn-primary pull-right"><i class="fa fa-paper-plane"></i>  Post Berita</button>
</form>   </div>


</div> 
</div>

<script>

// Replace the <textarea id="editor1"> with a CKEditor
// instance, using default configuration.

CKEDITOR.replace('ckeditor');
</script>


    <!-- /#page-content-wrapper -->

    </div>

  </div>



   
</div>
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

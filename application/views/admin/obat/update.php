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

        <li class="cd-side__item cd-side__item--has-children cd-side__item--bookmarks ">
          <a href="<?php echo base_url();?>admin/artikel">Artikel</a>
          
        </li>
    
        <li class="cd-side__item cd-side__item--has-children cd-side__item--overview cd-side__item--selected ">
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

<div class="page-header users-header">

</div>


<?php echo validation_errors(); ?>
<?php echo form_open_multipart('obat/update'); ?>

<?php
                      foreach ($obatq->result_array() as $data_obat) :
                       $id_obat=$data_obat['id_obat'];
          					   $nama_generik=$data_obat['nama_generik'];
          					   $merek_dagang=$data_obat['merek_dagang'];
                       $indikasi_obat	=$data_obat['indikasi_obat'];
                       $kontraindikasi_obat=$data_obat['kontraindikasi_obat'];
                       $bentuk	=$data_obat['bentuk'];
                       $reaksi_obatlain	=$data_obat['reaksi_obatlain'];
                       $efek_samping = $data_obat['efek_samping'];
                       $aturan_tambahan= $data_obat['aturan_tambahan'];
                       $golongan_obat= $data_obat['golongan_obat'];
                       $deskripsi	=$data_obat['deskripsi'];
                       ?>
                      <?php endforeach;?>
  <h2>Merubah Obat</h2>

  <div style="font-size:16px" >
    <form  enctype="multipart/form-data" method="post" accept-charset="utf-8" >
    <div class="form-group" >
    <label>Nama Generik</label>
    <input type="hidden" name="id_obat" value="<?php echo "$id_obat"; ?>">
    <input type="text"  name="nama_generik" value="<?php echo "$nama_generik"; ?>" placeholder="Nama Generik" required oninvalid="this.setCustomValidity('silakan isi kolom ini')" oninput="setCustomValidity('')">
  </div>
  <div class="form-group">
    <label>Nama Merek Dagang</label>
    <textarea id="editor1"  name="merek_dagang"  placeholder="Nama Merek Dagang" rows="3" required oninvalid="this.setCustomValidity('silakan isi kolom ini')" oninput="setCustomValidity('')"><?php echo "$merek_dagang"; ?></textarea>
  </div>
  <div class="form-group">
    <label>Indikasi Obat</label>
    <textarea id="editor1"  name="indikasi_obat"  placeholder="Indikasi Obat" rows="3" required oninvalid="this.setCustomValidity('silakan isi kolom ini')" oninput="setCustomValidity('')"><?php echo "$indikasi_obat"; ?></textarea>
  </div>
  <div class="form-group">
    <label>Kontra Indikasi Obat</label>
    <textarea id="editor1"  name="kontraindikasi_obat"  placeholder="Indikasi Obat" rows="3" required oninvalid="this.setCustomValidity('silakan isi kolom ini')" oninput="setCustomValidity('')"><?php echo "$kontraindikasi_obat"; ?></textarea>
  </div>
  <div class="form-group">
    <label>Bentuk</label>
    <textarea id="editor1"  name="bentuk" placeholder="Bentuk Obat" rows="3" required oninvalid="this.setCustomValidity('silakan isi kolom ini')" oninput="setCustomValidity('')"><?php echo "$bentuk"; ?></textarea>
  </div>
  <div class="form-group">
    <label>Rekasi dengan obat lain</label>
    <textarea id="editor1"  name="reaksi_obatlain" placeholder="Rekasi dengan obat lain" rows="3" required oninvalid="this.setCustomValidity('silakan isi kolom ini')" oninput="setCustomValidity('')"><?php echo "$reaksi_obatlain"; ?></textarea>
  </div>
  <div class="form-group">
    <label>Efek Samping</label>
    <textarea id="editor1"  name="efek_samping" placeholder="Efek samping yang ditimbulkan " rows="3" required oninvalid="this.setCustomValidity('silakan isi kolom ini')" oninput="setCustomValidity('')"><?php echo "$efek_samping"; ?></textarea>
  </div>
  <div class="form-group">
    <label>Aturan Tambahan</label>
    <textarea id="editor1"  name="aturan_tambahan" placeholder="Aturan tambahan penggunaan" rows="3" required oninvalid="this.setCustomValidity('silakan isi kolom ini')" oninput="setCustomValidity('')"><?php echo "$aturan_tambahan"; ?></textarea>
  </div>


  <div class="form-group">
    <label>Golongan Obat</label>
    <select name="golongan_obat" placeholder="<?php echo "$golongan_obat"; ?>">
              <option value="Obat Jamu">Obat Jamu</option>
              <option value="Herbal Terstandar">Herbal Terstandar</option>
              <option value="HerbalFitofarmaka">Herbal Fitofarmaka</option>
              <option value="Obat Bebas">Obat Bebas</option>
              <option value="Obat Bebas Terbatas">Obat Bebas Terbatas</option>
              <option value="Obat Psikotropika">Obat Psikotropika</option>
              <option value="Obat Keras">Obat Keras</option>
              <option value="Obat Narkotika">Obat Narkotika</option>
          </select>
  </div>


  <div class="form-group">
    <label>Deskripsi </label>
    <textarea id="editor1"  name="deskripsi" placeholder="Rekasi dengan makanan" rows="3" required oninvalid="this.setCustomValidity('silakan isi kolom ini')" oninput="setCustomValidity('')"><?php echo "$deskripsi"; ?></textarea>
  </div>
  <button type="submit" name="login" class="btn btn-primary pull-right" style="margin-top:-30px"><i class="fa fa-save"></i> Simpan </button>
</form> </div> </div>
    <script>
                CKEDITOR.replace( 'editor1' );
            </script>

                      </div>
    
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

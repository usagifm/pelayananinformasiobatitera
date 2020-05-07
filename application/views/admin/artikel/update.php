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
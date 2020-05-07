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
    
        <li class="cd-side__item cd-side__item--has-children cd-side__item--overview  cd-side__item--selected ">
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
   
 
            <?php echo $this->session->flashdata('notif') ?>
            <form method="POST" action="<?php echo base_url() ?>index.php/Obat/upload" enctype="multipart/form-data">
           
                <label for="exampleInputEmail1" style="margin-bottom:30px;">UNGGAH FILE EXCEL</label>
                <input  type="file" name="userfile" data-role="file"data-prepend="Pilih File Excel"  >
                

      
              <button type="submit" class="btn btn-success" style="margin-top:30px;">UPLOAD</button>

            </form>

            <button class="image-button right " style="margin-left:915px; margin-top:-70px;" >
        <a href="<?php echo base_url();?>assets/template-import.xlsx" style="text-decoration:none; color:black; " download>
          <span class="mif-download icon"></span>
          <span class="caption">Template Excel</span>
      </a>
      </button>

</div>



        <div class="form-profile ">
   
        


      <h2 class="sub-header"> Semua Obat<button class="image-button right " style="margin-left:65%;" >
        <a href="<?php echo base_url();?>admin/obat/add" style="text-decoration:none; color:black; " >
          <span class="mif-add icon"></span>
          <span class="caption">Tambah Obat</span>
      </a>
      </button></h2>  
      <?php if($this->session->flashdata('message', 'Data berhasil diperbarui')): ?>
  <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('message', 'Data berhasil diperbarui').'</p>'; ?>
                    <?php endif; ?>
                    <table class="table striped table-border mt-4"
       data-role="table"
     
       data-horizontal-scroll="false"
       style=" font-size:16px">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Obat</th>
          <th>Merek Dagang</th>
          <th>Penulis</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
      <?php
          					$no=0;
          					foreach ($data->result_array() as $i) :
                       $no++;
                       $id_obat=$i['id_obat'];
          					   $nama_generik=$i['nama_generik'];
                       $merek_dagang=$i['merek_dagang'];
                       $id_admin=$i['id_admin'];
                    ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $nama_generik;?></td>
        				  <td><?php echo $merek_dagang;?></td>
                  <td><?php echo $id_admin;?></td>
                  <td style="text-align:left;">
                        <a class="btn" href="<?php echo base_url().'obat/edit/'.$id_obat;?>" ><span class="fa fa-pencil"></span></a>
                        <a class="btn" data-toggle="modal" data-target="#ModalHapus<?php echo $id_obat;?>"><span class="fa fa-trash"></span></a>
                  </td>
                </tr>
				<?php endforeach;?>
      </tbody>
    </table>

  </div>
</div>


<?php foreach ($data->result_array() as $i) :
              $id_obat=$i['id_obat'];
              $nama_generik=$i['nama_generik'];
              $merek_dagang=$i['merek_dagang'];
            ?>
	<!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $id_obat;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Obat</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'obat/delete/'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							       <input type="hidden" name="id_obat" value="<?php echo $id_obat;?>"/>
                            <p>Apakah Anda yakin mau menghapus Obat <b><?php echo $nama_generik;?></b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                    </div>
                    </form>

                    </div>
            </div>
        </div>
      
	<?php endforeach;?>
    <!-- /#page-content-wrapper -->

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

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Drug List</title>

  <!-- Bootstrap core CSS -->
  <link href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?php echo base_url();?>assets/bootstrap/css/simple-sidebar.css" rel="stylesheet">
  
  <link href="<?php echo base_url();?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet">
  
  <link href="<?php echo base_url();?>/assets/styles/header-admin.css" rel="stylesheet">

<link href="<?php echo base_url();?>/assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> 



</head>

<body>


<div class="header_top_content d-flex flex-row align-items-center justify-content-start" > 
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

      <aside>
              <?php $home = "class='active'"; ?>
            
          </aside>

      <div class="container-fluid">
      <div class="col-lg-12 col-sm-offset-3 col-md-10 col-md-offset-2 main">
  <h2 class="sub-header">Semua Obat <a href="<?php echo base_url();?>admin/obat/add" class="btn btn-success pull-right"><i class="fa fa-plus-circle fa-lg"></i> Tambah Obat</a></h2>
  <div class="table-responsive">
  <?php if($this->session->flashdata('message', 'Data berhasil diperbarui')): ?>
  <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('message', 'Data berhasil diperbarui').'</p>'; ?>
                    <?php endif; ?>
    <table class="table table-striped">
      <thead>
        <tr>
          <th>#</th>
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
                        <h4 class="modal-title" id="myModalLabel">Hapus Berita</h4>
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

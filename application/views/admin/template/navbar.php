    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>/assets/bootstrap/css/style-admin.css" rel="stylesheet">

    <!-- font-awesome untuk ikon -->
    <link href="<?php echo base_url();?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet">

  <?php foreach ($data->result_array() as $i) :
              $id_artikel=$i['id_artikel'];
              $judul=$i['judul'];
              $id_admin=$i['id_admin'];
            ?>
 

  <!--Modal Hapus Pengguna-->
  
        <div class="modal fade" id="ModalHapus<?php echo $id_artikel;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Artikel</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'posts/delete/'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							       <input type="hidden" name="id_artikel" value="<?php echo $id_artikel;?>"/>
                            <p>Apakah Anda yakin mau menghapus Artikel <b><?php echo $judul;?></b> ?</p>

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

  <script src="<?php echo base_url();?>/assets/bootstrap/js/jquery.js"></script>
    <script src="<?php echo base_url();?>/assets/bootstrap/js/bootstrap.min.js"></script>

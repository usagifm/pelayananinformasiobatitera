<div class="col-sm-3 col-md-2 sidebar">

    <ul class="nav nav-sidebar">
        <li <?php echo isset($dashboard)? $dashboard : ""; ?>><a href="<?php echo base_url();?>admin"><i class="fa fa-home fa-lg"></i> Dashboard</a></li>
        <li <?php echo isset($artikelp)? $artikelp : ""; ?>><a href="<?php echo base_url();?>admin/artikel"><i class="fa fa-newspaper-o fa-lg"></i> Artikel</a></li>
        <li <?php echo isset($obat)? $obat : ""; ?>><a href="<?php echo base_url();?>admin/obat"><i class="fa fa-th-list fa-lg"></i> Obat</a></li>
        <li <?php echo isset($admin)? $admin : ""; ?>><a href="<?php echo base_url();?>admin/info"><i class="fa fa-users fa-lg"></i> Info Admin</a></li>
    </ul>
</div>

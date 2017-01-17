<!DOCTYPE html>
<html lang="en">
<head>
	<title>data User</title>
	<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/bootstrap/css/bootstrap.min.css"; ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/dist/css/AdminLTE.min.css"; ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/dist/css/skins/_all-skins.min.css"; ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/plugins/iCheck/flat/blue.css"; ?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/plugins/morris/morris.css"; ?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css"; ?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/plugins/datepicker/datepicker3.css"; ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/plugins/daterangepicker/daterangepicker.css"; ?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"; ?>">
</head>
<body>
<div class="container">
      <!-- main container -->
      <div class="panel panel-default">
  <div class="panel-heading"><b>Daftar Barang</b></div>
  <div class="panel-body">
    <div class="col-md-12">
     <div class="col-md-5">
     <a href="<?=base_url()?>barang/form/add" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-plus"></i> Tambah</a>
 
     </div>
     <div class="col-md-5 pull-right">
     <form action="<?=base_url()?>barang/cari" method="get">
     <div class="input-group">
 
      <input type="text" name="key" class="form-control">
      <span class="input-group-btn">
        <button class="btn btn-default" type="submit">cari</button>
      </span>
    </div><!-- /input-group -->
 
      </form>
     </div>
 
</div>
       <table class="table table-striped">
        <thead>
         <tr>
         <th>No</th>
         <th>Barcode</th>
         <th>Nama</th>
         <th>Harga</th>
         <th>Jenis</th>
         <th>Satuan</th>
         <th>Stok</th>
         <th></th>
         </tr>
        </thead>
        <tbody>
        <? if(empty($q_user)){ ?>
         <tr>
          <td colspan="6">Data tidak ditemukan</td>
         </tr>
        <? }else{
 
        if(!$jlhpage){         //ini untuk menangani penomoran agar otomatis menyesuaikan dengan paging
          $no=0;
          }else{$no=$jlhpage;}
 
          foreach($qbarang as $rowbarang){ $no++;?>
         <tr>
          <td><?=$no?></td>
          <td><?=$rowbarang->barcode?></td>
          <td><?=$rowbarang->nama_brg?></td>
          <td><?=$rowbarang->harga_brg?></td>
          <td><?=$rowbarang->jenis?></td>
          <td><?=$rowbarang->satuan?></td>
          <td><?=$rowbarang->stok_brg?></td>
          <td>
           <a href="<?=base_url()?>barang/form/edit/<?=$rowbarang->kode_brg?>" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-pencil"></i></a>
           <a href="<?=base_url()?>barang/detail/<?=$rowbarang->kode_brg?>" class="btn btn-warning btn-sm"><i class="glyphicon glyphicon-search"></i></a>
           <a href="<?=base_url()?>barang/hapus/<?=$rowbarang->kode_brg?>" class="btn btn-danger btn-sm" onclick="return confirm('Anda Yakin menghapus data ini?')"><i class="glyphicon glyphicon-trash"></i></a>
          </td>
         </tr>
        <? }}?>
        </tbody>
       </table>
        </div> <!-- /panel-body-->
        <div class="panel-footer">
          <?=$paging?>
        </div>  <!-- /panel-footer-->
    </div>    <!-- /panel -->
    </div> <!-- /container -->
- See more at: http://fabernainggolan.net/membuat-paging-dan-search-bootstrap-codeigniter#sthash.CJtz2zmn.dpuf

<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url()."assets/plugins/jQuery/jquery-2.2.3.min.js"; ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url()."assets/bootstrap/js/bootstrap.min.js"; ?>"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url()."assets/plugins/morris/morris.min.js"; ?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url()."assets/plugins/sparkline/jquery.sparkline.min.js"; ?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url()."assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"; ?>"></script>
<script src="<?php echo base_url()."assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"; ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url()."assets/plugins/knob/jquery.knob.js"; ?>"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url()."assets/plugins/daterangepicker/daterangepicker.js"; ?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url()."assets/plugins/datepicker/bootstrap-datepicker.js"; ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url()."assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"; ?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url()."assets/plugins/slimScroll/jquery.slimscroll.min.js"; ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url()."assets/plugins/fastclick/fastclick.js"; ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()."assets/dist/js/app.min.js"; ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url()."assets/dist/js/pages/dashboard.js"; ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url()."assets/dist/js/demo.js"; ?>"></script>
<script src="<?php echo base_url("assets/bootstrap/js/multi-step-modal.js"); ?>"></script>
<script>
sendEvent = function(sel, step) {
    $(sel).trigger('next.m.' + step);
}
</script>
</body>
</html>
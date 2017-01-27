 <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Petty Cash | Membantu mengatur keuangan anda</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css'); ?>">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/AdminLTE.min.css'); ?>">
    </head>
    <body onload="window.print();">
        <div class="wrapper">
            <!-- Main content -->
            <section class="invoice">
                <!-- title row -->
                <div class="row">
                    <div class="col-xs-12">
                        <h2 class="page-header">
                            <img width="35px" height="25px" src="<?php echo base_url('assets/logo/logo-cash.png'); ?>">&nbsp;Data Master Pengeluaran 
                            <small class="pull-right">Date: <?php echo date('Y-m-d'); ?></small>
                        </h2>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info">
                    <div class="col-sm-4 invoice-col">
                        Data Rekapitulasi Pengeluaran & proyek Petty Cash
                        <address>
                            <strong>Petty Cash</strong><br>
                            Transaksi Pengeluaran User<br>
                            transaksi Project<br>
                        </address>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
  
                <!-- Table row -->
                <div class="row">
                    <div class="col-xs-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                    <th>No.</th>
                    <th>Nama Pengguna</th>
                    <th>Project</th>
                    <th>Jumlah Pengeluaran</th>
                    <th>Keterangan Pengeluaran</th>
                    <th>Tanggal</th>
                                </tr>
                            </thead>
                            <tbody>
                    <?php foreach ($master_pdf as $data): ?>
                    <?php 
                    $id = $data['idPengeluaran'];
                    $namauser = $data['username'];
                    $kodeProject = $data['idProject'];
                    $jumlah = $data['jumlahPengeluaran'];
                    $keterangan = $data['namaPengeluaran'];
                    $tgl = $data['tanggal'];

                    if ($kodeProject== null) {
                        $kodeProject = 'pribadi';
                    }else{
                        $kodeProject = 'PROJECT00'.$kodeProject;
                    }
                    ?>
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $namauser; ?></td>
                            <td><?php echo $kodeProject; ?></td>
                            <td><?php echo $jumlah; ?></td>
                            <td><?php echo $keterangan; ?></td>
                            <td><?php echo $tgl; ?></td>
                        </tr>
                    <?php endforeach; ?>      
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="6">Jumlah Total</td>
                                    <td></td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.col -->      
                </div>
                <!-- /.row -->
            </section>
            <!-- /.content -->
        </div>
        <!-- ./wrapper -->
    </body>
</html>

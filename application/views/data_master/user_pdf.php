<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Data transaksi <?php echo $this->session->userdata('username'); ?></title>
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
                    <div class="col-xs-12 bg-success">
                        <h2 class="page-header">
                            <img src="<?php echo base_url('assets/logo/logo.png'); ?>" style="width: 25px; height: 25px;"> Data Pengeluaran <?php echo $this->session->userdata('username'); ?>
                            <small class="pull-right">Date: <?php echo date('Y-m-d'); ?></small>
                        </h2>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- info row -->
                <?php foreach ($transaksi as $data_head): ?>
                            
                <?php endforeach ?>
                <div class="row invoice-info">
                    <div class="col-sm-4 invoice-col">
                        Data  Pengeluaran <br> <?php echo $data_head['username']; ?>
                        <address>
                            <strong>Id user</strong><br>
                            USER000<?php echo $data_head['idUser']; ?><br>
                            <br>
                        </address>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- Table row -->
                <div class="row">
                    <div class="col-xs-12 table-responsive">
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Project</th>
                                    <th>Anggaran Project</th>
                                    <th>Keterangan Pengeluaran</th>
                                    <th>Tanggal</th>
                                    <th>Jumlah</th>
                                </tr>
                            </thead>
                    <tbody>
                    <?php foreach ($transaksi as $row): ?>
                        <tr>
                            <td><?php echo $row['namaProject']; ?></td>
                            <td><?php echo $row['settingAnggaran']; ?></td>
                            <td><?php echo $row['namaPengeluaran']; ?></td>
                            <td><?php echo $row['tanggal']; ?></td>
                            <td><?php echo $row['jumlahPengeluaran']; ?></td>
                            
                        </tr>
                    <?php endforeach ?>
                </tbody>
                <tfoot>
                    <tr>
                    <?php foreach ($jumlah as $jumlah_p): ?>
                        <td colspan="5"><strong>Total Pengeluaran</strong> </td>
                        <td> <?php echo $jumlah_p['SUM(jumlahPengeluaran)']; ?></td>
                    <?php endforeach ?>   
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

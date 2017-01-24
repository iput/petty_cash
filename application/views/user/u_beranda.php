<section class="content-header">
    <h1>Beranda</h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-exchange"></i> Beranda</a></li>
        <li class="active">Beranda</li>
    </ol>
</section>
<section class="content">
    <div class="box box-solid" >
        <div class="box-header">
        
        </div>
        <!-- /.box-header -->
        <div class="box-body">
        <h3><span class="fa fa-bar-chart"></span>&nbsp;Statistik Pengeluaran anda</h3>
        <div class="row">
            <div class="col-xs-12">
                <a href="<?php echo base_url("s_pengeluaran"); ?>" type="button" class="btn btn-primary btn-flat">
                <span class="fa fa-plus"></span>&nbsp;Tambah Pengeluaran</a>

                <div class="btn-group navbar-right" style="margin-right: 10px;">
                    <button type="button" class="btn btn-default dropdown-toggle btn-flat" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cetak Data Transaksi <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href=""><span class="fa fa-file-excel-o"></span>&nbsp;File Excel</a></li>
                        <li><a href="<?php echo base_url('S_beranda/cetak_pdf'); ?>"><span class="fa fa-file-pdf-o"></span>&nbsp;File PDF</a></li>
                    </ul>
                </div>
        
            </div>
        </div>
        <div class=" table table-responsive">
            <table class="table table-striped table-bordered" style="margin-top: 20px;">
                <thead>
                    <tr>
                        <th>Nama Project</th>
                        <th>Anggaran Project</th>
                        <th>Jumlah Pengeluaran</th>
                        <th>Keterangan Pengeluaran</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($transaksi as $row): ?>
                        <tr>
                            <td><?php echo $row['namaProject']; ?></td>
                            <td><?php echo $row['settingAnggaran']; ?></td>
                            <td><?php echo $row['jumlahPengeluaran']; ?></td>
                            <td><?php echo $row['namaPengeluaran']; ?></td>
                            <td><?php echo $row['tanggal']; ?></td>
                            <td><?php echo $row['jam']; ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</section>
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
                <div class="btn-group">
                    <button type="button" class="btn btn-default btn-flat  dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tampilkan Data&nbsp;<span class="caret"></span></button>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('S_beranda'); ?>">Berdasarkan Project</a></li>
                        <li><a href="<?php echo base_url('S_beranda/get_data_all'); ?>">Semua Data</a></li>
                    </ul>
                </div>

                <div class="btn-group pull-right">
                    <button type="button" class="btn btn-default dropdown-toggle btn-flat" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cetak Data Transaksi&nbsp;<span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url('S_beranda/cetak_xls'); ?>"><span class="fa fa-file-excel-o"></span>&nbsp;File Excel</a></li>
                        <li><a href="<?php echo base_url('S_beranda/cetak_pdf'); ?>"><span class="fa fa-file-pdf-o"></span>&nbsp;File PDF</a></li>
                    </ul>
                </div>
        
            </div>
        </div> 
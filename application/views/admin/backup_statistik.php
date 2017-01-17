
<section class="content-header">
<h3>Statistik Pengeluaran</h3>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-area-chart"></i> Beranda</a></li>
        <li class="active">Data Statistik Pengeluaran</li>
    </ol>
</section>

<section class="content">
    <div class="box box-default">
    	<div class="box-header">
    		<div class="box-tools pull-right">
    			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    			<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
    		</div>
    	</div>
    	<div class="box-body">
    		<div class="chart">
    			<div id="report_pengeluaran">
					<?php 
					foreach ($report as $result) {
					 	$bulan[] = $result->tanggal;
					 	$nilai[] = (float)$result->jumlahPengeluaran;
					 } ?>
    			</div>		
    		</div>
    	</div>
    	<div class="box-footer">
    		<label>Diberdayakan oleh Jelajah Tekno Indonesia</label>
    	</div>
    </div>
</section>
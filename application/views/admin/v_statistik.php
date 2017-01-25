
<script src="<?php echo base_url('assets/plugins/chart/highcharts.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/chart/exporting.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/chart/jquery-1.9.1.min.js'); ?>" type="text/javascript"></script>

<section class="content-header">
    <h3>Statistik Pengeluaran</h3>
</section>

<section class="content">
    <div class="box box-default">
        <div id="data_statistik" style="min-width: 200px; height: 400px; margin: 0 auto"></div>		
    </div>
</section>
<?php
foreach ($report as $result) {
    $bulan[] = $result->tanggal;
    $value[] = $result->jumlahPengeluaran;
}
?>
<script type="text/javascript">
    $(document).ready(function () {
        $('#data_statistik').highcharts({
            chart: {
                type: 'column',
                margin: 75,
                options3d: {
                    enabled: false,
                    alpha: 10,
                    beta: 25,
                    depth: 70
                }
            },
            title: {
                text: 'laporan Statistik Pengeluaran',
                style: {
                    fontSize: '18px',
                    fontFamily: 'Verdana, sans-serif'
                }
            },
            subtitle: {
                text: 'Penjualan',
                style: {
                    fontSize: '15px',
                    fontFamily: 'Verdana, sans-serif'
                }
            },
            plotOptions: {
                column: {
                    depth: 25
                }
            },
            credits: {
                enabled: false
            },
            xAxis: {
                categories: <?php echo json_encode($bulan); ?>
            },
            exporting: {
                enabled: false
            },
            yAxis: {
                title: {
                    text: 'Jumlah'
                },
            },
            tooltip: {
                formatter: function () {
                    return 'The value for <b>' + this.x + '</b> is <b>' + Highcharts.numberFormat(this.y, 0) + '</b>, in ' + this.series.name;
                }
            },
            series: [{
                    name: 'Report Data',
                    data: <?php echo json_encode($value); ?>,
                    shadow: true,
                    dataLabels: {
                        enabled: true,
                        color: '#045396',
                        align: 'center',
                        formatter: function () {
                            return Highcharts.numberFormat(this.y, 0);
                        }, // one decimal
                        y: 0, // 10 pixels down from the top
                        style: {
                            fontSize: '13px',
                            fontFamily: 'Verdana, sans-serif'
                        }
                    }
                }]
        });
    });
</script>
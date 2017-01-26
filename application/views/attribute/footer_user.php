</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.0
    </div>
    <strong>Copyright &copy; 2017 <a href="#">Jelajah Tekno Indonesia</a>.</strong> All rights
    reserved.
</footer>


<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url() . "assets/plugins/jQuery/jquery-2.2.3.min.js"; ?>"></script>
<!-- jQuery UI 1.11.4 -->
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url() . "assets/bootstrap/js/bootstrap.min.js"; ?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url() . "assets/plugins/sparkline/jquery.sparkline.min.js"; ?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url() . "assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"; ?>"></script>
<script src="<?php echo base_url() . "assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"; ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() . "assets/plugins/knob/jquery.knob.js"; ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url() . "assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"; ?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url() . "assets/plugins/slimScroll/jquery.slimscroll.min.js"; ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url() . "assets/plugins/fastclick/fastclick.js"; ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() . "assets/dist/js/app.min.js"; ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() . "assets/dist/js/demo.js"; ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . "assets/plugins/jQueryMaskMoney/jquery.maskMoney.min.js"; ?>"></script>
<script>
    sendEvent = function(sel, step) {
        $(sel).trigger('next.m.' + step);
    }
</script>

<script src="<?php echo base_url('assets/plugins/chart/highcharts.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/chart/exporting.js'); ?>" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
  <?php
        foreach ($report as $result) {
            $bulan[] = $result->bulan;
            $value[] = (float)$result->pengeluaran;
        }
    ?>       
         var chartku;
         chartku = new Highcharts.Chart({
            chart : {
                renderTo : 'statistik_user',
                type : 'column'
            },
            title : {
                text : 'pengeluaran anda per bulan'
            },
            plotOptions : {
                column : {
                    depth : 25
                }
            },
            credits : {
                enabled : false
            },
            xAxis : {
                categories : <?php echo json_encode($bulan); ?>
            },
            yAxis : {
                title : {
                    text : 'Jumlah Pengeluaran'
                }
            },
            series : [{
                name : 'Jumlah Pengeluaran per bulan',
                data : <?php echo json_encode($value); ?>
            }]
         });
    });
</script>
<script>
// proses menampilkan info berhasil
$(document).ready(function() {
$('.alert-success').hide();
<?php if ($this->session->flashdata('msg')) { ?>
    $('.alert-success').html('<?php echo $this->session->flashdata('msg'); ?>').fadeIn().delay(1000).fadeOut('slow');
    });
<?php } ?>
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('.alert-danger').hide();
        <?php if ($this->session->flashdata('msg_hapus')): ?>
            $('.alert-danger').html('<?php echo $this->session->flashdata('msg_hapus'); ?>').fadeIn().delay(1000).fadeOut('slow');
        <?php endif ?>

        $('.alert-info').hide();
        <?php if ($this->session->flashdata('pesan_update')): ?>
            $('.alert-info').html('<?php echo $this->session->flashdata('pesan_update'); ?>').fadeIn().delay(1000).fadeOut('slow');
        <?php endif ?>
        
        $('.alert-warning').hide();
        <?php if ($this->session->flashdata('pesan_gagal')): ?>
            $('.alert-warning').html('<?php echo $this->session->flashdata('pesan_gagal'); ?>').fadeIn().delay(1000).fadeOut('slow');
        <?php endif ?>
    });
</script>
</body>
</html>

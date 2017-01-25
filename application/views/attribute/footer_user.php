</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> alfa
    </div>
    <strong>Copyright &copy; 2017 <a href="#">Jelajah Tekno Indonesia</a>.</strong> All rights
    reserved.
</footer>


<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url() . "assets/plugins/jQuery/jquery-2.2.3.min.js"; ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url() . "assets/bootstrap/js/bootstrap.min.js"; ?>"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url() . "assets/plugins/morris/morris.min.js"; ?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url() . "assets/plugins/sparkline/jquery.sparkline.min.js"; ?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url() . "assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"; ?>"></script>
<script src="<?php echo base_url() . "assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"; ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() . "assets/plugins/knob/jquery.knob.js"; ?>"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url() . "assets/plugins/daterangepicker/daterangepicker.js"; ?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url() . "assets/plugins/datepicker/bootstrap-datepicker.js"; ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url() . "assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"; ?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url() . "assets/plugins/slimScroll/jquery.slimscroll.min.js"; ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url() . "assets/plugins/fastclick/fastclick.js"; ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() . "assets/dist/js/app.min.js"; ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url() . "assets/dist/js/pages/dashboard.js"; ?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() . "assets/dist/js/demo.js"; ?>"></script>
<script src="<?php echo base_url("assets/bootstrap/js/multi-step-modal.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . "assets/plugins/jQuertMaskMoney/jquery.maskMoney.min.js"; ?>"></script>
<script src="https://code.highcharts.com"></script>
<script src="<?php echo base_url('assets/plugins/chart/highcharts.js'); ?>" type="text/javascript"></script>
<script src="<?php echo base_url('assets/plugins/chart/exporting.js'); ?>" type="text/javascript"></script>

<script>
    sendEvent = function(sel, step) {
        $(sel).trigger('next.m.' + step);
    }
</script>
<script type="text/javascript">
    $(document).ready(function(){
<?php
            foreach ($report as $result) {
                $bulan[] = $result->bulan;
                $value[] = (float)$result->pengeluaran;
            }
            ?>
            var chart1;
             chart1 = new Highcharts.Chart({
        chart : {
            renderTo : 'areaCanvas',
            type : 'column'
        },
        title: {
            text : 'Data Pengeluaran dihitung Perbulan'
        },
        plotOptions:{
            column :{
                depth : 25
            }
        },
        credits : {
            enabled : false
        },
        xAxis : {
            categories : <?php echo json_encode($bulan);?>
        },
        yAxis : {
            title : {
                text : 'Jumlah Pengeluaran'
            }
        },
        series: [{
            name: 'Jumlah Pengeluaran dihitung per bulan',
            data: <?php echo json_encode($value);?>
        }]
    });
    });
</script>
</body>
</html>

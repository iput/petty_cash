<section class="content-header">
	<h1>Beranda</h1>
	<ol class="breadcrumb">
		<li><a href=""><i class="fa fa-exchange"></i> Beranda</a></li>
		<li class="active">Beranda</li>
	</ol>
</section>
<section class="content">
      <div class="box box-solid bg-blue-gradient" >
            <div class="box-header">
              <i class="fa fa-calendar"></i>

              <h3 class="box-title">Calendar</h3>
              <!-- tools box -->
              <!-- /. tools -->
              <p></p>
              <form>
              <div class="col-xs-12">
					     <select class="form-control" name="tgl">
                    <option>Pilih Nama Project</option>
                    <option value="Makan Kantor">Makan Kantor</option>
                    <option value="Makan Bersama">Makan Bersama</option>
                    <option value="Liburan">Liburan</option>
                </select>
              </div>
              </form>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.box-body -->
            <div class="box-footer text-black">
              <div class="row" style="text-align: center;">
                  <h3>Sisa Pengeluaran Project : Rp.50.000.000</h3>

                  <h4>Kemarin anda Hemat Rp.70.000, Boroslah hari ini :D</h4>
              </div>
        <form method="post" enctype="multipart/form-data" class="form-horizontal">
      
  <table class="table table-bordered table-responsive">
    <tr>
      <td>
      <label class="control-label">Makan dan Minum</label> </td>
        <td><label class="control-label">Rp.10.000.000</label> </td>
    </tr>
    
    <tr>
      <td><label class="control-label">Oleh-oleh</label></td>
        <td><label class="control-label">Rp.20.000.000</label> </td>
    </tr>
    
    <tr>
      <td><label class="control-label">Transportasi</label></td>
        <td><label class="control-label">Rp.40.000.000</label> </td>
    </tr>
    
    <tr>
      <td></td>
      <td><label class="control-label">___________________________+</label> </td>
    </tr>
    <tr>
      <td></td>
      <td><label class="control-label">Rp.70.000.000</label> </td>
    </tr>  
    </table>
</form>              
              <div class="row">
                  <div class="col-xs-4col-md-3 navbar-right" style="padding-left: 400px">
                    <a href="<?php echo base_url("s_pengeluaran"); ?>" type="button" class="btn btn-primary">
                    <span class="fa fa-plus"></span> 
                    Tambah Pengeluaran</a>
                  </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
</section>
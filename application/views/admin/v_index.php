
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Dashboard
        <small>Petty Cash</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-home"></i> Beranda</a></li>
        <li class="active">Dashboard</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">   
   <div class="row">
   	<div class="col-lg-3 col-xs-6">
   		<div class="small-box bg-aqua">
   			<div class="inner">
   				<h4><strong>User</strong></h4>
   				<p>Perkembangan User</p>
   			</div>
   			<div class="icon">
   				<span class="ion ion-person-add"></span>
   			</div>
   			<a href="<?php echo base_url("c_user/index"); ?>" class="small-box-footer">Selengkapnya <span class="fa fa-arrow-circle-right"></span></a>
   		</div>
   	</div>

   	<div class="col-lg-3 col-xs-6">
   		<div class="small-box bg-green">
   			<div class="inner">
   				<h4><strong>Pengeluaran</strong></h4>
   				<p>Statistik Pengeluaran</p>
   			</div>
   			<div class="icon">
   				<span class="ion ion-stats-bars"></span>
   			</div>
   			<a href="<?php echo base_url("c_pengeluaran/index"); ?>" class="small-box-footer">Selengkapnya <span class="fa fa-arrow-circle-right"></span></a>
   		</div>
   	</div>
   	<div class="col-lg-3 col-xs-6">
   		<div class="small-box bg-yellow">
   			<div class="inner">
   				<h4><strong>Projetcs</strong></h4>
   				<p>Statistik Project</p>
   			</div>
   			<div class="icon">
   				<span class="fa fa-calendar"></span>
   			</div>
   			<a href="<?php echo base_url("C_project/index"); ?>" class="small-box-footer">Selengkapnya <span class="fa fa-arrow-circle-right"></span></a>
   		</div>
   	</div>
   	<div class="col-lg-3 col-xs-6">
   		<div class="small-box bg-red">
   			<div class="inner">
   				<h4><strong>Pengguna Project</strong></h4>
   				<p>Statistik Pengguna Project</p>
   			</div>
   			<div class="icon">
   				<span class="fa fa-user"></span>
   			</div>
   			<a href="<?php echo base_url("c_project/index"); ?>" class="small-box-footer">Selengkapnya <span class="fa fa-arrow-circle-right"></span></a>
   		</div>
   	</div>
   </div>

    <div class="box box-primary">
    	<div class="box-header with-border">
    		<h2 class="box-title"><strong>Statistik perkembangan user</strong></h2>
    		<div class="box-tools pull-right">
    			<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
    			<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
    		</div>
    	</div>
    	<div class="box-body">
    		<div class="table-responsive">
    			<table id="tabel_user" class="table table-hover table-bordered table-striped">
    				<thead>
            <tr>
              <th>No.</th>
              <th>Nama User</th>
              <th>Email</th>
              <th>Level User</th>
            </tr>    
            </thead>
            <tbody>
            <?php foreach ($data as $data_in): ?>
              <tr>
                <td><?php echo $data_in['idUser']; ?></td>
                <td><?php echo $data_in['username']; ?></td>
                <td><?php echo $data_in['email']; ?></td>
                <td><?php echo $data_in['level']; ?></td>
              </tr>
            <?php endforeach ?>  
            </tbody>
    				<tfoot>
              <tr>
              <th>No.</th>
              <th>Nama User</th>
              <th>Email</th>
              <th>Level User</th>
            </tr>    
            </tfoot>
    			</table>
    		</div>
    	</div>
    </div>

</section>
<!-- /.content -->

<section class="content-header">
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Data Pengeluaran baru</h3>

            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <!-- <div class="col-xs-12"> -->
            <form class="form-horizontal" method="POST" enctype="multipart/form-data" action=" <?php echo base_url("C_pengeluaran/insert_pengeluaran/simpan_pengeluaran"); ?>" >
                <div class="form-group">
                    <label class="control-label col-md-4">Jumlah Pengeluaran</label>
                    <div class="col-md-8">
                        <input type="text" name="txt_nilai_pengeluaran" class="form-control col-md-4" placeholder="Rp." required="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4">Nama Pengguna</label>
                    <div class="col-md-8">
                        <select class="form-control col-md-4" name="combo_pengguna" id="cb_user">
                            <option value="BLANK">Pilih Nama Pengguna</option>
                            <?php foreach ($idUser as $data): ?>
                                <option value="<?php echo $data['idUser']; ?>"><?php echo $data['username']; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4">Nama Project</label>
                    <div class="col-md-8">
                        <select class="form-control col-md-4" name="combo_kategori" id="cb_project">
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label">Keterangan Pengeluaran</label>
                    <div class="col-md-8">
                        <textarea class="form-control" rows="3" name="txt_keterangan" placeholder="Keterangan penggunaan biaya pengeluaran"></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-md-4">Bukti Pengeluaran</label>
                    <div class="col-md-8">
                        <input type="file" name="userrfile" size="20">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-4"></div>
                    <div class="col-md-8">
                        <a href="<?php echo base_url('C_pengeluaran/index'); ?>" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span>&nbsp;Kembali</a>
                        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-save"></span>&nbsp;Tambah</button>
                    </div>
                </div>
            </form>
            <!-- </div> -->
        </div>
        <!-- /.box-body -->
        <div class="box-footer">

        </div>
        <!-- /.box-footer-->
    </div>
    <!-- /.box -->

</section>
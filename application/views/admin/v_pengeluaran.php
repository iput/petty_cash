<section class="content-header">
    <h1>Data Pengeluaran</h1>
    <ol class="breadcrumb">
        <li><a href=""><span class="fa fa-exchange"></span>Beranda</a></li>
        <li class="active">Pengeluaran</li>
    </ol>

    <section class="content">
        <div class="box">
            <!-- awal box body -->
            <div class="box-body">

                    <button style="margin-bottom: 10px;" type = "button" class="btn btn-primary btn-flat" data-toggle ="modal" data-target="#modal_tambah_pengeluaran"><span class="glyphicon glyphicon-plus"></span>&nbsp;Tambah Pengeluaran</button>
                <div class="col-md-1.75 pull-right" style="margin-bottom: 10px;">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-flat">Cetak Dokumen</button>
                        <button type="button" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown" haspopup="true" aria-expanded="false">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="<?php echo base_url('C_pengeluaran/cetak_excel'); ?>"><span class="fa fa-file-excel-o"></span> Excel</a></li>
                            <li><a href="<?php echo base_url('C_pengeluaran/cetak_pdf'); ?>" target="blank" ><span class="fa fa-file-pdf-o"></span> PDF</a></li>
                        </ul>
                    </div>
                </div>
                <!-- modal untuk edit data pengeluaran -->
                <div class="modal fade" id="modal_edit_pengeluaran" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                <h3>edit data pengeluaran</h3>
                            </div>
                            <div class="modal-body">
                                <form class="form-horizontal"  method="POST" id="form_edit_pengeluaran">
                                    <div class="form-group">
                                        <input type="hidden" name="id_data_pengeluaran" id="id_pengeluaran">
                                        <label class="control-label col-md-3">Jumlah Pengeluaran</label>
                                        <div class="col-md-8">
                                            <input type="text" name="edit_nilai_pengeluaran" id="edit_nilai_pengeluaran" class="form-control col-md-6" placeholder="Rp.">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Nama Pengguna</label>
                                        <div class="col-md-8">
                                            <select class="form-control" name="edit_nama_user" id="edit_nama_user">
                                                <?php foreach ($idUser as $data): ?>
                                                    <option value="<?php echo $data['idUser']; ?>"><?php echo $data['username']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Nama project</label>
                                        <div class="col-md-8">
                                            <select class="form-control" name="edit_nama_project" id="edit_nama_project">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Keterangan pengeluaran</label>
                                        <div class="col-md-8">
                                            <textarea name="edit_keterangan_pengeluaran" rows="4" cols="80" class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3"></div>
                                        <div class="col-md-8">
                                            <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Batal</button>
                                            <button type="submit" class="btn btn-primary btn-flat"><span class="glyphicon glyphicon-refresh"></span> Perbarui</button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Modal untuk tambah pengeluaran-->
                <div class="modal fade" id="modal_tambah_pengeluaran" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">
                                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                                <h3>Tambah Data Pengeluaran</h3>
                            </div>
                            <div class="modal-body">
                                <div><?= validation_errors() ?></div>
                                <?= form_open_multipart('C_pengeluaran/insert_coba2/simpan_pengeluaranAdmin', ['class' => 'form-horizontal']) ?>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Jumlah Pengeluaran</label>
                                    <div class="col-md-8">
                                        <input type="text" name="txt_nilai_pengeluaran" id="edit_nilai_pengeluaran" class="form-control col-md-6" placeholder="Rp.">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Nama Pengguna</label>
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
                                    <label class="control-label col-md-3">Nama Project</label>
                                    <div class="col-md-8">
                                        <select class="form-control col-md-4" name="combo_kategori" id="cb_project"></select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label">Keterangan Pengeluaran</label>
                                    <div class="col-md-8">
                                        <textarea class="form-control" rows="3" name="txt_keterangan" placeholder="Keterangan penggunaan biaya pengeluaran"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Bukti Pengeluaran</label>
                                    <div class="col-md-8">
                                        <input type="file" name="userfile" id="userfile">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-8">
                                        <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Tutup</button>
                                        <button type="submit" class="btn btn-primary btn-flat"><span class="glyphicon glyphicon-save"></span>&nbsp;Simpan</button>        
                                    </div>
                                </div>
                                <?= form_close() ?>
                            </div>

                        </div>
                    </div>
                </div>
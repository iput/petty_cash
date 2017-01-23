<section class="content-header">
    <h1>data Proyek</h1>
    <ol class="breadcrumb">
        <li><a href="" ><span class="fa fa-tags"></span> Beranda</a></li>
        <li>Data Projects</li>
    </ol>
</section>

<section class="content">
    <div class="box">
        <!-- box header -->
        <div class="box-header">
            <h3 class="box-title">Data Statistik Projects</h3>
        </div>
        <!-- box header end -->

        <!-- box body -->
        <div class="box-body">
            <div col-md-2" style="margin: 10px;">
                 <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#project_baru"><span class="fa fa-plus"></span> Tambah Proyek</button>
            </div>

            <!-- form tambah project -->
            <form class="modal fade form-horizontal" id="project_baru" method="POST" action="<?php echo base_url('C_project/insert_project/simpan_project'); ?>">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <button  type="button" data-dismiss="modal" class="close"><span aria-hidden="true">&times;</span></button>
                            <h3>Tambah Project Baru</h3>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label class="control-label col-md-3">Nama Project</label>
                                <div class="col-md-8">
                                    <input type="text" name="txt_nm_project" class="form-control col-md-6" placeholder="Nama project" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Anggaran Project</label>
                                <div class="col-md-8">
                                    <input type="text" name="txt_anggaran" class="form-control col-md-6" placeholder="Rp." required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Kategori Anggaran</label>
                                <div class="col-md-8">
                                    <select class="form-control col-md-6" name="combo_anggaran">
                                        <option value="">Pilih Setting Anggaran</option>
                                        <option value="hari">Harian</option>
                                        <option value="bulan">Bulanan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Sisa Anggaran</label>
                                <div class="col-md-8">
                                    <input type="text" name="txt_sisa_angg" class="form-control col-md-6" placeholder="Rp.">
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><span class=" fa fa-close"></span> Tutup</button>
                            <button type="submit" class="btn btn-primary" onsubmit=" return alert('data berhasil disimpan');"><span class="fa fa-save"></span> Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
<div class="modal fade" id="edit_project" tabindex="-1" role="dialog">
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
                        <label class="control-label col-md-3">Foto Pengeluaran</label>
                        <div class="col-md-8">
                            <input type="file" name="edit_foto" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-3"></div>
                        <div class="col-md-8">
                            <button type="button" class="btn btn-danger" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Batal</button>
                            <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-refresh"></span> Perbarui</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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
            <div class="col-md-2" style="margin: 10px;">
                 <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#project_baru"><span class="fa fa-plus"></span> Tambah Proyek</button>
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
                                        <option value="harian">Harian</option>
                                        <option value="bulanan">Bulanan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Sisa Anggaran</label>
                                <div class="col-md-8">
                                    <input type="text" name="txt_sisa_angg" class="form-control col-md-6" placeholder="Rp.">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-3"></div>
                                <div class="col-md-8">
                                    <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class=" fa fa-close"></span> Tutup</button>
                                    <button type="submit" class="btn btn-primary btn-flat" onsubmit=" return alert('data berhasil disimpan');"><span class="fa fa-save"></span> Simpan</button>
                                </div>
                            </div>                            
                        </div>

                    </div>
                </div>
            </form>

<div class="modal fade" id="edit_project" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                <h3>edit data Project</h3>
            </div>
            <div class="modal-body">
                <form class="form-horizontal"  method="POST" id="form_edit_project">
                    <div class="form-group">
                        <input type="hidden" name="id_project" id="id_project">
                        <label class="control-label col-md-3">Nama project</label>
                        <div class="col-md-8">
                        <input type="text" name="edit_nama_project" class="form-control col-md-6" placeholder="Rp.">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Anggaran</label>
                        <div class="col-md-8">
                        <input type="text" name="edit_jumlah_anggaran" class="form-control col-md-6" placeholder="Rp.">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Kategori Anggaran</label>
                            <div class="col-md-8">
                                <select class="form-control" name="edit_seting_anggaran" id="edit_seting_anggaran">
                                <option value=null>Pilih Setting Anggaran</option>
                                <option value="harian">Harian</option>
                                <option value="bulanan">Bulanan</option>
                                </select>
                            </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3">Sisa Anggaran</label>
                        <div class="col-md-8">
                            <input type="text" name="edit_sisa_project" class="form-control col-md-6" placeholder="Rp.">
                        </div>
                        </div>
                     
                                <div class="form-group">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-8">
                                        <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-floppy-remove"></span>&nbsp;Batal</button>
                                        <button type="submit" class="btn btn-primary btn-flat"><span class="glyphicon glyphicon-floppy-save"></span>&nbsp;Perbarui</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    
                </div>
            </div>
             </div>
            </div>

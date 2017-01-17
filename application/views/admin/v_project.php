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
            <form class="modal fade form-horizontal" id="project_baru" method="POST" action="">
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
                                        <select class="form-control col-md-6" name="combo_kategori">
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
                            <button type="submit" class="btn btn-primary"><span class="fa fa-save"></span> Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
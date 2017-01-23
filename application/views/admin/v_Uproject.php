<section class="content-header">
    <h1>Pengguna Proyek</h1>
    <ol class="breadcrumb">
        <li><a href="" ><span class="fa fa-tags"></span> Beranda</a></li>
        <li>Data Pengguna Projects</li>
    </ol>
</section>

<section class="content">
    <div class="box">
        <!-- box header -->
        <div class="box-header">
            <h3 class="box-title">Data Pengguna Projects</h3>
        </div>
        <!-- box header end -->

        <!-- box body -->
        <div class="box-body">
            <div class="col-md-2" style="margin: 10px;">
                <button type="button" class="btn btn-primary btn-flat" data-toggle="modal" data-target="#validasi_proyek"><span class="fa fa-plus"></span> Tambah Proyek</button>
            </div>

            <!-- form untuk percobaan pengganti modal -->
            <form class="modal modal fade multi-step form-horizontal" id="validasi_proyek">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h4 class="modal-title step-1" data-step="1">Buat Proyek Baru</h4>
                            <h4 class="modal-title step-2" data-step="2">Sertakan Pengguna</h4>
                            <div class="m-progress">
                                <div class="m-progress-bar-wrapper">
                                    <div class="m-progress-bar"></div>
                                </div>
                                <div class="m-progress-stats">
                                    <span class="m-progress-current">
                                    </span>/<span class="m-progress-total"></span>
                                </div>
                                <div class="m-progress-complete">
                                    Selesai
                                </div>
                            </div>
                        </div>
                        <div class="modal-body step-1" data-step="1">
                            <div class="form-group">
                                <label class="control-label col-md-4">Nama Project</label>
                                <div class="col-md-6">
                                    <input type="text" name="nama_proyek" class="form-control col-md-4" placeholder="Nama Project baru">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Anggaran Project</label>
                                <div class="col-md-6">
                                    <input type="text" name="anggaran_proyek" class="form-control col-md-4" placeholder="Anggaran pengeluaran proyek">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Periode anggaran</label>
                                <div class="col-md-6">
                                    <select class="form-control col-md-4" name="combo_kategori">
                                        <option value="pribadi">pilih Kategori</option>
                                        <option value="harian">Harian</option>
                                        <option value="bulanan">Bulanan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-4">Sisa Anggaran</label>
                                <div class="col-md-6">
                                    <input type="text" name="sisa_anggaran" class="form-control col-md-4" placeholder="sisa pengeluaran">
                                </div>
                            </div>
                        </div>
                        <div class="modal-body step-2" data-step="2">
                            <table class="table table-bordered table-striped table-hover">
                                <tr>
                                    <th>No. </th>
                                    <th>Nama User</th>
                                    <th>Operasi</th>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>zainul</td>
                                    <td>
                                        <label>
                                            <input type="checkbox" name="chek_validasi"> Bergabung
                                        </label>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">selesai</button>
                            <button type="button" class="btn btn-primary step step-1" data-step="2" onclick="sendEvent('#validasi_proyek', 2)">Selanjutnya</button>
                            <button type="submit" class="btn btn-primary step step-2" data-step="2" onclick="sendEvent('#validasi_proyek', 2)">Simpan</button>
                        </div>
                    </div>
                </div>
            </form>
            <!-- akhir kata form multi level -->
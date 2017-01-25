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
                <form class="form-horizontal" id="formProyek" method="post" action="<?php echo base_url('c_project/insert_tbdata') ?>">
                    <div class="form-group">
                        <label class="control-label col-md-2">Nama Proyek : </label>
                        <div class="col-md-4">
                            <select id ="combo_project" class="form-control col-md-4" name="combo_level">
                                <option value="0">-: Pilih Project :-</option>
                                <?php foreach ($idProject as $data): ?>
                                    <option value="<?php echo $data['idProject']; ?>"><?php echo $data['namaProject']; ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class=" col-md-2 table table-responsive">
                            <table id="tabel_user_project" class="table table-hover table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama Anggota</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($idUser as $data): ?>
                                    <tr> 
                                        <td>
                                            <input name="nilai[]" type="checkbox"  value="<?php echo $data['idUser']; ?>"/>
                                        </td>

                                        <td align='center'><?php echo $data['username']; ?></td> 
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="col-xs-1">
                          <button type="submit" class="btn btn-primary btn-flat"><span class="glyphicon glyphicon-save"></span> Simpan</button>
                      </div>
                            
                    </div>
                </form>
        </div>
</div>
</section>
            <!-- akhir kata form multi level -->
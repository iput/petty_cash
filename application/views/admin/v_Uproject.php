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
            <div>
                    <form class="form-horizontal" id="formProyek" action="<?php echo base_url('c_project/insert_tbdata')?>">
                    <div class="form-group">
                    <label class="control-label col-md-2">Nama Proyek : </label>
                    <div class="col-md-6">
                    <select id ="combo_project" class="form-control col-md-4" name="combo_level">
                    <option value="0">-: Pilih Project :-</option>
                    <?php foreach ($idProject as $data): ?>
                    <option value="<?php echo $data['idProject']; ?>"><?php echo $data['namaProject']; ?></option>
                        <?php endforeach ?>
                    </select>
                    </div>
                    </div>
                </form>
            </div>

            <!-- akhir kata form multi level -->
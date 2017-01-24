<!-- Content Wrapper. Contains page content -->
   
    <!-- Main content -->
    <section class="content">
      <div class="box">
        <!-- box header -->
        <div class="box-header">
            <h3 class="box-title">Data Pengeluaran</h3>
        </div>
        <!-- box header end -->

        <!-- box body -->
        <div class="box-body">
            <?php echo form_open_multipart('C_pengeluaran/insert_coba2/simpan_pengeluaranAdmin'); ?>

            <table class="table">
                <tr>
                <td><label class="control-label">Jumlah Pengeluaran:</label> </td>
                <td>
                <input type="text" name="txt_nilai_pengeluaran" class="form-control col-md-4" placeholder="Rp." required="">
                </td>
                </tr>
                <tr>
                <td><label class="control-label">Nama user:</label> </td>
                    <td><select class="form-control" name="combo_pengguna" id="cb_user">
                            <option value="0">Pilih Nama Project</option>
                            <?php foreach ($idUser as $data):?>
                                <option value="<?php echo $data['idUser']; ?>"><?php echo $data['username']; ?></option>
                            <?php endforeach ?>
                        </select></td>
                </tr>
                <tr>
                    <td><label class="control-label">Nama Project:</label> </td>
                    <td><select class="form-control" name="combo_kategori" id="cb_project">
                        </select></td>
                </tr>


                <tr>
                    <td><label class="control-label">Keterangan:</label></td>
                    <td><input class="form-control" type="text" name="txt_keterangan" placeholder="Masukkan Keterangan Penggunaan Uang" /></td>
                </tr>

                <tr>
                    <td><label class="control-label">Bukti Foto:</label></td>
                    <td><input class="input-group" type="file" name="filefoto"/></td>
                </tr>

                <tr>
                    <td></td>
                    <td colspan="2"><button type="submit" name="btnsave" class="btn btn-default btn-flat">
                            <span class="glyphicon glyphicon-save"></span> 
                            &nbsp; Simpan
                        </button>
                    </td>
                </tr> 
            </table>
            </form>
        </div>
    </div>

      
    </section>
    <!-- /.content -->
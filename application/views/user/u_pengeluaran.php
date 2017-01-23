<script type="text/javascript" src="<?php echo base_url() . "assets/plugins/jQuery/jquery-2.2.3.min.js"; ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . "assets/plugins/jQuertMaskMoney/jquery.maskMoney.min.js"; ?>"></script>
<section class="content-header">
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-exchange"></i> Beranda</a></li>
        <li class="active">Pengeluaran</li>
    </ol>
    <p></p>
</section>

<section class="content">
    <div class="box">
        <!-- box header -->
        <div class="box-header">
            <h3 class="box-title">Data Pengeluaran</h3>
        </div>
        <!-- box header end -->

        <!-- box body -->
        <div class="box-body">
            <?php echo form_open_multipart('S_pengeluaran/insert_coba/simpan_pengeluaranUser'); ?>

            <table class="table table-bordered table-responsive">
                <tr>
                    <td><label class="control-label">Nama Project:</label> </td>
                    <td><select class="form-control" name="nama_project">
                            <?php foreach ($idUser as $data): ?>
                                <option value="<?php echo $data['idProject']; ?>"><?php echo $data['namaProject']; ?></option>
                            <?php endforeach ?>
                        </select></td>
                </tr>

                <tr>
                    <td><label class="control-label">Jumlah Uang:</label> </td>
                    <td>
                        <script type="text/javascript">
                            $(document).ready(function() {
                                $('#angka3').maskMoney({prefix: 'Rp. ', thousands: '.', decimal: ',', precision: 0});
                            });
                        </script>

                        <input name="txtjml_uang" type="text" class="form-control" id="angka3" placeholder="Masukkan Jumlah Uang" /></td>
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
                    <td colspan="2"><button type="submit" name="btnsave" class="btn btn-default">
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
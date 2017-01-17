<div class="row"></div>
<div class="row">
    <div class="col-xs-12">
<!--         <div class="table-responsive"> -->
            <table id="tabel_bag_pengeluaran" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                    <th>No.</th>
                    <th>Nama Pengguna</th>
                    <th>Project</th>
                    <th>Anggaran</th>
                    <th>Jumlah Pengeluaran</th>
                    <th>Keterangan Pengeluaran</th>
                    <th>Tanggal</th>
                    <th>Operasi</th>
                </tr>
                </thead>
                <tbody id="data_pengeluaran">
                  <?php foreach ($pengeluaran as $data): ?>
                        <tr>
                            <td><?php echo $data['idPengeluaran']; ?></td>
                            <td><?php echo $data['username']; ?></td>
                            <td><?php echo $data['namaProject']; ?></td>
                            <td><?php echo $data['settingAnggaran']; ?></td>
                            <td><?php echo $data['jumlahPengeluaran']; ?></td>
                            <td><?php echo $data['namaPengeluaran']; ?></td>
                            <td><?php echo $data['tanggal']; ?></td>
                            <td>
                              <a href="javascript:;" class="btn btn-info btn_edit_pengeluaran" data= "<?php echo $data['idPengeluaran']; ?>"><span class="fa fa-pencil-square"></span></a>
                              <a href="<?php echo base_url('C_pengeluaran/delete_pengeluaran/'.$data['idPengeluaran']);?>" class="btn btn-danger"  onclick="return confirm('Apakah anda yakin akan menghapus data terkait ?');"><span class="glyphicon glyphicon-remove"></span></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                </tbody>
            </table>
<!--       </div> -->
</div>
</div>
</div>
<!-- akhir box body -->
</div>
</section>
</section>

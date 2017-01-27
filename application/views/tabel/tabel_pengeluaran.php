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
                    <th>Jumlah Pengeluaran</th>
                    <th>Keterangan Pengeluaran</th>
                    <th>Tanggal</th>
                    <th>Operasi</th>
                </tr>
                </thead>
                <tbody id="data_pengeluaran">
                  <?php foreach ($pengeluaran as $data): ?>
                    <?php 
                    $id = $data['idPengeluaran'];
                    $namauser = $data['username'];
                    $kodeProject = $data['idProject'];
                    $jumlah = $data['jumlahPengeluaran'];
                    $keterangan = $data['namaPengeluaran'];
                    $tgl = $data['tanggal'];

                    if ($kodeProject== null) {
                        $kodeProject = 'pribadi';
                    }else{
                        $kodeProject = 'PROJECT00'.$kodeProject;
                    }
                    ?>
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $namauser; ?></td>
                            <td><?php echo $kodeProject; ?></td>
                            <td><?php echo $jumlah; ?></td>
                            <td><?php echo $keterangan; ?></td>
                            <td><?php echo $tgl; ?></td>
                            <td>
                              <a href="javascript:;" class="btn btn-info btn_edit_pengeluaran btn-flat" data= "<?php echo $data['idPengeluaran']; ?>"><span class="fa fa-pencil-square"></span></a>
                              <a href="<?php echo base_url('C_pengeluaran/delete_pengeluaran/'.$data['idPengeluaran']);?>" class="btn btn-danger btn-flat"  onclick="return confirm('Apakah anda yakin akan menghapus data terkait ?');"><span class="glyphicon glyphicon-remove"></span></a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                </tbody>
            </table>
<!--</div> -->
</div>
</div>
</div>
<!-- akhir box body -->
</div>
</section>
</section>

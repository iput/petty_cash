<div class=" table table-responsive">
            <table class="table table-striped table-bordered" style="margin-top: 20px;">
                <thead>
                    <tr>
                        <th>ID Pengeluaran</th>

                        <th>Jumlah Pengeluaran</th>
                        <th>Keterangan Pengeluaran</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($transaksi as $row): ?>
                    <?php 
                    $id = $row['idProject'];
                    $jumlah = $row['jumlahPengeluaran'];
                    $nama = $row['namaPengeluaran'];
                    $tgl = $row['tanggal'];
                    if ($id == null) {
                        $id = 'pribadi';
                    }else{
                        $id = 'PROJECT00'.$id;
                    }
                     ?>                 
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $jumlah; ?></td>
                            <td><?php echo $nama; ?></td>
                            <td><?php echo $tgl; ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</section>
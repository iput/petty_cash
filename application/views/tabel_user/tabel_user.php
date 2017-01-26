<div class=" table table-responsive">
            <table class="table table-striped table-bordered" style="margin-top: 20px;">
                <thead>
                    <tr>
                        <th>Nama Project</th>
                        <th>Anggaran Project</th>
                        <th>Jumlah Pengeluaran</th>
                        <th>Keterangan Pengeluaran</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($transaksi as $row): ?>                   
                        <tr>
                            <td><?php echo $row['namaProject']; ?></td>
                            <td><?php echo $row['settingAnggaran']; ?></td>
                            <td><?php echo $row['jumlahPengeluaran']; ?></td>
                            <td><?php echo $row['namaPengeluaran']; ?></td>
                            <td><?php echo $row['tanggal']; ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</section>
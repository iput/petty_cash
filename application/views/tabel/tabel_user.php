<div class="row"></div>
<div class="row">
    <div class="col-xs-12">
        <div class="table-responsive">
            <table id="tabel_user" class="table table-hover table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Id User</th>
                        <th>Nama User</th>
                        <th>Email User</th>
                        <th>Level</th>
                        <th>Status</th>
                        <th>Operasi</th>
                    </tr>
                </thead>
                <tbody id="showdata">
                <?php foreach ($data_in as $data): ?>
                <tr>
                        <td><?php echo $data['idUser']; ?></td>
                        <td><?php echo $data['username']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['level']; ?></td>
                        <td><?php echo $data['status'];?></td>
                        <td>
                            <a href="javascript:;" class="btn btn-info btedit btn-flat" data="<?php echo $data['idUser'];?>"><span class="fa fa-pencil-square"></span></a>
                            <a href="<?= base_url() ?>c_user/do_delete/<?= $data['idUser'] ?>" class="btn btn-danger btdelete btn-flat" onclick = "return confirm('anda yakin ingin hapus ini?')"><span class="fa fa-trash"></span></a>
                        </td>
                    </tr>
                <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<!-- akhir body -->
</div>
</section>
<!-- modal -->

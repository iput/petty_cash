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
                        <th>Password User</th>
                        <th>level</th>
                        <th>Operasi</th>
                    </tr>
                </thead>
                <tbody id="showdata">
                <?php foreach ($data_in as $data): ?>
                <tr>
                        <td><?php echo $data['idUser']; ?></td>
                        <td><?php echo $data['username']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo md5($data['password']); ?></td>
                        <td><?php echo $data['level']; ?></td>
                        <td>
                            <a href="javascript:;" class="btn btn-info btedit" data="<?php echo $data['idUser'];?>"><span class="fa fa-pencil-square"></span></a>
                            <a href="<?= base_url() ?>c_user/do_delete/<?= $data['idUser'] ?>" class="btn btn-danger btdelete" onclick = "return confirm('anda yakin ingin hapus ini?')"><span class="fa fa-trash"></span></a>
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

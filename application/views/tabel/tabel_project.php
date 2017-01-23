<div class="row"></div>
<div class="row">
    <div class="col-xs-12">

            <table id="tabel_project" class="table table-hover table-striped table-bordered">
               <thead>
                    <tr>
                    <th>No. </th>
                    <th>Nama Proyek</th>
                    <th>Anggaran Proyek</th>
                    <th>Periode Proyek</th>
                    <th>Sisa Anggaran</th>
                    <th>Operasi</th>
                </tr>
               </thead>
               <tbody id="tag_project">
                   <?php foreach ($project as $row): ?>
                       <tr>
                           <td><?php echo $row['idProject']; ?></td>
                           <td><?php echo $row['namaProject']; ?></td>
                           <td><?php echo $row['anggaran']; ?></td>
                           <td><?php echo $row['settingAnggaran']; ?></td>
                           <td><?php echo $row['sisa']; ?></td>
                           <td>
                               <a href="javascript:;" data="<?php echo $row['idProject']; ?>" class="btn btn-info btn_edit_project"><span class="fa fa-pencil-square"></span></a>
                               <a href="<?php echo base_url('C_project/delete_project/'.$row['idProject']); ?>" class="btn btn-danger" onclick=" return confirm('apakah anda yakin ingin menghapus data terkait ?');"><span class="glyphicon glyphicon-remove"></span></a>
                           </td>
                       </tr>
                   <?php endforeach ?>
               </tbody>
            </table>

    </div>
</div>
</div>

</div>
</section>
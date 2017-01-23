<div class="row"></div>
<div class="row">
    <div class="col-xs-12">
        <div class="table-responsive">
            <table id="tabel_user_project" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                    <th>Nama Anggota</th>
                    <th>Pilih Anggota</th>
                    
                </tr>
                </thead>
                <tbody id ="dataUser">
                     <?php foreach ($user as $data): ?>
                    <tr>                        
                     <td align='center'><?php echo $data['idUser']; ?></td>
                        <td align='center'><?php echo $data['username']; ?></td> 
                     <td align='center'>
                          <a href="javascript:;" class="btn btn-success btpilih" data="<?php echo $data['idUser'];?>"><span class="fa fa-pencil-square"></span> Pilih</a>
                     </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>            
            </table>
        </div>
    </div>
</div>
</div>

</div>
</section>
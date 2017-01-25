<div class="row"></div>
<div class="row">
    <div class="col-xs-12">
        <div class="table-responsive">
            <table id="tabel_user_project" class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th>#</th>
                    <th>Nama Anggota</th>
                  
                    
                </tr>
                </thead>
                <tbody id ="dataUser">
                     <?php foreach ($user as $data): ?>
                    <tr> 
                        <td>
                            <input type="checkbox" name="idUser" value="<?php echo $data['idUser'];?>"/>
                        </td>
                     
                        <td align='center'><?php echo $data['username']; ?></td> 
                     
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
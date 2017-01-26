<section class="content-header">
    <h1>Data User</h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-users"></i>Beranda</a></li>
        <li class="active">Data user</li>
    </ol>
</section>

<section class="content">
    <div class="box">
        <div class="alert alert-success" style="display: none"></div>
        <div class="alert alert-info" style="display: none"></div>
        <div class="alert alert-danger" style="display: none"></div>
        <div class="alert alert-warning" style="display: none"></div>
        <!-- awal body -->
        <div class="box-body">
            <button style="margin-bottom: 10px;" class="btn btn-primary btn-flat" id ="btnAdd"><span class="glyphicon glyphicon-plus"></span> Tambah Pengguna</button>

            <!-- modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <button type="button" class="close" data-dismiss="modal" aria-label="tutup">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title"><span class="fa fa-users"></span>Modal Title</h4>
                        </div>
                        <div class="modal-body">
                            <form id ="myForm" class="form-horizontal" method="POST">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Username : </label>
                                    <div class="col-md-8">
                                        <input type="text" name="txt_username" class="form-control col-md-4" placeholder="Username" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Email : </label>
                                    <div class="col-md-8">
                                        <input type="email" name="txt_email" class="form-control col-md-4" placeholder="Email" required="">
                                    </div>
                                </div>                          
                                <div class="form-group">
                                    <label class="control-label col-md-3">Level user : </label>
                                    <div class="col-md-8">
                                        <select class="form-control col-md-4" name="combo_level">
                                            <option value=''>-: Pilih User :-</option>
                                            <option value="user">User's Member</option>
                                            <option value="admin">Administrator</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-8">
                                        <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Tutup</button>
                                        <button type="submit" class="btn btn-primary btn-flat" id="btnSave"><span class="glyphicon glyphicon-save"></span> Simpan</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <!--            modal update-->
            <div class="modal fade" id="update_user" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <button type="button" class="close" data-dismiss="modal" aria-label="tutup">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4><span class="modal-title fa fa-users"></span> </h4>
                        </div>
                        <div class="modal-body">
                            <form id ="FormEdit" class="form-horizontal" method="post">
                                <input type="hidden" name="edit_txt_id">
                                <div class="form-group">
                                    <label class="control-label col-md-3">Username : </label>
                                    <div class="col-md-8">
                                        <input type="text" name="edit_txt_username" class="form-control col-md-4" placeholder="Username" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Email : </label>
                                    <div class="col-md-8">
                                        <input type="email" name="edit_txt_email" class="form-control col-md-4" placeholder="Email" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Level user : </label>
                                    <div class="col-md-8">
                                        <select class="form-control col-md-4" name="edit_combo_level">
                                            <option value=null>-: Pilih User :-</option>
                                            <option value="user">User's Member</option>
                                            <option value="admin">Administrator</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-8">
                                        <button type="button" class="btn btn-danger btn-flat" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Tutup</button>
                                        <button type="submit" class="btn btn-primary btn-flat"><span class="glyphicon glyphicon-refresh"></span> Perbarui</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!--Modal Delete-->

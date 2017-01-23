<section class="content-header">
    <h1>Data User</h1>
    <ol class="breadcrumb">
        <li><a href=""><i class="fa fa-users"></i>Beranda</a></li>
        <li class="active">Data user</li>
    </ol>
</section>

<section class="content">
    <div class="box">
        <div class="alert alert-success" style="display: none">

        </div>
        <!-- awal body -->
        <div class="box-body">
            <div class="col-md-1" style="margin: 10px;">
                <button class="btn btn-primary btn-flat" id ="btnAdd"><span class="glyphicon glyphicon-plus"></span> Add User</button>
            </div>

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
                                    <label class="control-label col-md-3">Password : </label>
                                    <div class="col-md-8">
                                        <input type="Password" name="txt_password" class="form-control col-md-4" placeholder="Password" required="">
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
                                <input type="hidden" name="txt_id">
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
                                    <label class="control-label col-md-3">Password : </label>
                                    <div class="col-md-8">
                                        <input type="Password" name="txt_password" class="form-control col-md-4" placeholder="Password" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Level user : </label>
                                    <div class="col-md-8">
                                        <select class="form-control col-md-4" name="combo_level">
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
            <div class="modal fade" id="delete_user" tabindex="-1" role="dialog">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <button type="button" class="close" data-dismiss="modal" aria-label="tutup">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4><span class="modal-title fa fa-users"></span> Confirm Delete</h4>
                        </div>
                        <div class="modal-body">
                            Apakah kamu yakin ingin menghapus data ini?
                        </div>
                        <div class="modal-footer">
                            <div class="col-md-3"></div>
                            <div class="col-md-8">
                                <button type="button" class="btn btn-group-sm" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span>Cancel</button>
                                <button type="submit" id ="btndelete" class="btn btn-danger"><span class="fa fa-trash"></span>Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> alfa
    </div>
    <strong>Copyright &copy; 2017 <a href="#">Jelajah Tekno Indonesia</a>.</strong> All rights
    reserved.
</footer>


<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url() . "assets/plugins/jQuery/jquery-2.2.3.min.js"; ?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url() . "assets/bootstrap/js/bootstrap.min.js"; ?>"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<!-- <script src="<?php echo base_url() . "assets/plugins/morris/morris.min.js"; ?>"></script> -->
<!-- Sparkline -->
<script src="<?php echo base_url() . "assets/plugins/sparkline/jquery.sparkline.min.js"; ?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url() . "assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"; ?>"></script>
<script src="<?php echo base_url() . "assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"; ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url() . "assets/plugins/knob/jquery.knob.js"; ?>"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url() . "assets/plugins/daterangepicker/daterangepicker.js"; ?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url() . "assets/plugins/datepicker/bootstrap-datepicker.js"; ?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url() . "assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"; ?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url() . "assets/plugins/slimScroll/jquery.slimscroll.min.js"; ?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url() . "assets/plugins/fastclick/fastclick.js"; ?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() . "assets/dist/js/app.min.js"; ?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<!-- <script src="<?php echo base_url() . "assets/dist/js/pages/dashboard.js"; ?>"></script> -->
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() . "assets/dist/js/demo.js"; ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . "assets/plugins/datatables/js/dataTables.bootstrap.min.js"; ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . "assets/plugins/datatables/js/dataTables.semanticui.min.js"; ?>"></script>
<script type="text/javascript" src="<?php echo base_url() . "assets/plugins/datatables/js/jquery.dataTables.min.js"; ?>"></script>


<script>
    sendEvent = function(sel, step) {
        $(sel).trigger('next.m.' + step);
    }
</script>

<script type="text/javascript">
    $(function() {

        $.ajaxSetup({
            type: "POST",
            url: "<?php echo base_url("C_pengeluaran/get_data"); ?>",
            cache: false,
        });

        $("#cb_user").change(function() {
            var nilai = $(this).val();
            if (nilai > 0) {
                $.ajax({
                    data: {
                        modul: 'user',
                        id: nilai
                    },
                    success: function(respond) {
                        $("#cb_project").html(respond);

                    }
                })
            }
        });

        $('#edit_nama_user').change(function() {
            var id_user = $(this).val();
            if (id_user > 0) {
                $.ajax({
                    data: {
                        modul: 'user',
                        id: id_user
                    },
                    success: function(respond) {
                        $('#edit_nama_project').html(respond);
                    }
                })
            }
        });

        //LOGOUT
        $('#btkeluar').click(function() {
            alert('anda yakin ingin keluar dari halaman admin?');
        });
        //ADD DATA
        $('#btnAdd').click(function() {
            $('#myModal').modal('show');
            $('#myModal').find('.modal-title').text('Add New User');
        });
        //SAVE DATA
        $('#btnSave').click(function() {
            var url = $('#myForm').attr('action', '<?php echo base_url(); ?>c_user/addUser');
            var data = $('#myForm').serialize();
            //Validasi Form
            var username = $('input[name=txt_username]');
            var email = $('input[name=txt_email]');
            var password = $('input[name=txt_password]');
            var level = $('select[name=combo_level]');
            var result = '';
            if (username.val() == '') {
                username.parent().addClass('has-error');
            } else {
                username.parent().removeClass('has-error');
                result += '1';
            }
            if (email.val() == '') {
                email.parent().addClass('has-error');
            } else {
                email.parent().removeClass('has-error');
                result += '2';
            }
            if (password.val() == '') {
                password.parent().addClass('has-error');
            } else {
                password.parent().removeClass('has-error');
                result += '3';
            }
            if (level.val() == '') {
                level.parent().addClass('has-error');
            } else {
                level.parent().removeClass('has-error');
                result += '4';
            }
            if (result == '1234') {
                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    url: url,
                    data: data,
                    async: false,
                    dataType: 'json',
                    success: function(response) {
                        console.log(response);
                        if (response.success) {
                            $('#myModal').modal('hide');
                            $('#myForm')[0].reset();
                            $('.alert-success').html('User Berhasil Ditambahkan').fadeIn().delay(4000).fadeOut('slow');
                        } else {
                            alert('Failed');
                        }
                        window.location.href('<?php base_url() ?>c_user');
                    },
                    error: function(fafa) {

                    }
                });
            }
        });
        //EDIT DATA
        $('#showdata').on('click', '.btedit', function() {
            var id = $(this).attr('data');
            $('#update_user').modal('show');
            $('#update_user').find('.modal-title').text(' Edit Data User');
            $('#FormEdit').attr('action', '<?php echo base_url('c_user/edituser') ?>');
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url() ?>c_user/tampilid',
                method: 'get',
                data: {id: id},
                async: false,
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    for (i = 0; i < data.length; i++) {
//                    console.log(data[i].username);
                        $('input[name=txt_id]').val(data[i].idUser);
                        $('input[name=txt_username]').val(data[i].username);
                        $('input[name=txt_email]').val(data[i].email);
                        $('input[name=txt_password]').val(data[i].password);
                        $('select[name=combo_level]').val(data[i].level);
                    }
                },
                error: function() {
                    alert('gagal tampil');
                }
            });
        });
//Fungsi Hapus

        //GET ALL USER


    });
</script>

<!-- tabel -->
<script type="text/javascript">
    $(function() {
        $('#tabel_user').dataTable();
    });

    $(function() {
        $('#tabel_user_project').dataTable();
    });

    $(function() {
        $('#tabel_bag_pengeluaran').dataTable();
    });
</script>

<script type="text/javascript">
    $(function() {

        $('#data_pengeluaran').on('click', '.btn_edit_pengeluaran', function() {
            var id = $(this).attr('data');
            $('#modal_edit_pengeluaran').modal('show');
            $('#form_edit_pengeluaran').attr('action', '<?php echo base_url('C_pengeluaran/update_pengeluaran'); ?>');
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url('C_pengeluaran/tampilid') ?>',
                method: 'GET',
                data: {id: id},
                async: false,
                dataType: 'json',
                success: function(data) {
                    console.log(data);
                    for (i = 0; i < data.length; i++) {
                        $('input[name = id_data_pengeluaran]').val(data[i].idPengeluaran);
                        $('input[name = edit_nilai_pengeluaran]').val(data[i].jumlahPengeluaran);
                        $('select[name = edit_nama_user]').val(data[i].idUser);
                        $('select[name = edit_nama_project]').val(data[i].idProject);
                        $('textarea[name = edit_keterangan_pengeluaran]').val(data[i].namaPengeluaran);
                    }
                },
                error: function(data_in) {
                    console.log(data_in);
                    alert('gagal memanggil data');
                }
            });
        });

        $('#tag_project').on('click', '.btn_edit_project', function() {
            var id = $(this).attr('data');
            $('#edit_project').modal('show');
            $('#form_edit_project').attr('action', '<?php echo base_url('C_project/update_project'); ?>');
            $.ajax({
                type : 'ajax',
                url : '<?php echo base_url('C_project/tampil_id'); ?>',
                method : 'GET',
                data : {id: id},
                async : false,
                dataType : 'json',
                success: function(data){
                    console.log(data);
                    for (i = 0; i < data.length; i++) {
                        $('input[name =id_project]').val(data[i].idProject);
                        $('input[name =edit_nama_project]').val(data[i].namaProject);
                        $('input[name =edit_jumlah_anggaran]').val(data[i].anggaran);
                        $('select[name =edit_seting_anggaran]').val(data[i].settingAnggaran);
                        $('input[name =edit_sisa_project]').val(data[i].sisa);
                    }
                },
                error : function(data_in){
                    console.log(data_in);
                    alert('data Tidak bisa ditampilkan');
                }
            });
        });
    });
</script>
</body>
</html>
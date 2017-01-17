<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="author" content="" />

	<title>Petty Cash</title>
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="<?php echo base_url()."assets/bootstrap/css/bootstrap.min.css"; ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/dist/css/AdminLTE.min.css"; ?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/dist/css/skins/_all-skins.min.css"; ?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/plugins/iCheck/flat/blue.css"; ?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/plugins/morris/morris.css"; ?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css"; ?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/plugins/datepicker/datepicker3.css"; ?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/plugins/daterangepicker/daterangepicker.css"; ?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url()."assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"; ?>">
	<style>
		html, body {
		  height: 100%;
		}
		#actions {
		  margin: 2em 0;
		}

		/* Mimic table appearance */
		div.table {
		  display: table;
		}
		div.table .file-row {
		  display: table-row;
		}
		div.table .file-row > div {
		  display: table-cell;
		  vertical-align: top;
		  border-top: 1px solid #ddd;
		  padding: 8px;
		}
		div.table .file-row:nth-child(odd) {
		  background: #f9f9f9;
		}

		/* The total progress gets shown by event listeners */
		#total-progress {
		  opacity: 0;
		  transition: opacity 0.3s linear;
		}

		/* Hide the progress bar when finished */
		#previews .file-row.dz-success .progress {
		  opacity: 0;
		  transition: opacity 0.3s linear;
		}

		/* Hide the delete button initially */
		#previews .file-row .delete {
		  display: none;
		}

		/* Hide the start and cancel buttons and show the delete button */

		#previews .file-row.dz-success .start,
		#previews .file-row.dz-success .cancel {
		  display: none;
		}
		#previews .file-row.dz-success .delete {
		  display: block;
		}
	</style>
	
	<script src="<?php echo $js; ?>/jquery.min.js"></script>

</head>
<body>
	<div class="container" id="container">
		<header>
			<h1>Upload Foto Bukti Pengeluaran</h1>
		</header>
		<div id="actions" class="row">
			<div class="col-lg-7">
				<!-- The fileinput-button span is used to style the file input field as button -->
				<span class="btn btn-success fileinput-button">
					<i class="glyphicon glyphicon-plus"></i>
					<span>Add files...</span>
				</span>
				<button type="submit" class="btn btn-primary start">
					<i class="glyphicon glyphicon-upload"></i>
					<span>Start upload</span>
				</button>
				<button type="reset" class="btn btn-warning cancel">
					<i class="glyphicon glyphicon-ban-circle"></i>
					<span>Cancel upload</span>
				</button>
			</div>

			<div class="col-lg-5">
				<!-- The global file processing state -->
				<span class="fileupload-process">
					<div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
						<div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
					</div>
				</span>
			</div>
		</div>

		<div class="table table-striped" class="files" id="previews">
			<div id="template" class="file-row">
				<!-- This is used as the file preview template -->
				<div>
					<span class="preview"><img data-dz-thumbnail /></span>
				</div>
				<div>
					<p class="name" data-dz-name></p>
					<strong class="error text-danger" data-dz-errormessage></strong>
				</div>
				<div>
					<p class="size" data-dz-size></p>
					<div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
						<div class="progress-bar progress-bar-success" style="width:0%;" data-dz-uploadprogress></div>
					</div>
				</div>
				<div>
					<button class="btn btn-primary start">
						<i class="glyphicon glyphicon-upload"></i>
						<span>Start</span>
					</button>
					<button data-dz-remove class="btn btn-warning cancel">
						<i class="glyphicon glyphicon-ban-circle"></i>
						<span>Cancel</span>
					</button>
					<p data-dz-remove class="delete">
						<i class="glyphicon glyphicon-check"></i>
						<span>Finish</span>
					</p>
				</div>
			</div>
		</div>
		<hr>
		<footer>
			<h4 align="center">2017 &copy; www.JTI.com</h4>
		</footer>
	</div>

	<script src="<?php echo base_url("assets/bootstrap/js/dropzone/dropzone.js"); ?>"></script>
	<script src="<?php echo base_url("assets/bootstrap/js/dropzone/build.js"); ?>"></script>
	<script>
		var Dropzone = require("enyo-dropzone");
		Dropzone.autoDiscover = false;
	</script>
	<script>
	  // Dapatkan HTML Template dan menghapusnya dari dokumen
      var previewNode = document.querySelector("#template");
      previewNode.id = "";
      var previewTemplate = previewNode.parentNode.innerHTML;
      previewNode.parentNode.removeChild(previewNode);

      var myDropzone = new Dropzone(document.body, { 
        url: "<?php echo site_url('gambar/gambar_upload');?>", // mengatur url
        thumbnailWidth: 80,
        thumbnailHeight: 80,
        parallelUploads: 20,
		maxFilesize: 1, // membatasi ukuran file yang di upload
		acceptedFiles: "image/jpg, image/jpeg", // menentukan tipe file yang akan di upload
        previewTemplate: previewTemplate,
        autoQueue: false, // Pastikan bahwa file tidak antri sampai ditambahkan secara manual
        previewsContainer: "#previews", // menentukan elemen untuk menampilkan preview
        clickable: ".fileinput-button" // menentukan elemen pemicu untuk memilih file
      });

      myDropzone.on("addedfile", function(file) {
        // menghubungkan tombol trart
        file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file); };
      });

      // Update total progress bar pada saat proses upload
      myDropzone.on("totaluploadprogress", function(progress) {
        document.querySelector("#total-progress .progress-bar").style.width = progress + "%";
      });

      myDropzone.on("sending", function(file) {
        // menampilkan total progressbar
        document.querySelector("#total-progress").style.opacity = "1";
        // pada saat upload berlangsung, tombol start akan mati(disabled)
        file.previewElement.querySelector(".start").setAttribute("disabled", "disabled");
      });

      // progressbar akan di sembunyikan ketika prosess upload sudah selesai
      myDropzone.on("queuecomplete", function(progress) {
        document.querySelector("#total-progress").style.opacity = "0";
      });

      // Membuat fungsi mengunggah semua gambar pada tombol start
		document.querySelector("#actions .start").onclick = function() {
        myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED));
      };
      // Membuat fungsi pembatalan semua gambar pada saat upload
      document.querySelector("#actions .cancel").onclick = function() {
        myDropzone.removeAllFiles(true);
      };
    </script>
</body>
</html>
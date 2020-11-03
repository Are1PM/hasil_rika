 </div>
 <!-- Core Scripts - Include with every page -->
 <script src="assets/plugins/jquery-1.10.2.js"></script>
 <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
 <!-- Select2 -->
 <script src="assets/select2/dist/js/select2.full.min.js"></script>

 <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>
 <script src="assets/plugins/pace/pace.js"></script>
 <script src="assets/scripts/siminta.js"></script>
 <!-- Page-Level Plugin Scripts-->
 <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
 <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
 <script src="assets/sw/dist/sweetalert.min.js"></script>





 <script>
 	$(function() {
 		//Initialize Select2 Elements
 		$('.select2').select2()
 	});
 	// menghilangkan repost ulang
 	// if ( window.history.replaceState ) {
 	//   window.history.replaceState( null, null, window.location.href );
 	// }

 	$(document).ready(function() {
 		$('#dataTables-example').dataTable();
 	});
 	// sweetalert untuk menghapus
 	jQuery(document).ready(function($) {
 		$('.delete-link').on('click', function() {
 			var getLink = $(this).attr('href');
 			swal({
 				title: '',
 				text: 'Hapus Data?',
 				html: true,
 				confirmButtonColor: '#d9534f',
 				showCancelButton: true,
 			}, function() {
 				window.location.href = getLink
 			});
 			return false;
 		});
 	});

 	$('#myModal').modal('show');

 	// konfirmasi dokument
 	$(".upload-laporan-kkp").click(function() {
 		$.ajax({
 			type: "POST",
 			url: "application/KKP/Upload_LaporanKkp/form-tambah.php",
 			data: {
 				id_kelompok: $(this).attr("data"),

 			},

 			success: function(ajaxData) {
 				$("#data").html(ajaxData);
 				$("#data").modal('show', {
 					backdrop: 'true'
 				});
 			}
 		});
 	});

 	// // mengupload skripsi
 	$(".upload-file-skripsi").click(function() {
 		$.ajax({
 			type: "POST",
 			url: "application/pengguna/upload.php",
 			data: {
 				id_mahasiswa: $(this).attr("data"),

 			},

 			success: function(ajaxData) {
 				$("#data-skripsi").html(ajaxData);
 				$("#data-skripsi").modal('show', {
 					backdrop: 'true'
 				});
 			}
 		});
 	});

 	// mengupload 
 	$(".upload-abstrak").click(function() {
 		$.ajax({
 			type: "POST",
 			url: "application/SKRIPSI/DokumenSkripsi/form-abstrak.php",
 			data: {
 				id_upload: $(this).attr("data-id"),

 			},

 			success: function(ajaxData) {
 				$("#show").html(ajaxData);
 				$("#show").modal('show', {
 					backdrop: 'true'
 				});
 			}
 		});
 	});

 	// mengupload 
 	$(".upload-bab-1").click(function() {
 		$.ajax({
 			type: "POST",
 			url: "application/SKRIPSI/DokumenSkripsi/form-file-bab-1.php",
 			data: {
 				id_upload: $(this).attr("data-id"),

 			},

 			success: function(ajaxData) {
 				$("#show").html(ajaxData);
 				$("#show").modal('show', {
 					backdrop: 'true'
 				});
 			}
 		});
 	});

 	// mengupload 
 	$(".upload-full-skripsi").click(function() {
 		$.ajax({
 			type: "POST",
 			url: "application/SKRIPSI/DokumenSkripsi/form-file-lengkap-skripsi.php",
 			data: {
 				id_upload: $(this).attr("data-id"),

 			},

 			success: function(ajaxData) {
 				$("#show").html(ajaxData);
 				$("#show").modal('show', {
 					backdrop: 'true'
 				});
 			}
 		});
 	});

 	// mengupload 
 	$(".upload-full-proposal").click(function() {
 		$.ajax({
 			type: "POST",
 			url: "application/SKRIPSI/DokumenSkripsi/form-file-proposal.php",
 			data: {
 				id_upload: $(this).attr("data-id"),

 			},

 			success: function(ajaxData) {
 				$("#show").html(ajaxData);
 				$("#show").modal('show', {
 					backdrop: 'true'
 				});
 			}
 		});
 	});

 	// validasi skripsi
 	$(".validasi_skripsi").click(function() {
 		$.ajax({
 			type: "POST",
 			url: "application/SKRIPSI/ValidasiDokumenSkripsi/form-tambah.php",
 			data: {
 				id_dokumen_skripsi: $(this).attr("data-id"),
 				id_upload: $(this).attr("data"),
 			},

 			success: function(ajaxData) {
 				$("#validasi_skripsi").html(ajaxData);
 				$("#validasi_skripsi").modal('show', {
 					backdrop: 'true'
 				});
 			}
 		});
 	});

 	// validasi skripsi
 	$(".validasi_kkp").click(function() {
 		$.ajax({
 			type: "POST",
 			url: "application/KKP/ValidasiDokumenKKP/form-tambah.php",
 			data: {
 				id_dokumen_kkp: $(this).attr("data-id"),
 				id_upload: $(this).attr("data"),
 			},

 			success: function(ajaxData) {
 				$("#validasi_kkp").html(ajaxData);
 				$("#validasi_kkp").modal('show', {
 					backdrop: 'true'
 				});
 			}
 		});
 	});

 	function printContent(el) {
 		var restorepage = document.body.innerHTML;
 		var printContent = document.getElementById(el).innerHTML;
 		document.body.innerHTML = printContent;
 		window.print();
 		document.body.innerHTML = restorepage;
 	}
 </script>
 <script>
 	$(document).ready(function() {
 		//focusin berfungsi ketika cursor berada di dalam textbox modal langsung aktif
 		$(".pencarian").focusin(function() {
 			$("#mahasiswa").modal('show'); // ini fungsi untuk menampilkan modal
 		});
 	});

 	function cetak() {
 		window.print()
 	}
 	// function in berfungsi untuk memindahkan data kolom yang di klik menuju text box
 	function masuk(txt, data) {
 		document.getElementById('textbox').value = data; // ini berfungsi mengisi value  yang ber id textbox
 		$("#mahasiswa").modal('hide'); // ini berfungsi untuk menyembunyikan modal
 	}

 	function fileValidation() {
 		const fileInput = document.querySelector('.docKKP');

 		var filePath = fileInput.value;

 		// Allowing file type 
 		var allowedExtensions =
 			/(\.pdf)$/i;

 		if (!allowedExtensions.exec(filePath)) {
 			alert('Hanya format file pdf yang diizinkan!');
 			fileInput.value = '';
 		}
 	}

 	function fileValidationLaporan() {
 		const fileInput = document.querySelector('.docLaporan');

 		var filePath = fileInput.value;

 		// Allowing file type 
 		var allowedExtensions =
 			/(\.pdf)$/i;

 		if (!allowedExtensions.exec(filePath)) {
 			alert('Hanya format file pdf yang diizinkan!');
 			fileInput.value = '';
 		}
 	}
 </script>
 </body>

 </html>
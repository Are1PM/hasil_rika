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

 <!-- Page-Level Plugin Scripts-->
 <script src="assets/plugins/morris/raphael-2.1.0.min.js"></script>
 <script src="assets/plugins/morris/morris.js"></script>
 <!-- <script src="assets/scripts/morris-demo.js"></script> -->
 <?php
	$data = Main::$grafik;
	if (count($data) > 0) {
		// Penyimpanan data grafik
		$grafik = [];
		// Tahun saat ini
		$thn = date('Y');

		// MEMBUAT STRUKTUR DATA GRAFIK
		$ke = 0;
		for ($i = $thn; $i > ($thn - 3); $i--) {
			// Nilai key di ambil dari tahun yang berkurang
			$key = $i;

			// Ambil jumlah KKP pada tahun itu
			$grafik[$key][] = (isset($data['kkp'][$ke]) && $data['kkp'][$ke][0] == $key) ? $data['kkp'][$ke][1] : 0;

			// Ambil jumlah SKRIPSI pada tahun itu
			$grafik[$key][] = (isset($data['skripsi'][$ke]) && $data['skripsi'][$ke][0] == $key) ? $data['skripsi'][$ke][1] : 0;

			$ke++;
		}
		// DATA GRAFIK DI URUTKAN DARI YANG TAHUN TERKECIL
		ksort($grafik);

		// STRUKTUR DATA GRAFIK
		// {
		// 	y: '2006',
		// 	a: 100,
		// 	b: 90
		// },

		// MENYUSUN STRUKTUR DATA GRAFIK
		$dt = "";
		$a = 0;
		foreach ($grafik as $key => $value) {
			if ($a == 2) {
				$dt .=   "{ y: " . $key . ", a: " . $value[0] . ", b: " . $value[1] . "}";
				break;
			}
			$dt .=   "{ y: " . $key . ", a: " . $value[0] . ", b: " . $value[1] . "},";
			$a++;
		}
	}
	// var_dump(isset($dt));
	// echo "\n\n";
	// die;
	?>


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
 				id_bimbingan: $(this).attr("data-bimbingan"),
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


 	//morris area chart

 	jQuery(document).ready(function() {



 		//morris bar chart
 		Morris.Bar({
 			element: 'cek-bar',
 			data: [<?= (isset($dt)) ? $dt : "" ?>],
 			xkey: 'y',
 			ykeys: ['a', 'b'],
 			labels: ['KKP', 'SKRIPSI'],
 			hideHover: 'auto',
 			resize: true,
 			barColors: ['#4542f5', '#ff401f']
 		});


 	});
 </script>
 </body>

 </html>
<?php
 require_once "../../config/KoneksiBasisData.php";
 require_once "MengelolaDokumenKkp.php";

 $id_kelompok = $_GET['id_kelompok'];
 $id_upload_kkp = $_GET['id_upload_kkp'];
 $tahun = date("Y");

 $proses = new MengelolaDokumenKkp('',$id_upload_kkp,$tahun);
 $proses->MemasukkanDokumen();

 if ($proses) {
 	header("location: ../../../?rik=data-Upload_LaporanKpp&id_kelompok=$id_kelompok&pesan=sukses");
 }

?>
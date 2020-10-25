<?php
require_once "../../config/KoneksiBasisData.php";
require_once "MengelolaValidasiDokumenKKP.php";


if (isset($_POST['proses'])) {
    $id_status_validasi = $_POST['id_status_validasi'];
    $id_upload_kkp = $_POST['id_upload_kkp'];
    $id_dokumen_kkp = $_POST['id_dokumen_kkp'];

    if ($id_status_validasi == "1" or $id_status_validasi == "2") {
        $id_admin = $_POST['id_admin'];
        $tanggal_validasi = date("Y-m-d");
        $keterangan = $_POST['keterangan'];

        $proses = new MengelolaValidasiDokumenKkp('', $id_admin, $id_dokumen_kkp, $tanggal_validasi, $id_status_validasi, $keterangan);
        $proses->MemeriksaDokumenKkp();

        if ($proses) {
            header("location: ../../../?rik=detail-DokumenKkp&id_dokumen_kkp=$id_dokumen_kkp&pesan=berhasil");
        }
    } else {
        header("location: ../../../?rik=detail-DokumenKkp&id_dokumen_kkp=$id_dokumen_kkp&pesan=validasi-gagal");
    }
}

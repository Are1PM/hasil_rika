<?php 
require_once "../../config/KoneksiBasisData.php";
require_once "../Upload_LaporanKkp/MengelolaUploadLaporanKkp.php";

if (isset($_GET['filename'])) {

    $id_upload   = $_GET['id_upload'];
    $filename    = $_GET['filename'];

    $id_dokumen_kkp = $_GET['id_dokumen_kkp'];


    $cek = new MengelolaUploadLaporanKkp('',$id_upload,'',$filename,'','');
    $go = $cek->MengubahDokumen();

    header("location: ../../../?rik=detail-DokumenKkp&id_dokumen_kkp=$id_dokumen_kkp");
}
?>
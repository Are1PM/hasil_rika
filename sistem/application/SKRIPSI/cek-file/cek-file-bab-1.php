<?php 
require_once "../../config/KoneksiBasisData.php";
require_once "../DokumenSkripsi/MengelolaDokumenskripsi.php";

    if (isset($_GET['filename'])) {

    $id_bimbingan   = $_GET['id_bimbingan'];
    $filename    = $_GET['filename'];

    $cek = new MengelolaDokumenSkripsi('',$id_bimbingan,'','',$filename,'','');
    $cek->MengubahDokumen();

    header("location: ../../../?rik=detail-DokumenSkripsi&id_bimbingan=$id_bimbingan");
    
    }
?>
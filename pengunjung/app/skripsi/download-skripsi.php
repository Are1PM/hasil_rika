<?php 
session_start();
require_once "../../../sistem/application/config/KoneksiBasisdata.php";
require_once "../../../sistem/application/SKRIPSI/DownloadDokumenSkripsi/MengelolaDownloadDokumenSkripsi.php";

    if (isset($_GET['filename'])) {
    $filename    = $_GET['filename'];
    $id_dokumen  = $_GET['id'];
    $id_dosen    = $_SESSION['id_dosen'];
    $tanggal_download = date("Y-m-d");

    if ($_SESSION['hak_akses']=="dosen") {
       
        $download = new MengelolaDownloadDokumenSkripsi('',$id_dokumen,$id_dosen,$tanggal_download);
        $download->MendownloadDokumen();

    }

    $back_dir    ="../../../sistem/assets/dokumen_skripsi/";
    $file = $back_dir.$_GET['filename'];
     
        if (file_exists($file)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename='.basename($file));
            header('Content-Transfer-Encoding: binary');
            header('Expires: 0');
            header('Cache-Control: private');
            header('Pragma: private');
            header('Content-Length: ' . filesize($file));
            ob_clean();
            flush();
            readfile($file);
            
            exit;
        } 
        else {
            header("location: ../../index.php");
        }
    }
?>
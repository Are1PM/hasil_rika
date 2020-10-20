<?php
require_once "../../config/KoneksiBasisData.php";
require_once "MengelolaDokumenskripsi.php";

$maxsize = 1024 * 20000; //200MB
$format_file = array('pdf');
if (isset($_POST['proses'])) {
    $ext = strtolower(end(explode('.', $_FILES['file_full_skripsi']['name'])));


    $id_upload = $_POST['id_upload'];
    $file_full_skripsi_1= $_FILES['file_full_skripsi']['name'];
    $file_full_skripsi= $_FILES['file_full_skripsi']['name'].'*';

    $temp_file_full_skripsi= $_FILES['file_full_skripsi']['tmp_name'];
    $path_file_full_skripsi= "../../../assets/dokumen_skripsi/".$file_full_skripsi_1;

    if(in_array($ext, $format_file)){
        move_uploaded_file($temp_file_full_skripsi, $path_file_full_skripsi);


        $proses = new MengelolaDokumenSkripsi('',$id_upload,'','','',$file_full_skripsi,'');
        $proses->MengubahDokumen();

        if ($proses) {
            header("location: ../../../?rik=detail-UploadSkripsi&id_upload=$id_upload&pesan=berhasil");
        }
    }else{
        header("location: ../../../?rik=detail-UploadSkripsi&id_upload=$id_upload&pesan=invalid-formatfile");
    }
}else{
    header("location: ../../../?rik=detail-UploadSkripsi&id_upload=$id_upload&pesan=invalid-size");
}


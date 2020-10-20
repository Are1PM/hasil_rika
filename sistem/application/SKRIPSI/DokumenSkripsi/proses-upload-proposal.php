<?php
require_once "../../config/KoneksiBasisData.php";
require_once "MengelolaDokumenskripsi.php";

$maxsize = 1024 * 20000; //200MB
$format_file = array('pdf');
if (isset($_POST['proses']) && $_FILES['file_full_proposal']['size']<=$maxsize) {
    $ext = strtolower(end(explode('.', $_FILES['file_full_proposal']['name'])));


    $id_upload = $_POST['id_upload'];
    $file_full_proposal_1= $_FILES['file_full_proposal']['name'];
    $file_full_proposal= $_FILES['file_full_proposal']['name'].'*';

    $temp_file_full_proposal= $_FILES['file_full_proposal']['tmp_name'];
    $path_file_full_proposal= "../../../assets/dokumen_skripsi/".$file_full_proposal_1;

    if(in_array($ext, $format_file)){

        move_uploaded_file($temp_file_full_proposal, $path_file_full_proposal);
        $proses = new MengelolaDokumenSkripsi('',$id_upload,'','','','',$file_full_proposal);
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


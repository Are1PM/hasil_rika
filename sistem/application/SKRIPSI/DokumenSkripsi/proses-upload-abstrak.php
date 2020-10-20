<?php
require_once "../../config/KoneksiBasisData.php";
require_once "MengelolaDokumenskripsi.php";

$maxsize = 1024 * 20000; //200MB
$format_file = array('pdf');
if (isset($_POST['proses']) && $_FILES['file_abstrak_indonesia']['size']<=$maxsize AND $_FILES['file_abstrak_inggris']['size']<=$maxsize) {

    $ext = strtolower(end(explode('.', $_FILES['file_abstrak_indonesia']['name'])));

    $id_upload = $_POST['id_upload']; 
    $file_abstrak_indonesia_1= $_FILES['file_abstrak_indonesia']['name'];
    $file_abstrak_indonesia= $_FILES['file_abstrak_indonesia']['name'].'*';

    $temp_file_abstrak_indonesia = $_FILES['file_abstrak_indonesia']['tmp_name'];
    $path_file_abstrak_indonesia= "../../../assets/dokumen_skripsi/".$file_abstrak_indonesia_1;


    $file_abstrak_inggris_1= $_FILES['file_abstrak_inggris']['name'];
    $file_abstrak_inggris= $_FILES['file_abstrak_inggris']['name'].'*';

    $temp_file_abstrak_inggris= $_FILES['file_abstrak_inggris']['tmp_name'];
    $path_file_abstrak_inggris= "../../../assets/dokumen_skripsi/".$file_abstrak_inggris_1;

    if(in_array($ext, $format_file)){
        move_uploaded_file($temp_file_abstrak_indonesia, $path_file_abstrak_indonesia);
        move_uploaded_file($temp_file_abstrak_inggris, $path_file_abstrak_inggris);

        $proses = new MengelolaDokumenSkripsi('',$id_upload,$file_abstrak_inggris ,$file_abstrak_indonesia ,'','','');
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
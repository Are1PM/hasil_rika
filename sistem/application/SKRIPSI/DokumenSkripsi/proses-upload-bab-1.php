<?php
require_once "../../config/KoneksiBasisData.php";
require_once "MengelolaDokumenskripsi.php";

$maxsize = 1024 * 20000; //200MB
$format_file = array('pdf');
if (isset($_POST['proses']) && $_FILES['file_bab_1']['size'] <= $maxsize) {
    $ext = strtolower(end(explode('.', $_FILES['file_bab_1']['name'])));
    $id_mahasiswa = $_SESSION['id_mahasiswa'];

    $id_upload = $_POST['id_upload'];
    $file_bab_1 = 'file_bab_1_' . $id_mahasiswa . '.' . $ext;

    $temp_file_bab_1 = $_FILES['file_bab_1']['tmp_name'];
    $path_file_bab_1 = "../../../assets/dokumen_skripsi/" . $file_bab_1;

    if (in_array($ext, $format_file)) {

        move_uploaded_file($temp_file_bab_1, $path_file_bab_1);
        $proses = new MengelolaDokumenSkripsi('', $id_upload, '', '', $file_bab_1, '', '');
        $proses->MengubahDokumen();

        if ($proses) {
            header("location: ../../../?rik=detail-UploadSkripsi&id_upload=$id_upload&pesan=berhasil");
        }
    } else {
        header("location: ../../../?rik=detail-UploadSkripsi&id_upload=$id_upload&pesan=invalid-formatfile");
    }
} else {
    header("location: ../../../?rik=detail-UploadSkripsi&id_upload=$id_upload&pesan=invalid-size");
}

<?php
require_once "../../config/KoneksiBasisData.php";
require_once "MengelolaDokumenskripsi.php";

$maxsize = 1024 * 20000; //200MB
$format_file = array('pdf');
if (isset($_POST['proses']) && $_FILES['file_abstrak_indonesia']['size'] <= $maxsize and $_FILES['file_abstrak_inggris']['size'] <= $maxsize) {

    $ext = strtolower(end(explode('.', $_FILES['file_abstrak_indonesia']['name'])));
    $id_mahasiswa = $_SESSION['id_mahasiswa'];

    $id_bimbingan = $_POST['id_upload'];
    $file_abstrak_indonesia = 'file_abstrak_indonesia_' . $id_mahasiswa . '.' . $ext;

    $temp_file_abstrak_indonesia = $_FILES['file_abstrak_indonesia']['tmp_name'];
    $path_file_abstrak_indonesia = "../../../assets/dokumen_skripsi/" . $file_abstrak_indonesia;


    $file_abstrak_inggris = 'file_abstrak_inggris_' . $id_mahasiswa . '.' . $ext;

    $temp_file_abstrak_inggris = $_FILES['file_abstrak_inggris']['tmp_name'];
    $path_file_abstrak_inggris = "../../../assets/dokumen_skripsi/" . $file_abstrak_inggris;

    if (in_array($ext, $format_file)) {
        move_uploaded_file($temp_file_abstrak_indonesia, $path_file_abstrak_indonesia);
        move_uploaded_file($temp_file_abstrak_inggris, $path_file_abstrak_inggris);

        $proses = new MengelolaDokumenSkripsi('', $id_bimbingan, $file_abstrak_inggris, $file_abstrak_indonesia, '', '', '');
        $cari = $proses->cek();

        if ($cari) {
            // Jika dokumen Skripsi sudah pernah diupload
            $proses->MengubahDokumen();
        } else {
            // Jika dokumen skripsi belum pernah diupload
            $proses->MemasukkanDokumen();
        }

        if ($proses) {
            header("location: ../../../?rik=detail-UploadSkripsi&id_upload=$id_bimbingan&pesan=berhasil");
        }
    } else {
        header("location: ../../../?rik=detail-UploadSkripsi&id_upload=$id_bimbingan&pesan=invalid-formatfile");
    }
} else {
    header("location: ../../../?rik=detail-UploadSkripsi&id_upload=$id_bimbingan&pesan=invalid-size");
}

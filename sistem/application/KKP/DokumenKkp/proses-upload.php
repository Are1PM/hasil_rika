<?php
require_once "application/config/KoneksiBasisData.php";
require_once "MengelolaDokumenKkp.php";

$maxsize = 1024 * 20000; //200MB
$format_file = array('pdf');
if (isset($_POST['simpan']) && $_FILES['file_bab_1']['size'] <= $maxsize) {
    $ext = strtolower(end(explode('.', $_FILES['file_bab_1']['name'])));

    $id_mahasiswa                   = $_POST['id_mahasiswa'];
    $tanggal_upload                 = date("d-m-Y");
    $tahun                          = date("Y");

    $file_bab_1 = 'file_bab_1_' . $id_mahasiswa . '.' . $ext;
    $temp_file_bab_1 = $_FILES['file_bab_1']['tmp_name'];
    $path_file_bab_1 = "assets/dokumen_kkp/" . $file_bab_1;

    $file_lengkap_laporan_kkp       = 'file_lengkap_laporan_kkp_' . $id_mahasiswa . '.' . $ext;
    $temp_file_lengkap_laporan_kkp  = $_FILES['file_lengkap_laporan_kkp']['tmp_name'];
    $path_file_lengkap_laporan_kkp  = "assets/dokumen_kkp/" . $file_lengkap_laporan_kkp;

    if (in_array($ext, $format_file)) {

        move_uploaded_file($temp_file_bab_1, $path_file_bab_1);
        move_uploaded_file($temp_file_lengkap_laporan_kkp, $path_file_lengkap_laporan_kkp);


        $tambah = new MengelolaDokumenKkp('', $id_mahasiswa, $tanggal_upload, $tahun, $file_bab_1, $file_lengkap_laporan_kkp);
        $cari = $tambah->MencariDokumenKKP($id_mahasiswa);

        if ($cari->ada > 0) {
            $tambah->MengubahDokumenKKP();
        } else {
            $tambah->MemasukkanDokumen();
        }
    } else {
        header("location:?rik=data-DokumenKkp");
    }
} else {
    header("location:?rik=data-DokumenKkp");
}

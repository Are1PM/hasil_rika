<?php
require_once "../../config/KoneksiBasisData.php";
require_once "MengelolaDokumenKkp.php";

$maxsize = 1024 * 20000; //200MB
$format_file = array('pdf');
if (isset($_POST['simpan']) && $_FILES['file_bab_1']['size'] <= $maxsize && isset($_FILES['file_bab_1'])) {
    $ext = strtolower(end(explode('.', $_FILES['file_bab_1']['name'])));

    $id_mahasiswa                   = $_POST['id_mahasiswa'];
    $tanggal_upload                 = date("d-m-Y");
    $tahun                          = date("Y");

    $file_bab_1 = 'file_bab_1_' . $id_mahasiswa . '.' . $ext;
    $temp_file_bab_1 = $_FILES['file_bab_1']['tmp_name'];
    $path_file_bab_1 = "../../../assets/dokumen_kkp/" . $file_bab_1;

    $file_lengkap_laporan_kkp       = '';

    if (in_array($ext, $format_file)) {

        move_uploaded_file($temp_file_bab_1, $path_file_bab_1);

        $tambah = new MengelolaDokumenKkp('', $id_mahasiswa, $tanggal_upload, $tahun, $file_bab_1, $file_lengkap_laporan_kkp);
        $cari = $tambah->MencariDokumenKKP($id_mahasiswa);

        if ($cari->ada > 0) {
            $tambah->feli_lengkap_loporan_kkp = $cari->file_lengkap_laporan_kkp;
            $tambah->MengubahDokumenKKP();
        } else {
            $tambah->MemasukkanDokumen();
        }

        if ($tambah) {
            header("location: ../../../?rik=detail-DokumenKkp&id_dokumen_kkp=" . $_SESSION['id_mahasiswa'] . "&pesan=berhasil");
        }
    } else {
        var_dump($_FILES['file_bab_1']['size']);
        print_r($_POST);
        print_r($_FILES);

        // echo "bab";
        // die;
        header("location:../../../?rik=detail-DokumenKkp");
    }
} else if (isset($_POST['simpan']) && isset($_FILES['file_lengkap_laporan_kkp']) && $_FILES['file_lengkap_laporan_kkp']['size'] <= $maxsize) {
    $ext = strtolower(end(explode('.', $_FILES['file_lengkap_laporan_kkp']['name'])));

    $id_mahasiswa                   = $_POST['id_mahasiswa'];
    $tanggal_upload                 = date("d-m-Y");
    $tahun                          = date("Y");

    $file_bab_1 = '';

    $file_lengkap_laporan_kkp       = 'file_lengkap_laporan_kkp_' . $id_mahasiswa . '.' . $ext;
    $temp_file_lengkap_laporan_kkp  = $_FILES['file_lengkap_laporan_kkp']['tmp_name'];
    $path_file_lengkap_laporan_kkp  = "../../../assets/dokumen_kkp/" . $file_lengkap_laporan_kkp;

    if (in_array($ext, $format_file)) {

        move_uploaded_file($temp_file_lengkap_laporan_kkp, $path_file_lengkap_laporan_kkp);

        $tambah = new MengelolaDokumenKkp('', $id_mahasiswa, $tanggal_upload, $tahun, $file_bab_1, $file_lengkap_laporan_kkp);
        $cari = $tambah->MencariDokumenKKP($id_mahasiswa);

        if ($cari->ada > 0) {
            $tambah->file_bab_I = $cari->file_bab_I;
            $tambah->MengubahDokumenKKP();
        } else {
            $tambah->MemasukkanDokumen();
        }

        if ($tambah) {
            header("location: ../../../?rik=detail-DokumenKkp&id_dokumen_kkp=" . $_SESSION['id_mahasiswa'] . "&pesan=berhasil");
        }
    } else {
        print_r($_POST);

        // echo "lengkap";
        // die;
        header("location:../../../?rik=detail-DokumenKkp");
    }
} else {
    // print_r($_POST);
    // echo "a";
    // die;
    header("location:../../../?rik=detail-DokumenKkp");
}

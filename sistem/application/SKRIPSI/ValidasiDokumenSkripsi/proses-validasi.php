<?php
require_once "../../config/KoneksiBasisData.php";
require_once "MengelolaValidasiDokumenskripsi.php";


if (isset($_POST['proses'])) {
    $id_status_validasi = $_POST['status_validasi'];
    $id_bimbingan=$_POST['id_bimbingan'];

    if ($id_status_validasi=="Tidak Valid" OR $id_status_validasi=="Valid") {
        $id_dokumen_skripsi = $_POST['id_dokumen_skripsi']; 
        $id_admin = $_POST['id_admin'];
        $tanggal_validasi = date("Y-m-d");
        $keterangan =$_POST['keterangan'];
        

        $proses = new MengelolaValidasiDokumenSkripsi('',$id_admin,$id_dokumen_skripsi,$tanggal_validasi,$id_status_validasi,$keterangan);
        $proses->MemasukkanDokumen();

        if ($proses) {
            header("location: ../../../?rik=detail-DokumenSkripsi&id_bimbingan=$id_bimbingan&pesan=berhasil");
        }
    }else{
        header("location: ../../../?rik=detail-DokumenSkripsi&id_bimbingan=$id_bimbingan&pesan=validasi-gagal");
    }
    
}

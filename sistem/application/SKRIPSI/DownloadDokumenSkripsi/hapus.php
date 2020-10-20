<?php

require "Mengelola_DownloadDokumenSkripsi.php";

$id_download=$_GET['id_mahasiswa'];

$data = new MengelolaDownloadDokumenSkripsi($id_download);
$data->MenghapusDownloadDokumenSkripsi();


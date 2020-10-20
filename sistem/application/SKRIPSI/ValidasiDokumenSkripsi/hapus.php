<?php

require "Mengelola_ValidasiDokumenSkripsi.php";

$id_val_skripsi=$_GET['id_val_skripsi'];

$data = new MengelolaValidasiDokumenSkripsi($id_val_skripsi);
$data->MenghapusValidasiDokumenSkripsi();


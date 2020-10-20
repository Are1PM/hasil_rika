<?php

require "Mengelola_ValidasiDokumenKKP.php";

$id_val_kkp=$_GET['id_val_kkp'];

$data = new MengelolaValidasiDokumenKKP($id_val_kkp);
$data->MenghapusValidasiDokumenKKP();


<?php

require "Mengelola_Mahasiswa.php";

$id_dokumen_kkp=$_GET['id_mahasiswa'];

$data = new MengelolaDokumenKkp($id_dokumen_kkp);
$data->MenghapusDokumenKkp();


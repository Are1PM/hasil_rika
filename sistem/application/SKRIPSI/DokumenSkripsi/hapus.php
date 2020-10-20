<?php

require "Mengelola_Dokumenskripsi.php";

$id_dokumen_skripsi=$_GET['id_dokumen_skripsi'];

$data = new MengelolaDokumenskripsi($id_dokumen_skripsi);
$data->MenghapusDokumenskripsi();


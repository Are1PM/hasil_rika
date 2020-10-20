<?php

require "Mengelola_StatusValidasi.php";

$id_status_validasi=$_GET['id_status_validasi'];

$data = new MengelolaStatusValidasi($id_status_validasi);
$data->MenghapusStatusValidasi();


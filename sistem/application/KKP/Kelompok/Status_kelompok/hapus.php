<?php

require "Mengelola_StatusKelompok.php";

$id_instansi=$_GET['id_status_kelompok'];

$data = new MengelolaStatusKelompok($id_status_kelompok);
$data->MenghapusStatusKelompok();


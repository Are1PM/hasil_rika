<?php

require "Mengelola_Uploadskripsi.php";

$id_upload=$_GET['id_mahasiswa'];

$data = new MengelolaBimbingan($id_upload);
$data->MenghapusDokumen();


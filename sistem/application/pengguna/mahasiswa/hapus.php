<?php

require "Mengelola_Mahasiswa.php";

$id_mahasiswa=$_GET['id_mahasiswa'];

$data = new MengelolaMahasiswa($id_mahasiswa);
$data->MenghapusMahasiswa();


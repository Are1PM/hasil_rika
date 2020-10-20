<?php

require "Mengelola_Kelompok.php";

$id_mahasiswa=$_GET['id_kelompok'];

$data = new MengelolaMahasiswa($id_kelompok);
$data->MenghapusKelompok();


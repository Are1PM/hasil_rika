<?php

require "Mengelola_StatusDosenPembimbing.php";

$id_status_dosen_pembimbing=$_GET['id_status_dosen_pembimbing'];

$data = new MengelolaStatusDosenPembimbing($id_status_dosen_pembimbing);
$data->MenghapusStatusDosenPembimbing();


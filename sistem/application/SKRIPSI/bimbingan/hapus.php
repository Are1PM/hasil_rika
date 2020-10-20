<?php

require "Mengelola_Bimbingan.php";

$id_bimbingan=$_GET['id_bimbingan'];

$data = new MengelolaBimbingan($id_bimbingan);
$data->MenghapusBimbingan();


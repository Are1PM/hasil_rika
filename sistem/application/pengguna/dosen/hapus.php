<?php

require "MengelolaDosen.php";

$id_dosen=$_GET['id_dosen'];

$data = new MengelolaDosen($id_dosen);
$data->MenghapusDosen();


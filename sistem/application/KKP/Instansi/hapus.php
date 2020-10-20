<?php

require "Mengelola_Instansi.php";

$id_instansi=$_GET['id_instansi'];

$data = new MengelolaInstansi($id_instansi);
$data->MenghapusInstansi();


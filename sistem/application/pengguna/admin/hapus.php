<?php

require "MengelolaAdmin.php";

$id_admin=$_GET['id_admin'];

$data = new MengelolaAdmin($id_admin);
$data->MenghapusAdmin();


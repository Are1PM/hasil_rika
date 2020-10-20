<?php
if (isset($_POST['tampilkan'])) {
	session_start();

    unset($_SESSION['tahun_akademik']);
    unset($_SESSION['id_instansi']);

    $a= $_SESSION['tahun_akademik']= $_POST['tahun_akademik'];
    $b= $_SESSION['id_instansi'] = $_POST['id_instansi'];

    if ($a) {
    	header("location: ../../../index.php?rik=data-Kelompok&oke=$a&okeoke=$b");
    }
}
?>
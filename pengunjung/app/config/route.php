<?php
$rik = $_GET['rik'];

if (isset($rik)) {
	if ($rik == "") {
		require("template/home.php");
	} else
	if ($rik == "KKP") {
		// $data_kkp = $kkp->MelihatDokumen();
		require("app/kkp/kkp.php");
	} else
	if ($rik == "SKRIPSI") {
		require("app/skripsi/skripsi.php");
	} else
	if ($rik == "login") {
		require("app/login/form-login.php");
	} else
	if ($rik == "registrasi") {
		require("app/registrasi/registrasi.php");
	}
} else {
	require("template/home.php");
}

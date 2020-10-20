<?php
	require_once("application/config/Validasi.php");

	@session_start();
	if (!isset($_SESSION['hak_akses'])) {
		$tidak_ada_sesi = new Validasi();
		$tidak_ada_sesi->logout();
	}

	require_once "application/pengaturan/pengaturan.php";
	$p = new Pengaturan();
	$set = $p->TampilkanPengaturan();

	require_once("template/head.php");
	require_once("template/navbar-top.php"); 
	require_once("template/navbar-side.php");
	require_once "layout/Main.php";
	require_once("template/javascript.php");

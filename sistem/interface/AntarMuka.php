<?php

require_once "application/config/KoneksiBasisData.php";
require_once "application/pengguna/mahasiswa/MengelolaMahasiswa.php";
require_once "application/pengguna/dosen/MengelolaDosen.php";
require_once "application/SKRIPSI/bimbingan/MengelolaBimbingan.php";
require_once "application/SKRIPSI/DokumenSkripsi/MengelolaDokumenskripsi.php";
require_once "application/KKP/DokumenKkp/MengelolaDokumenKkp.php";
require_once "application/KKP/Kelompok/MengelolaKelompok.php";
require_once "application/KKP/Instansi/MengelolaInstansi.php";
require_once "application/SKRIPSI/ValidasiDokumenSkripsi/MengelolaValidasiDokumenSkripsi.php";
require_once "application/pengguna/admin/MengelolaAdmin.php";
require_once "application/KKP/ValidasiDokumenKKP/MengelolaValidasiDokumenKKP.php";
require_once "application/KKP/Instansi/Pembimbing_Lapangan/MengelolaPembimbingLapangan.php";
require_once "application/SKRIPSI/Dosen_Pembimbing/MengelolaDosenPembimbing.php";
require_once "application/pengaturan/pengaturan.php";
require_once "application/KKP/Kelompok/Status_kelompok/MengelolaStatusKelompok.php";
require_once "application/SKRIPSI/Dosen_Pembimbing/status_dosen_pembimbing/MengelolaStatusDosenPembimbing.php";
require_once "application/status_validasi/MengelolaStatusValidasi.php";











/**
 * 
 */
class AntarMuka
{
	protected $mahasiswa;
	protected $dosen;
	protected $kelompok;
	protected $Upload_Skripsi;
	protected $DokumenSkripsi;
	protected $dokumen_kkp;
	protected $Instansi;
	protected $ValidasiDokumenSkripsi;
	protected $Admin;
	protected $ValidasiDokumenKKP;
	protected $DownloadDokumenKKP;
	protected $DownloadDokumenSkripsi;
	protected $DokumenSkripsiabc;
	protected $PembimbingLapangan;
	protected $DosenPembimbing;
	protected $Pengaturan;
	protected $Status_Kelompok;
	protected $status_dosen_pembimbing;
	protected $status_validasi;








	public $id_mahasiswa;
	public $id_dosen;
	public $id_kelompok;
	public $id_upload;
	public $id_dokumen_skripsi;
	public $id_dokumen_kkp;
	public $id_instansi;
	public $id_val_skripsi;
	public $id_admin;
	public $id_val_kkp;
	public $id_download_kkp;
	public $id_download;
	public $id_pembimbing_lapangan;
	public $id_dosen_pembimbing;
	public $id_status_kelompok;
	public $id_status_dosen_pembimbing;
	public $id_status_validasi;






	function __construct()
	{
		$this->id_mahasiswa = $_GET['id_mahasiswa'];
		$this->id_dosen = $_GET['id_dosen'];
		$this->id_kelompok = $_GET['id_kelompok'];
		$this->id_upload = $_GET['id_upload'];
		$this->id_dokumen_skripsi = $_GET['id_dokumen_skripsi'];
		$this->id_dokumen_kkp = $_GET['id_dokumen_kkp'];
		$this->id_instansi = $_GET['id_instansi'];
		$this->id_val_skripsi = $_GET['id_val_skripsi'];
		$this->id_admin = $_GET['id_admin'];
		$this->id_val_kkp = $_GET['id_val_kkp'];
		$this->id_download_kkp = $_GET['id_download_kkp'];
		$this->id_download = $_GET['id_download'];
		$this->id_pembimbing_lapangan = $_GET['id_pembimbing_lapangan'];
		$this->id_dosen_pembimbing = $_GET['id_dosen_pembimbing'];
		$this->id_status_kelompok = $_GET['id_status_kelompok'];
		$this->id_status_dosen_pembimbing = $_GET['id_status_dosen_pembimbing'];
		$this->id_status_validasi = $_GET['id_status_validasi'];








		$this->mahasiswa = new MengelolaMahasiswa($this->id_mahasiswa);
		$this->dosen = new MengelolaDosen($this->id_dosen);
		$this->kelompok = new MengelolaKelompok($this->id_kelompok);
		$this->UploadSkripsi = new MengelolaBimbingan($this->id_upload);
		$this->DokumenSkripsi = new MengelolaDokumenskripsi('', $this->id_upload);
		$this->dokumen_kkp = new MengelolaDokumenKkp($this->id_dokumen_kkp);
		$this->Instansi = new MengelolaInstansi($this->id_instansi);
		$this->ValidasiDokumenSkripsi = new MengelolaValidasiDokumenSkripsi($this->id_val_skripsi);
		$this->Admin = new MengelolaAdmin($this->id_admin);
		$this->ValidasiDokumenKKP = new MengelolaValidasiDokumenKKP($this->id_val_kkp);
		$this->DokumenSkripsiabc = new MengelolaDokumenskripsi($this->id_dokumen_skripsi);
		$this->PembimbingLapangan = new MengelolaPembimbingLapangan($this->id_pembimbing_lapangan);
		$this->DosenPembimbing = new MengelolaDosenPembimbing($this->id_dosen_pembimbing);
		$this->Pengaturan = new Pengaturan();
		$this->StatusKelompok = new MengelolaStatusKelompok($this->id_status_kelompok);
		$this->status_dosen_pembimbing = new MengelolaStatusDosenPembimbing($this->id_status_dosen_pembimbing);
		$this->status_validasi = new MengelolaStatusValidasi($this->id_status_validasi);
	}

	function formMahasiswa($parameter = '')
	{
		$allMahasiswa = $this->mahasiswa->semuaMahasiswa();
		$data_status_kelompok = $this->StatusKelompok->MelihatStatusKelompok();
		require "application/pengguna/mahasiswa/form-tambah.php";
	}
	function formPencarianMahasiswa($sesi = '')
	{
		$data_status_kelompok = $this->StatusKelompok->MelihatStatusKelompok();
		$data_mahasiswa = $this->mahasiswa->MencariMahasiswa();

		if ($sesi == "") {
			require "application/pengguna/mahasiswa/form-ubah.php";
		} else {
			require "application/pengguna/mahasiswa/detail.php";
		}
	}
	function tampilMahasiswa()
	{
		$data_mahasiswa = $this->mahasiswa->MelihatMahasiswa();
		require "application/pengguna/mahasiswa/data.php";
	}

	/**
	 * 
	 */
	function formDosen()
	{
		require "application/pengguna/dosen/form-tambah.php";
	}
	function formPencarianDosen($sesi = '')
	{

		$data_dosen = $this->dosen->MencariDosen();

		if ($sesi == "") {
			require "application/pengguna/dosen/form-ubah.php";
		} else {
			require "application/pengguna/dosen/detail.php";
		}
	}
	function tampilDosen()
	{
		$data_dosen = $this->dosen->MelihatDosen();
		require "application/pengguna/dosen/data.php";
	}

	/**
	 * 
	 */
	function formKelompok()
	{
		$data_dosen = $this->dosen->MelihatDosen();

		require "application/KKP/Kelompok/form-tambah.php";
	}
	function formPencarianKelompok($sesi = '')
	{

		$data = $this->kelompok->MencariKelompok();
		$data_dosen = $this->dosen->MelihatDosen();

		if ($sesi == "") {
			require "application/KKP/Kelompok/form-ubah.php";
		} else {
			require "application/KKP/Kelompok/detail.php";
		}
	}
	function tampilKelompok()
	{
		$data_kelompok = $this->kelompok->MelihatKelompok();
		require "application/KKP/Kelompok/data.php";
	}
	/**
	 * 
	 */
	function formStatusKelompok()
	{
		$StatusKelompok = $this->StatusKelompok->MelihatStatusKelompok();
		require "application/KKP/Kelompok/Status_Kelompok/form-tambah.php";
	}
	function formPencarianStatusKelompok($sesi = '')
	{

		$data = $this->StatusKelompok->MencariStatusKelompok();
		$StatusKelompok = $this->StatusKelompok->MelihatStatusKelompok();


		if ($sesi == "") {
			require "application/KKP/Kelompok/Status_Kelompok/form-ubah.php";
		} else {
			require "application/KKP/Kelompok/Status_Kelompok/detail.php";
		}
	}
	function tampilstatusKelompok()
	{
		$data_status_kelompok = $this->StatusKelompok->MelihatStatusKelompok();
		require "application/KKP/Kelompok/Status_Kelompok/data.php";
	}
	/**
	 * 
	 */
	function formDokumenSkripsi()
	{
		require "application/SKRIPSI/DokumenSkripsi/form-tambah.php";
	}

	function formPencarianDokumenSkripsi($sesi = '')
	{
		$bimbingan = $this->UploadSkripsi;
		$data_Dokumenskripsi = $bimbingan->MencariDokumen();
		// print_r($data_Dokumenskripsi);
		// die;
		if ($sesi == "") {
			require "application/SKRIPSI/DokumenSkripsi/form-ubah.php";
		} else {
			require "application/SKRIPSI/DokumenSkripsi/detail.php";
		}
	}
	function tampilDokumenSkripsi()
	{

		$data_Dokumenskripsi = $this->DokumenSkripsi->MelihatDokumen();
		if ($_SESSION['hak_akses'] == 'mahasiswa') {
			$tampilan = "application/SKRIPSI/DokumenSkripsi/data-mahasiswa.php";
		} else {
			$tampilan = "application/SKRIPSI/DokumenSkripsi/data.php";
		}
		require $tampilan;
	}
	/**
	 * 
	 */
	function formBimbingan()
	{
		require "application/SKRIPSI/bimbingan/form-tambah.php";
	}


	function formPencarianBimbingan($sesi = '')
	{
		$id = $_GET['id_upload'];

		$data_UploadSkripsi = $this->UploadSkripsi->MencariDokumen();

		// MENGAMBIL DATA DOKUMEN SKRIPSI
		$id_bimbingan = $data_UploadSkripsi->id_bimbingan;

		$skripsi = new MengelolaDokumenSkripsi('', $id_bimbingan, '', '', '', '', '');
		$data = $skripsi->MencariDokumen();

		// MENGAMBIL DATA VALIDASI
		$id_dokumen_skripsi = $data->id_dokumen_skripsi;
		$dataa = new MengelolaValidasiDokumenSkripsi('', '', $id_dokumen_skripsi, '', '', '');
		$cek = $dataa->mencariValidasi();

		//		KALAU TIDAK VALID
		if ($cek->Id_status_validasi == 2 && $data->file_full_skripsi != '' && $data->file_full_proposal != '' && $data->file_bab_I != '') {
			$skripsi->kosongkanFile($id_bimbingan, $cek->id_val_skripsi);
			$data = $skripsi->MencariDokumen();
		}

		//		KALAU TIDAK VALID DAN FILE TELAH DI UPLOAD ULANG
		if ($cek->Id_status_validasi == 3 && $data->file_full_skripsi != '' && $data->file_full_proposal != '' && $data->file_bab_I != '') {
			$dataa->menghapusValidasi($cek->id_val_skripsi);
		}

		if ($sesi == "") {
			require "application/SKRIPSI/bimbingan/form-ubah.php";
		} else {

			require "application/SKRIPSI/bimbingan/detail.php";
		}
	}
	function tampilBimbingan()
	{
		$cek = $this->UploadSkripsi->MengecekData();

		$data_Uploadskripsi = $this->UploadSkripsi->MelihatDokumen();
		require "application/SKRIPSI/bimbingan/data.php";
	}
	/**
	 * 
	 */
	function formDokumenKkp()
	{
		require "application/KKP/DokumenKkp/form-tambah.php";
	}
	function formPencarianDokumenKkp($sesi = '')
	{

		$data_DokumenKkp = $this->dokumen_kkp->MencariDokumen();

		if ($_SESSION['hak_akses'] == "mahasiswa") {

			$data = $this->dokumen_kkp->MenampilkanDokumenPermahasiswa();
			require "application/KKP/DokumenKkp/detail-kkp.php";
		} else if ($sesi != "" && isset($_GET["id_dokumen_kkp"])) {

			require "application/KKP/DokumenKkp/detail.php";
		}
	}
	function tampilDokumenKkp()
	{
		if ($_SESSION['hak_akses'] == "mahasiswa") {
			$data_DokumenKkp = $this->dokumen_kkp->MelihatDokumen();
			require "application/KKP/DokumenKkp/data.php";
		} else {
			$data_DokumenKkp = $this->dokumen_kkp->MelihatDokumen();
			require "application/KKP/DokumenKkp/data-kkp.php";
		}
	}
	/**
	 * 
	 */
	function formInstansi()
	{
		$PembimbingLapangan = $this->PembimbingLapangan->MelihatPembimbingLapangan();
		require "application/KKP/Instansi/form-tambah.php";
	}
	function formPencarianInstansi($sesi = '')
	{

		$data = $this->Instansi->MencariInstansi();
		$PembimbingLapangan = $this->PembimbingLapangan->MelihatPembimbingLapangan();


		if ($sesi == "") {
			require "application/KKP/Instansi/form-ubah.php";
		} else {
			require "application/KKP/Instansi/detail.php";
		}
	}
	function tampilInstansi()
	{
		$data_Instansi = $this->Instansi->MelihatInstansi();
		require "application/KKP/Instansi/data.php";
	}
	/**
	 * 
	 */
	function formValidasiDokumenSkripsi()
	{
		require "application/SKRIPSI/ValidasiDokumenSkripsi/form-tambah.php";
	}
	function formPencarianValidasiDokumenSkripsi($sesi = '')
	{

		$data_ValidasiDokumenSkripsi = $this->ValidasiDokumenSkripsi->MencariDokumen();

		if ($sesi == "") {
			require "application/SKRIPSI/ValidasiDokumenSkripsi/form-ubah.php";
		} else {
			require "application/SKRIPSI/ValidasiDokumenSkripsi/detail.php";
		}
	}
	function tampilValidasiDokumenSkripsi()
	{
		$data_ValidasiDokumenSkripsi = $this->ValidasiDokumenSkripsi->MelihatDokumen();
		require "application/SKRIPSI/ValidasiDokumenSkripsi/data.php";
	}
	/**
	 * 
	 */
	function formAdmin()
	{
		require "application/pengguna/Admin/form-tambah.php";
	}
	function formPencarianAdmin($sesi = '')
	{

		$data_Admin = $this->Admin->MencariAdmin();

		if ($sesi == "") {
			require "application/pengguna/Admin/form-ubah.php";
		} else {
			require "application/pengguna/Admin/detail.php";
		}
	}
	function tampilAdmin()
	{
		$data_Admin = $this->Admin->MelihatAdmin();
		require "application/pengguna/admin/data.php";
	}
	/**
	 * 
	 */
	function formValidasiDokumenKKP()
	{
		require "application/SKRIPSI/ValidasiDokumenKKP/form-tambah.php";
	}
	function formPencarianValidasiDokumenKkp($sesi = '')
	{

		$data_ValidasiDokumenKKP = $this->ValidasiDokumenKKP->MencariDokumenKkp();

		if ($sesi == "") {
			require "application/KKP/ValidasiDokumenKKP/form-ubah.php";
		} else {
			require "application/KKP/ValidasiDokumenKKP/detail.php";
		}
	}
	function tampilValidasiDokumenKKP()
	{
		$data_ValidasiDokumenKKP = $this->ValidasiDokumenKKP->MelihatDokumenKkp();
		require "application/KKP/ValidasiDokumenKKP/data.php";
	}

	/**
	 * 
	 */
	function formPembimbingLapangan()
	{
		$data_Instansi = $this->Instansi->MelihatInstansi();
		$data_kelompok = $this->kelompok->MelihatKelompok();
		require "application/KKP/Instansi/Pembimbing_Lapangan/form-tambah.php";
	}
	function formPencarianPembimbingLapangan($sesi = '')
	{
		$data_Instansi = $this->Instansi->MelihatInstansi();
		$data = $this->PembimbingLapangan->MencariPembimbingLapangan();

		if ($sesi == "") {
			require "application/KKP/Instansi/Pembimbing_Lapangan/form-ubah.php";
		} else {
			require "application/KKP/Instansi/Pembimbing_Lapangan/detail.php";
		}
	}
	function tampilPembimbingLapangan()
	{
		$PembimbingLapangan = $this->PembimbingLapangan->MelihatPembimbingLapangan();
		require "application/KKP/Instansi/Pembimbing_Lapangan/data.php";
	}
	/**
	 * 
	 */
	function formDosenPembimbing()
	{
		$data_dosen = $this->dosen->MelihatDosen();
		if (isset($_SESSION['id_mahasiswa'])) {
			$data_Uploadskripsi = $this->mahasiswa->MelihatMahasiswaSkripsi($_SESSION['id_mahasiswa']);
		} else {
			$data_Uploadskripsi = $this->mahasiswa->MelihatMahasiswaSkripsi();
		}
		$data_sdp = $this->status_dosen_pembimbing->MelihatStatusDosenPembimbing();

		require "application/SKRIPSI/Dosen_Pembimbing/form-tambah.php";
	}
	function formPencarianDosenPembimbing($sesi = '')
	{
		$id = $_GET['id_dosen_pembimbing'];
		$data = $this->DosenPembimbing->MencariDosenPembimbing($id);
		$data_dosen = $this->dosen->MelihatDosen();
		$data_Uploadskripsi = $this->UploadSkripsi->MelihatDokumen();

		if ($sesi == "") {
			require "application/SKRIPSI/Dosen_Pembimbing/form-ubah.php";
		} else {
			require "application/SKRIPSI/Dosen_Pembimbing/detail.php";
		}
	}
	function tampilDosenPembimbing()
	{
		$DosenPembimbing = $this->DosenPembimbing->MelihatDosenPembimbing();

		require "application/SKRIPSI/Dosen_Pembimbing/data.php";
	}
	/**
	 * 
	 */
	function formStatusDosenPembimbing()
	{
		require "application/SKRIPSI/Dosen_Pembimbing/status_dosen_pembimbing/form-tambah.php";
	}
	function formPencarianStatusDosenPembimbing($sesi = '')
	{

		$data_StatusDosenPembimbing = $this->StatusDosenPembimbing->MencariStatusDosenPembimbing();

		if ($sesi == "") {
			require "application/SKRIPSI/Dosen_Pembimbing/status_dosen_pembimbing/form-ubah.php";
		} else {
			require "application/SKRIPSI/Dosen_Pembimbing/status_dosen_pembimbing/detail.php";
		}
	}
	function tampilStatusDosenPembimbing()
	{
		$data_StatusDosenPembimbing = $this->StatusDosenPembimbing->MelihatStatusDosenPembimbing();
		require "application/SKRIPSI/Dosen_Pembimbing/status_dosen_pembimbing/data.php";
	}
	/**
	 * 
	 */
	function formStatusValidasi()
	{
		require "application/status_validasi/form-tambah.php";
	}
	function formPencarianStatusValidasi($sesi = '')
	{

		$data_StatusValidasi = $this->status_validasi->MencariStatusValidasi();

		if ($sesi == "") {
			require "application/status_validasi/form-ubah.php";
		} else {
			require "application/status_validasi/detail.php";
		}
	}
	function tampilStatusValidasi()
	{
		$data_StatusValidasi = $this->StatusValidasi->MelihatStatusValidasi();
		require "application/status_validasi/data.php";
	}
	/**
	 * 
	 */
	function UbahPengaturan($sesi = '')
	{

		$data = $this->Pengaturan->TampilkanPengaturan();

		if ($sesi == "") {
			require "application/pengaturan/form-ubah.php";
		}
	}
}

function preview($filename)
{
	// Store the file name into variable 
	$file = $filename;
	$filename = $filename;

	// Header content type 
	header('Content-type: application/pdf');

	header('Content-Disposition: inline; filename="' . $filename . '"');

	header('Content-Transfer-Encoding: binary');

	header('Accept-Ranges: bytes');

	// Read the file 
	@readfile($file);
}

<?php
require "DokumenSkripsi.php";

class MengelolaDokumenSkripsi extends DokumenSkripsi
{
	public function __construct($id_dokumen_skripsi = '', $id_bimbingan = '', $file_abstrak_inggris = '', $file_abstrak_indonesia = '', $file_bab_I = '', $file_lengkap_skripsi = '', $file_lengkap_proposal = '')
	{
		$this->konek = new KoneksiBasisData();

		$this->id_dokumen_skripsi  = $id_dokumen_skripsi;
		$this->id_bimbingan = $id_bimbingan;
		$this->file_abstrak_inggris    = $file_abstrak_inggris;
		$this->file_abstrak_indonesia   = $file_abstrak_indonesia;
		$this->file_bab_I = $file_bab_I;
		$this->file_full_skripsi = $file_lengkap_skripsi;
		$this->file_full_proposal = $file_lengkap_proposal;
	}

	function MelihatDokumen()
	{
		return $this->queryMelihatDokumen();
	}

	function AllDokumen()
	{
		return $this->queryJumlahDokumen();
	}

	function MencariDokumen()
	{
		return $this->queryMencariDokumen();
	}


	function MencariDokumenabc()
	{
		return $this->queryMencariDokumenabc();
	}

	function mencariByJudulTahun($judul, $tahun)
	{
		return $this->queryMencariByJudulTahun($judul, $tahun);
	}

	function MemasukkanDokumen()
	{
		return $this->queryMemasukkanDokumen();
	}

	function MengubahDokumen()
	{
		return $this->queryMengubahDokumen();
	}

	function MenghapusDokumen()
	{
		return $this->queryMenghapusDokumen();
	}
	function ValidasiDokumen()
	{
	}
	function DownloadDokumen()
	{
	}
	function DownloadAbstrak()
	{
	}

	function kosongkanFile($id, $id_val)
	{
		return $this->kosongkanDataFile($id, $id_val);
	}

	// Cek jika data dokumen skripsi ada
	function cek()
	{
		return $this->queryCek();
	}

	function cekFile($cek)
	{
		$angka = array("*");
		$hasil = '0';
		$jml_kata = count($angka);
		for ($i = 0; $i < $jml_kata; $i++) {
			if (stristr($cek, $angka[$i])) {
				$hasil = '1';
			}
		}
		return $hasil;
	}

	function countByTahun()
	{
		return $this->queryCountByTahun();
	}
}

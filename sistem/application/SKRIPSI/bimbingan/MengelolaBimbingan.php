<?php
require "Bimbingan.php";

class MengelolaBimbingan extends Bimbingan
{
	public function __construct($id_bimbingan = '', $id_mahasiswa = '', $judul = '', $tahun = '', $abstrak_inggris = '', $abstrak_indonesia = '', $tanggal_upload = '')
	{
		$this->konek = new KoneksiBasisData();

		$this->id_mahasiswa  = $id_mahasiswa;
		$this->id_bimbingan    = $id_bimbingan;
		$this->judul   = $judul;
		$this->tahun   = $tahun;
		$this->abstrak_indonesia = $abstrak_indonesia;
		$this->abstrak_inggris = $abstrak_inggris;
		$this->tanggal_upload	 = $tanggal_upload;
	}

	function MelihatDokumen()
	{
		return $this->queryMelihatDokumen();
	}

	function MencariDokumen()
	{
		return $this->queryMencariDokumen();
	}

	function PencariDokumen()
	{
		return $this->queryPencarianDokumen();
	}

	function MengecekData()
	{
		return $this->queryMengecek();
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
}

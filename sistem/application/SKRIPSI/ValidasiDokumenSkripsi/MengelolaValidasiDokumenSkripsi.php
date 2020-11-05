<?php
require "ValidasiDokumenSkripsi.php";

class MengelolaValidasiDokumenSkripsi extends ValidasiDokumenSkripsi
{
	public function __construct($id_val_skripsi = '', $id_admin = '', $id_dokumen_skripsi = '', $tanggal_validasi = '', $id_status_validasi = '', $keterangan = '')
	{
		$this->konek = new KoneksiBasisData();

		$this->id_val_skripsi  		= $id_val_skripsi;
		$this->id_admin				= $id_admin;
		$this->id_dokumen_skripsi   = $id_dokumen_skripsi;
		$this->tanggal_validasi 	= $tanggal_validasi;
		$this->id_status_validasi	= $id_status_validasi;
		$this->keterangan	 		= $keterangan;
	}

	function MelihatDokumenSkripsi()
	{
		return $this->queryMelihatDokumenSkripsi();
	}

	function AllDokumenSkripsi()
	{
		return $this->queryJumlahSudahValidasi();
	}

	function MencariDokumenSkripsi()
	{
		return $this->queryMencariDokumenSkripsi();
	}

	function mencariValidasi()
	{
		return $this->queryMencariValidasi();
	}

	function memasukkanValidasi()
	{
		return $this->queryMemeriksaDokumenSkripsi();
	}

	function MemasukkanDokumenSkripsi()
	{
		return $this->queryMemeriksaDokumenSkripsi();
	}

	function MengubahDokumenSkripsi()
	{
		return $this->queryMengubahDokumenSkripsi();
	}

	function MenghapusDokumenSkripsi()
	{
		return $this->queryMenghapusDokumenSkripsi();
	}
}

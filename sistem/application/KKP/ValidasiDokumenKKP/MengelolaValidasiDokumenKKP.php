<?php
require "ValidasiDokumenKKP.php";

class MengelolaValidasiDokumenKkp extends ValidasiDokumenKKP
{
	public function __construct($id_val_kkp = '', $id_admin = '', $id_dokumen_kkp = '', $tanggal_validasi = '', $status_validasi = '', $keterangan = '')
	{
		$this->konek = new KoneksiBasisData();

		$this->id_val_kkp   		= $id_val_kkp;
		$this->id_admin   			= $id_admin;
		$this->id_dokumen_kkp       = $id_dokumen_kkp;
		$this->tanggal_validasi 	= $tanggal_validasi;
		$this->id_status_validasi	= $status_validasi;
		$this->keterangan	 		= $keterangan;
	}

	function MelihatDokumenKkp()
	{
		return $this->queryMelihatDokumenKkp();
	}

	function AllDokumenKkp()
	{
		return $this->queryJumlahDokumen();
	}

	function MencariDokumenKkp()
	{
		return $this->queryMencariDokumenKkp();
	}

	function MemeriksaDokumenKkp()
	{
		return $this->queryMemeriksaDokumenKkp();
	}

	function hapusDataValidasi($id)
	{
		return $this->queryMenghapusDokumen($id);
	}
}

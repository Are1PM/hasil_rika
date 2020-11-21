<?php
require "DosenPembimbing.php";

class MengelolaDosenPembimbing extends DosenPembimbing
{
	// '', $id_dosen, $id_mahasiswa, $id_status_dosen_pembimbing
	public function __construct($id_mahasiswa = '', $id_dosen_I = '', $id_dosen_II = '')
	{
		$this->konek = new KoneksiBasisData();

		$this->id_mahasiswa 	= $id_mahasiswa;
		$this->id_dosen_I     			= $id_dosen_I;
		$this->id_dosen_II   	   		= $id_dosen_II;
	}

	function MelihatDosenPembimbing()
	{
		return $this->queryMelihatDosenPembimbing();
	}

	function MencariDosenPembimbing($id = "")
	{
		return $this->queryMencariDosenPembimbing($id);
	}

	function MencariDosen()
	{
		return $this->queryMencariDosen();
	}

	function MemasukkanDosenPembimbing()
	{
		return $this->queryMemasukkanDosenPembimbing();
	}

	function MengubahDosenPembimbing()
	{
		return $this->queryMengubahDosenPembimbing();
	}

	function MenghapusDosenPembimbing()
	{
		return $this->queryMenghapusDosenPembimbing();
	}
}

<?php
require "DosenPembimbing.php";

class MengelolaDosenPembimbing extends DosenPembimbing
{
	// '', $id_dosen, $id_mahasiswa, $id_status_dosen_pembimbing
	public function __construct($id, $id_dosen = '', $id_mahasiswa = '', $id_status_dosen_pembimbing = '')
	{
		$this->konek = new KoneksiBasisData();

		$this->id_mahasiswa 			= $id_mahasiswa;
		$this->id_dosen   	       			= $id_dosen;
		$this->id_status_dosen_pembimbing   = $id_status_dosen_pembimbing;
		$this->id_dosen_pembimbing = $id;
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

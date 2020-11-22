<?php
require "Membimbing.php";

class MengelolaMembimbing extends Membimbing
{
	// '', $id_dosen, $id_mahasiswa, $id_status_dosen_pembimbing
	public function __construct($id_mahasiswa = '', $id_dosen = '', $id_status_dosen_pembimbing = '')
	{
		$this->konek = new KoneksiBasisData();

		$this->id_mahasiswa 	= $id_mahasiswa;
		$this->id_dosen     			= $id_dosen;
		$this->id_status_dosen_pembimbing		= $id_status_dosen_pembimbing;
	}

	function MelihatMembimbing()
	{
		return $this->queryMelihatMembimbing();
	}

	function MencariMembimbing($id = "", $id_dsn = "")
	{
		return $this->queryMencariMembimbing($id, $id_dsn);
	}

	function MencariDosen()
	{
		return $this->queryMencariDosen();
	}

	function MemasukkanMembimbing()
	{
		return $this->queryMemasukkanMembimbing();
	}

	function MengubahMembimbing()
	{
		return $this->queryMengubahMembimbing();
	}

	function MenghapusMembimbing($id)
	{
		return $this->queryMenghapusMembimbing($id);
	}
}

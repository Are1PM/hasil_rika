<?php
require "DosenPembimbing.php";

class MengelolaDosenPembimbing extends DosenPembimbing
{
	public function __construct($id_dosen_pembimbing = '',$id_dosen = '',$id_status_dosen_pembimbing='')
	{
		$this->konek = new KoneksiBasisData();

		$this->id_dosen_pembimbing 			= $id_dosen_pembimbing;
		$this->id_dosen   	       			= $id_dosen;
		$this->id_status_dosen_pembimbing   = $id_status_dosen_pembimbing;


	}

	function MelihatDosenPembimbing()
	{
		return $this->queryMelihatDosenPembimbing();
	}

	function MencariDosenPembimbing()
	{
		return $this->queryMencariDosenPembimbing();
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

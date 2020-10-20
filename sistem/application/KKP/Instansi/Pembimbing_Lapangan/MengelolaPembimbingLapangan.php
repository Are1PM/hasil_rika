<?php
require "PembimbingLapangan.php";

class MengelolaPembimbingLapangan extends PembimbingLapangan
{
	public function __construct($id_pembimbing_lapangan = '',$id_instansi = '',$id_kelompok = '',$nama_pembimbing_lapangan = '',$alamat = '', $number_handphone = '')
	{
		$this->konek = new KoneksiBasisData();

		$this->id_pembimbing_lapangan = $id_pembimbing_lapangan;
		$this->id_instansi    			  = $id_instansi;
		$this->id_kelompok    			  = $id_kelompok;
		$this->nama_pembimbing_lapangan  = $nama_pembimbing_lapangan;
		$this->alamat    			  = $alamat;
		$this->number_handphone  	  = $number_handphone;

	}

	function MelihatPembimbingLapangan()
	{
		return $this->queryMelihatPembimbingLapangan();
	}

	function MencariPembimbingLapangan()
	{
		return $this->queryMencariPembimbingLapangan();
	}

	function Search()
	{
		return $this->querySearch();
	}

	function MemasukkanPembimbingLapangan()
	{
		return $this->queryMemasukkanPembimbingLapangan();
	}

	function MengubahPembimbingLapangan()
	{
		return $this->queryMengubahPembimbingLapangan();
	}

	function MenghapusPembimbingLapangan()
	{
		return $this->queryMenghapusPembimbingLapangan();
	}

}

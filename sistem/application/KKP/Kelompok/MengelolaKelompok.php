<?php
require "Kelompok.php";

class MengelolaKelompok extends Kelompok
{
	public function __construct($id_kelompok = '',$nama_kelompok = '', $tanggal_masuk = '', $tanggal_keluar = '', $id_dosen='', $tahun_akademik = '')
	{
		$this->konek = new KoneksiBasisData();

		$this->id_kelompok    			= $id_kelompok;
		$this->nama_kelompok  			= $nama_kelompok;
		$this->tanggal_masuk   			= $tanggal_masuk;
		$this->tanggal_keluar 			= $tanggal_keluar;
		$this->id_dosen 				= $id_dosen;
		$this->tahun_akademik 			= $tahun_akademik;
	}

	function MelihatKelompok()
	{
		return $this->queryMelihatKelompok();
	}

	function MelihatKelompokku()
	{
		return $this->queryMelihatKelompokku();
	}

	function MencariKelompok()
	{
		return $this->queryMencariKelompok();
	}

	function CekNamaKelompok()
	{
		return $this->queryMencariNamaKelompok();
	}

	function MemasukkanKelompok()
	{
		return $this->queryMemasukkanKelompok();
	}

	function MengubahKelompok()
	{
		return $this->queryMengubahKelompok();
	}

	function MenghapusKelompok()
	{
		return $this->queryMenghapusKelompok();
	}

	function proses()
  {
      return $this->queryproses();
  }
}

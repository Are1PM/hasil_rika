<?php
require "DokumenKkp.php";

class MengelolaDokumenKkp extends DokumenKkp
{
	public function __construct($id_dokumen_kkp ='',$id_mahasiswa='',$tanggal_upload ='',$tahun='',$file_bab_I='',$file_lengkap_laporan_kkp ='')
    {   
            $this->konek = new KoneksiBasisData();

            $this->id_mahasiswa				= $id_mahasiswa;
            $this->id_dokumen_kkp			= $id_dokumen_kkp;
            $this->file_bab_I     			= $file_bab_I;
            $this->file_lengkap_laporan_kkp = $file_lengkap_laporan_kkp;
            $this->tanggal_upload  		    = $tanggal_upload;
            $this->tahun     				= $tahun;

           
    }

	function MelihatDokumen()
	{
		return $this->queryMelihatDokumen();
	}

	function AllDokumen()
	{
		return $this->queryJumlahDokumen();
	}

	function MenampilkanDokumenPermahasiswa()
	{
		return $this->queryMenampilkanDokumenPermahasiswa();
	}

	function MencariDokumen()
	{
		return $this->queryMencariDokumen();
	}

	function AksiFileBab1()
	{
		return $this->queryBab1();
	}

	function AksiFileLengkap()
	{
		return $this->queryBab1();
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

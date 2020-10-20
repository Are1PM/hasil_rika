<?php
require "DownloadDokumenSkripsi.php";

class MengelolaDownloadDokumenSkripsi extends DownloadDokumenSkripsi
{
	public function __construct($id_download_Skripsi ='',$id_dokumen_skripsi ='',$id_dosen ='',$tanggal_download='')
    {   
            $this->konek = new KoneksiBasisData();

            $this->id_download_Skripsi= $id_download_Skripsi;
            $this->id_dokumen_skripsi     = $id_dokumen_skripsi;
            $this->id_dosen     = $id_dosen;
            $this->tanggal_download         = $tanggal_download;
           
    }

	function MelihatDownloadDokumenSkripsi()
	{
		return $this->queryMelihatDownloadDokumenSkripsi();
	}

	function MencariDownloadDokumenSkripsi()
	{
		return $this->queryMencariDownloadDokumenSkripsi();
	}

	function MendownloadDokumen()
	{
		return $this->queryMendownloadDokumenKkp();
	}


	
}


?>

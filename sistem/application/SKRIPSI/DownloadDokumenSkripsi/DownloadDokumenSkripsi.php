<?php

class DownloadDokumenSkripsi
{
    public $id_download,
           $id_dokumen_skripsi,
           $id_dosen,
           $tanggal_download;

    function getIdDownload()
    {
        return $this->id_download;
    }

    function getIdDokumenSkripsi()
    {
        return $this->id_dokumen_skripsi;
    }

    function getIdDosen()
    {
        return $this->id_dosen;
    }

    function getTanggalDownload()
    {
        return $this->tanggal_download;
    }

    

    
    function setIdUDownload($id_download)
    {
        $this->id_download = $id_download;
    }

    function setIdDokumenSkripsi($id_dokumen_skripsi)
    {
        $this->id_dokumen_skripsi = $id_dokumen_skripsi;
    }

    function setIdDosen($id_dosen)
    {
        $this->id_dosen = $id_dosen;
    }

    function setTanggalUpload($tanggal_upload)
    {
        $this->tanggal_upload = $tanggal_upload;
    }




    public function queryMelihatDownloadDokumenSkripsi()
    {
        $sql= "SELECT * FROM download_skripsi d, dokumen_skripsi ds, mengupload_file_skripsi m,dosen dsn where ds.id_dokumen_skripsi=d.id_dokumen_skripsi AND m.id_upload=ds.id_upload AND dsn.id_dosen=d.id_dosen";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
        
        return $query;
    }

    public function queryMencariMencariDownloadDokumenSkripsi()
    {
        $id_upload   = $this->getIdUpload();

        $sql= "SELECT * FROM download_skripsi where id_download='$id_download'";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);
        
        return $query;
    }

    function __destruct()
    {

    }


}

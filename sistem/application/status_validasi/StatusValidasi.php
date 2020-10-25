<?php

class StatusValidasi
{
    public $id_status_validasi,
        $status_valid;



    function getIdStatusValidasi()
    {
        return $this->id_status_validasi;
    }

    function getStatusValidasig()
    {
        return $this->status_valid;
    }



    function setIdStatusValidasi($id_status_validasi)
    {
        $this->id_status_validasi = $id_status_validasi;
    }

    function setStatusValidasi($status_valid)
    {
        $this->status_valid = $status_valid;
    }





    public function queryMelihatStatusValidasi()
    {
        $sql = "SELECT * FROM status_valid";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);

        return $query;
    }

    public function queryMencariStatusValidasi()
    {
        $id_status_validasi   = $this->getIdStatusValidasi();

        $sql = "SELECT * FROM status_validasi where id_status_validasi='$id_status_validasi'";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);

        return $query;
    }


    function __destruct()
    {
    }
}

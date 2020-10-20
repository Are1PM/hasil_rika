<?php

class ValidasiDokumenSkripsi
{
    public $id_val_skripsi,
           $id_dokumen_skripsi,
           $id_admin,
           $tanggal_validasi,
           $id_status_validasi,
           $keterangan;

    function getIdValSkripsi()
    {
        return $this->id_val_skripsi;
    }

    function getIdDokumenSkripsi()
    {
        return $this->id_dokumen_skripsi;
    }

    function getIdAdmin()
    {
        return $this->id_admin;
    }

    function getTanggalValidasi()
    {
        return $this->tanggal_validasi;
    }

    function getIdStatusValidasi()
    {
        return $this->id_status_validasi;
    }

    function getKeterangan()
    {
        return $this->keterangan;
    }
     


    
    function setIdValSkripsi($id_val_skripsi)
    {
        $this->id_val_skripsi = $id_val_skripsi;
    }

    function setIdDokumenSkripsi($id_dokumen_skripsi)
    {
        $this->id_dokumen_skripsi = $id_dokumen_skripsi;
    }

    function setTanggalValidasi($tanggal_validasi)
    {
        $this->tanggal_validasi = $tanggal_validasi;
    }

    function setIdStatusValidasi($id_status_validasi)
    {
        $this->id_status_validasi = $id_status_validasi;
    }
    function setKeterangan($keterangan)
    {
        $this->keterangan = $keterangan;
    }





    public function queryMelihatDokumenSkripsi()
    {
        $sql= "SELECT * FROM memvalidasi_dokumen_skripsi";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
        
        return $query;
    }

    public function queryJumlahSudahValidasi()
    {
        $sql= "SELECT count(id_val_skripsi) as jumlah_validasi FROM memvalidasi_dokumen_skripsi";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);
        
        return $query;
    }


    public function queryMencariDokumenSkripsi()
    {
        $id_dokumen_skripsi   = $this->getIdDokumenSkripsi();

        $sql= "SELECT * FROM memvalidasi_dokumen_skripsi where id_dokumen_skripsi='$id_dokumen_skripsi'";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);
        
        return $query;
    }

   public function queryMemeriksaDokumenSkripsi()
    {
        $id_val_skripsi  = $this->getIdValSkripsi();
        $id_dokumen_skripsi        = $this->getIdDokumenSkripsi();
        $id_admin    = $this->getIdAdmin();
        $tanggal_validasi    = $this->getTanggalValidasi();
        $id_status_validasi     = $this->getIdStatusValidasi();
        $keterangan     = $this->getKeterangan();
        
        $sql = "INSERT into memvalidasi_dokumen_skripsi values (null,'$id_dokumen_skripsi','$id_admin','$tanggal_validasi','$id_status_validasi','keterangan')";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        if ($proses) {
            echo '<div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <br><div class="alert alert-success text-center">
                                Berhasil ditambahkan 
                            </div>
                            <br>
                              <div class="form-group">
                                <a href="?rik=data-ValidasiDokumenSkripsi"><button class="btn btn-info">Lihat Data</button></a>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>';
        }else{
            echo '<br><div class="alert alert-danger text-center">
                Gagal
            </div>';
        }
    }


    public function queryMengubahDokumen()
    {
        $id_val_skripsi  = $this->getIdValSkripsi();
        $id_dokumen_skripsi  = $this->getIdDokumenSkripsi();
        $id_admin          = $this->getIdAdmin();
        $tanggal_validasi     = $this->getTanggalValidasi();
        $id_status_validasi     = $this->getIdStatusValidasi();
        $keterangan   = $this->getKeterangan();
        
        $sql = "UPDATE memvalidasi_dokumen_kkp SET id_dokumen_skripsi='$id_dokumen_skripsi',id_admin='$id_admin',tanggal_validasi='$tanggal_validasi',keterangan='$keterangan' where id_val_skripsi='$id_val_skripsi'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        if ($proses) {
            echo '<div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <br><div class="alert alert-success text-center">
                                Berhasil diubah 
                            </div>
                            <br>
                              <div class="form-group">
                                <a href="?rik=data-ValidasiDokumenSkripsi"><button class="btn btn-info">Lihat Data</button></a>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>';
        }else{
            echo "Gagal";
        }
    }

    public function queryMenghapusDokumen()
    {
        $id_val_skripsi = $this->getIdValSkripsi();

        $sql = "DELETE from ValidaDokumenSkripsi where id_val_skripsi='$id_val_skripsi'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        if ($proses) {
            echo "berhasil di hapus";
        }else{
            echo "Gagal";
        }

    }

 

    function __destruct()
    {

    }


}
?>
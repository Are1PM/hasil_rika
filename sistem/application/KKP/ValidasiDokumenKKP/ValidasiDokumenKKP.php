<?php

class ValidasiDokumenKKP
{
    public $id_val_kkp,
        $id_dokumen_kkp,
        $id_admin,
        $tanggal_validasi,
        $id_status_validasi,
        $keterangan;

    function getIdValKkp()
    {
        return $this->id_val_kkp;
    }

    function getIdDokumenKkp()
    {
        return $this->id_dokumen_kkp;
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




    function setIdValKkp($id_val_kkp)
    {
        $this->id_val_kkp = $id_val_kkp;
    }

    function setIdDokumenKkp($id_dokumen_kkp)
    {
        $this->id_dokumen_kkp = $id_dokumen_kkp;
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

    public function queryMelihatDokumenKkp()
    {
        $sql = "SELECT * FROM memvalidasi_dokumen_kkp";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);

        return $query;
    }

    public function queryMencariDokumenKkp()
    {
        $id_dokumen_kkp = $this->getIdDokumenKkp();

        $sql = "SELECT * FROM memvalidasi_dokumen_kkp where id_dokumen_kkp='$id_dokumen_kkp'";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);

        return $query;
    }

    public function queryJumlahDokumen()
    {
        $sql = "SELECT count(id_val_kkp) as jumlah_validasi FROM memvalidasi_dokumen_kkp";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);

        return $query;
    }


    public function queryMemeriksaDokumenKkp()
    {
        $id_dokumen_kkp        = $this->getIdDokumenKkp();
        $id_admin    = $this->getIdAdmin();
        $tanggal_validasi    = $this->getTanggalValidasi();
        $id_status_validasi     = $this->getIdStatusValidasi();
        $keterangan     = $this->getKeterangan();

        $sql = "INSERT INTO memvalidasi_dokumen_kkp values (null,'$id_admin','$id_dokumen_kkp','$tanggal_validasi','$id_status_validasi','$keterangan')";
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
                                <a href="?rik=data-ValidasiDokumenKKP"><button class="btn btn-info">Lihat Data</button></a>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>';
        } else {
            echo '<br><div class="alert alert-danger text-center">
                Gagal
            </div>';
        }
    }

    public function queryMengubahDokumen()
    {
        $id_val_kkp  = $this->getIdValKkp();
        $id_dokumen_kkp  = $this->getIdDokumenKkp();
        $id_admin          = $this->getIdAdmin();
        $tanggal_validasi     = $this->getTanggalValidasi();
        $id_status_validasi     = $this->getIdStatusValidasi();
        $keterangan   = $this->getKeterangan();

        $sql = "UPDATE memvalidasi_dokumen_kkp SET id_dokumen_kkp='$id_dokumen_kkp',id_admin='$id_admin',id_status_validasi='$id_status_validasi',tanggal_validasi='$tanggal_validasi',keterangan='$keterangan' where id_val_kkp='$id_val_kkp'";
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
                                <a href="?rik=data-ValidasiDokumenKkp"><button class="btn btn-info">Lihat Data</button></a>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>';
        } else {
            echo "Gagal";
        }
    }

    public function queryMenghapusDokumen($id)
    {
        $id_val_kkp = $id;

        $sql = "DELETE from memvalidasi_dokumen_kkp where id_val_kkp='$id_val_kkp'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();
    }

    function __destruct()
    {
    }
}

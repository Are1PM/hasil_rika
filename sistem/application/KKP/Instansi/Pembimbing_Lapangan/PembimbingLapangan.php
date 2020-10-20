<?php

class PembimbingLapangan
{
    public $id_pembimbing_lapangan,
        $id_instansi,
        $id_kelompok,
        $nama_pembimbing_lapangan,
        $alamat,
        $number_handphone;

    function getIdPembimbingLapangan()
    {
        return $this->id_pembimbing_lapangan;
    }

    function getIdInstansi()
    {
        return $this->id_instansi;
    }
    function getIdKelompok()
    {
        return $this->id_kelompok;
    }

    function getNama()
    {
        return $this->nama_pembimbing_lapangan;
    }
    function getAlamat()
    {
        return $this->alamat;
    }

    function getNumberHandphone()
    {
        return $this->number_handphone;
    }


    function setIdPembimbingLapangan($id_pembimbing_lapangan)
    {
        $this->id_pembimbing_lapangan = $id_pembimbing_lapangan;
    }

    function setIdInstansi($id_instansi)
    {
        $this->id_instansi=$id_instansi;
    }
    function setIdKelompok($id_kelompok)
    {
        $this->id_kelompok=$id_kelompok;
    }

    function setNama($nama_pembimbing_lapangan)
    {
        $this->nama_pembimbing_lapangan = $nama_pembimbing_lapangan;
    }
    function setAlamat($alamat)
    {
        $this->alamat=$alamat;
    }
    function setNumberHandphone($number_handphone)
    {
        $this->number_handphone = $number_handphone;
    }
    
    public function queryMelihatPembimbingLapangan()
    {
        $sql = "SELECT * from pembimbing_lapangan p, kelompok k, instansi i where k.id_kelompok=p.id_kelompok AND i.id_instansi=p.id_instansi";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);

        return $query;
    }

    public function queryMencariPembimbingLapangan()
    {
        $id_pembimbing_lapangan = $this->getIdPembimbingLapangan();

        $sql = "SELECT * FROM pembimbing_lapangan p, kelompok k, instansi i where k.id_kelompok=p.id_kelompok AND i.id_instansi=p.id_instansi AND p.id_pembimbing_lapangan='$id_pembimbing_lapangan'";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);

        return $query;
    }

    public function querySearch()
    {
        $id_kelompok = $this->getIdKelompok();

        $sql = "SELECT * FROM pembimbing_lapangan p, kelompok k, instansi i where i.id_instansi=p.id_instansi AND p.id_kelompok=k.id_kelompok AND k.id_kelompok='$id_kelompok'";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);

        return $query;
    }

    public function queryMemasukkanPembimbingLapangan()
    {
        $id_instansi        = $this->getIdInstansi();
        $id_kelompok        = $this->getIdKelompok();
        $nama        = $this->getNama();
        $alamat         = $this->getAlamat();
        $number_handphone     = $this->getNumberHandphone();

        $sql = "INSERT into pembimbing_lapangan values (NULL,'$id_instansi','$id_kelompok','$nama','$alamat','$number_handphone')";
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
                                <a href="?rik=data-pembimbing-lapangan"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMengubahPembimbingLapangan()
    {
        $id_pembimbing_lapangan   = $this->getIdPembimbingLapangan();
        $id_instansi              = $this->getIdInstansi();
        $id_kelompok              = $this->getIdKelompok();
        $nama                     = $this->getNama();
        $alamat                   = $this->getAlamat();
        $number_handphone         = $this->getNumberHandphone();

        $sql = "UPDATE pembimbing_lapangan SET id_instansi='$id_instansi',id_kelompok='$id_kelompok',nama_pembimbing_lapangan='$nama',alamat='$alamat',number_handphone='$number_handphone' where id_pembimbing_lapangan='$id_pembimbing_lapangan'";
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
                                <a href="?rik=data-pembimbing-lapangan"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMenghapusPembimbingLapangan()
    {
        $id_pembimbing_lapangan = $this->getIdPembimbingLapangan();

        $sql = "DELETE from pembimbing_lapangan where id_pembimbing_lapangan='$id_pembimbing_lapangan'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        if ($proses) {
            echo "berhasil di hapus";
        } else {
            echo "Gagal";
        }
    }



    function __destruct()
    { }
}

<?php

class Kelompok
{
    public  $id_kelompok,
        $nama_kelompok,
        $tanggal_masuk,
        $tanggal_keluar,
        $id_dosen,
        $tahun_akademik;

    function getIdKelompok()
    {
        return $this->id_kelompok;
    }

    function getNamaKelompok()
    {
        return $this->nama_kelompok;
    }

    function getTanggalMasuk()
    {
        return $this->tanggal_masuk;
    }
    function getTanggalKeluar()
    {
        return $this->tanggal_keluar;
    }

    function getIdDosen()
    {
        return $this->id_dosen;
    }

    function getTahunAkademik()
    {
        return $this->tahun_akademik;
    }





    function setIdKelompok($id_kelompok)
    {
        $this->id_kelompok = $id_kelompok;
    }
    function setNamaKelompok($nama_kelompok)
    {
        $this->nama_kelompok = $nama_kelompok;
    }
    function setTanggalMasuk($tanggal_masuk)
    {
        $this->tanggal_masuk = $tanggal_masuk;
    }
    function setTanggalKeluar($tanggal_keluar)
    {
        $this->tanggal_keluar = $tanggal_keluar;
    }
    function setIdDosen($id_dosen)
    {
        $this->id_dosen = $id_dosen;
    }
    function setTahunAkademik($tahun_akademik)
    {
        $this->tahun_akademik = $tahun_akademik;
    }

    public function queryMelihatKelompok()
    {
        $tahun_akademik = $_POST['tahun_akademik'];
        if ($tahun_akademik != "" && $id_instansi != "") {
            $sql = "SELECT * FROM kelompok where id_instansi='$id_instansi'";
            $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
        } else {
            $sql = "SELECT * FROM kelompok k,dosen d where d.id_dosen=k.id_dosen AND k.id_kelompok not in('0')";
            $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
        }
        return $query;
    }

    public function queryMencariKelompok()
    {
        $id_kelompok   = $this->getIdKelompok();

        $sql = "SELECT * FROM kelompok k,pembimbing_lapangan p , instansi i, mahasiswa m, dosen d where i.id_instansi=p.id_instansi AND d.id_dosen=k.id_dosen AND k.id_kelompok='$id_kelompok'";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);

        return $query;
    }

    public function queryMencariNamaKelompok()
    {
        $nama_kelompok   = $this->getNamaKelompok();
        $tahun_akademik = $this->getTahunAkademik();

        $sql = "SELECT * FROM kelompok where nama_kelompok='$nama_kelompok' AND tahun_akademik='$tahun_akademik'";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);

        return $query;
    }

    public function queryMemasukkanKelompok()
    {
        $id_kelompok         = $this->getIdKelompok();
        $nama_kelompok     = $this->getNamaKelompok();
        $tanggal_masuk       = $this->getTanggalMasuk();
        $tanggal_keluar     = $this->getTanggalKeluar();
        $id_dosen    = $this->getIdDosen();
        $tahun_akademik = $this->getTahunAkademik();


        $sql = "INSERT into kelompok values (NULL,'$nama_kelompok','$tanggal_masuk','$tanggal_keluar','$id_dosen','$tahun_akademik')";
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
                                <a href="?rik=data-Kelompok"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMengubahKelompok()
    {
        $id_kelompok            = $this->getIdKelompok();
        $nama_kelompok     = $this->getNamaKelompok();
        $tanggal_masuk     = $this->getTanggalMasuk();
        $tanggal_keluar      = $this->getTanggalKeluar();
        $id_dosen      = $this->getIdDosen();
        $tahun_akademik      = $this->getTahunAkademik();

        $sql = "UPDATE kelompok SET nama_kelompok='$nama_kelompok',tanggal_masuk='$tanggal_masuk',tanggal_keluar='$tanggal_keluar', id_dosen='$id_dosen', tahun_akademik='$tahun_akademik' where id_kelompok='$id_kelompok'";
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
                                <a href="?rik=data-Kelompok"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMenghapusKelompok()
    {
        $id_kelompok = $this->getIdKelompok();

        $sql = "DELETE from kelompok where id_kelompok='$id_kelompok'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        if ($proses) {
            echo "berhasil di hapus";
        } else {
            echo "Gagal";
        }
    }



    function __destruct()
    {
    }
}

<?php

class Bimbingan
{
    public $id_mahasiswa,
        $id_bimbingan,
        $judul,
        $tahun,
        $abstrak_indonesia,
        $abstrak_inggris,
        $tanggal_upload;

    function getIdBimbingan()
    {
        return $this->id_bimbingan;
    }

    function getIdMahasiswa()
    {
        return $this->id_mahasiswa;
    }

    function getJudul()
    {
        return $this->judul;
    }

    function getTahun()
    {
        return $this->tahun;
    }

    function getAbstrakIndonesia()
    {
        return $this->abstrak_indonesia;
    }

    function getAbstrakInggris()
    {
        return $this->abstrak_inggris;
    }
    function getTanggalUpload()
    {
        return $this->tanggal_upload;
    }



    function setIdBimbingan($id_bimbingan)
    {
        $this->id_bimbingan = $id_bimbingan;
    }

    function setIdMahasiswa($id_mahasiswa)
    {
        $this->id_mahasiswa = $id_mahasiswa;
    }

    function setJudul($judul)
    {
        $this->judul = $judul;
    }

    function setTahun($tahun)
    {
        $this->tahun = $tahun;
    }
    function setAbstrakIndonesia($abstrak_indonesia)
    {
        $this->abstrak_indonesia = $abstrak_indonesia;
    }

    function setAbstrakInggris($abstrak_inggris)
    {
        $this->abstrak_inggris = $abstrak_inggris;
    }

    // ============== SUDAH DI PERBAIKI =============================
    // ============== SUDAH DI PERBAIKI =============================
    public function queryMelihatDokumen()
    {
        $id_mahasiswa   = $_SESSION['id_mahasiswa'];

        if ($_SESSION['hak_akses'] == "mahasiswa") {
            $sql = "
                SELECT * FROM mahasiswa m
                LEFT JOIN bimbingan u
                ON m.id_mahasiswa=u.id_mahasiswa
                LEFT JOIN dokumen_skripsi ds
                ON ds.id_bimbingan=u.id_bimbingan
                LEFT JOIN memvalidasi_dokumen_skripsi mds
                ON ds.id_dokumen_skripsi=mds.id_dokumen_skripsi
                where u.id_mahasiswa='$id_mahasiswa' AND judul<>'-' LIMIT 1";
        } else {
            if ($id_mahasiswa != "") {

                $sql = "SELECT * FROM bimbingan where id_mahasiswa='$id_mahasiswa'";
            } else {
                $sql = "SELECT * FROM bimbingan u,mahasiswa m where m.id_mahasiswa=u.id_mahasiswa";
            }
        }


        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);

        return $query;
    }

    // ============== SUDAH DI PERBAIKI =============================
    // ============== SUDAH DI PERBAIKI =============================
    public function queryMencariDokumen()
    {
        if ($_SESSION['hak_akses'] == "mahasiswa") {

            $id_mahasiswa = $_SESSION['id_mahasiswa'];
            // $sql = "
            // SELECT * FROM 
            // bimbingan b
            // LEFT JOIN mahasiswa m
            // ON m.id_mahasiswa=b.id_mahasiswa
            // LEFT JOIN  dosen_pembimbing dp 
            // ON b.Id_dosen_pembimbing=dp.Id_dosen_pembimbing
            // LEFT JOIN dokumen_skripsi dsk
            // ON b.id_bimbingan=dsk.id_bimbingan
            // WHERE b.id_mahasiswa='$id_mahasiswa'
            // ";
            $sql = "
            SELECT * FROM 
            mahasiswa m
            LEFT JOIN bimbingan b
            ON m.id_mahasiswa=b.id_mahasiswa AND b.judul<>'-'
            WHERE b.id_mahasiswa='$id_mahasiswa'
            ";
        } else {
            $id_bimbingan = $_GET['id_bimbingan'];
            $sql = "
            SELECT * FROM 
            mahasiswa m
            LEFT JOIN bimbingan b
            ON m.id_mahasiswa=b.id_mahasiswa AND b.judul<>'-'
            WHERE b.id_bimbingan='$id_bimbingan'
            ";
        }
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);
        return $query;
    }



    public function queryPencarianDokumen()
    {
        $judul   = $this->getJudul();
        $tahun   = $this->getTahun();
        $sql = "SELECT * FROM dokumen_skripsi dk, bimbingan mf,mahasiswa m,memvalidasi_dokumen_skripsi mds where mf.judul like '%$judul%' AND mf.tahun='$tahun' AND dk.id_bimbingan=mf.id_bimbingan AND m.id_mahasiswa=mf.id_mahasiswa AND mds.id_dokumen_skripsi=dk.id_dokumen_skripsi";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
        return $query;
    }

    public function queryMengecek()
    {
        $id_mahasiswa   = $_SESSION['id_mahasiswa'];

        $sql = "SELECT * FROM bimbingan where id_mahasiswa='$id_mahasiswa'";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);

        return $query;
    }

    // ============== SUDAH DI PERBAIKI =============================
    // ============== SUDAH DI PERBAIKI =============================
    public function queryMemasukkanDokumen()
    {
        $id_mahasiswa  = $this->getIdMahasiswa();
        $judul         = $this->getJudul();
        $tahun     = $this->getTahun();
        $abstrak_indonesia     = $this->getAbstrakIndonesia();
        $abstrak_inggris     = $this->getAbstrakInggris();
        $tanggal_upload = $this->getTanggalUpload();

        // $sql = "INSERT into bimbingan values (null,'$id_mahasiswa','$judul','$tahun','$abstrak_inggris','$abstrak_indonesia','$tanggal_upload')";
        $sql = "UPDATE bimbingan 
                SET 
                    judul='$judul', 
                    tahun='$tahun', 
                    abstrak_inggris='$abstrak_inggris',
                    abstrak_indonesia='$abstrak_indonesia',
                    tanggal_upload='$tanggal_upload'
                WHERE
                    id_mahasiswa='$id_mahasiswa'";

        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();
        // print_r($this->konek->execute()->errorInfo());
        // die;

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
                                <a href="?rik=data-UploadSkripsi"><button class="btn btn-info">Lihat Data</button></a>
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
        $id_bimbingan  = $this->getIdBimbingan();
        $judul          = $this->getJudul();
        $abstrak_indonesia     = $this->getAbstrakIndonesia();
        $abstrak_inggris    = $this->getAbstrakInggris();

        $sql = "UPDATE bimbingan SET judul='$judul',abstrak_inggris='$abstrak_inggris',abstrak_indonesia='$abstrak_indonesia' where id_bimbingan='$id_bimbingan'";
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
                                <a href="?rik=data-UploadSkripsi"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMenghapusDokumen()
    {
        $id_kelompok = $this->getIdKelompok();

        $sql = "DELETE from mengupload_laporan_kkp where id_kelompok='$id_kelompok'";
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

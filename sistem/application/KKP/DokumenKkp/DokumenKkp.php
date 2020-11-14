<?php

class DokumenKkp
{
    public
        $id_mahasiswa,
        $id_dokumen_kkp,
        $file_bab_I,
        $feli_lengkap_loporan_kkp,
        $tanggal_upload,
        $tahun;

    function getIdMahasiswa()
    {
        return $this->id_mahasiswa;
    }

    function getIdDokumenKkp()
    {
        return $this->id_dokumen_kkp;
    }

    function getFileBabI()
    {
        return $this->file_bab_I;
    }
    function getFileLengkapLaporanKkp()
    {
        return $this->file_lengkap_laporan_kkp;
    }

    function getTanggalUpload()
    {
        return $this->tanggal_upload;
    }

    function getTahun()
    {
        return $this->tahun;
    }



    function setIdMahasiswa($id_mahasiswa)
    {
        $this->id_mahasiswa = $id_mahasiswa;
    }
    function setIdDokumenKkp($id_dokumen_kkp)
    {
        $this->id_dokumen_kkp = $id_dokumen_kkp;
    }

    function setFileBabI($file_bab_I)
    {
        $this->file_bab_I = $file_bab_I;
    }

    function setFileLengkapLapranKp($file_lengkap_laporan_kkp)
    {
        $this->file_lengkap_laporan_kkp = $file_lengkap_laporan_kkp;
    }

    function setTanggalUplad($tanggal_upload)
    {
        $this->tanggal_upload = $tanggal_upload;
    }
    function setTahun($tahun)
    {
        $this->tahun = $tahun;
    }



    public function queryMelihatDokumen()
    {
        if ($_SESSION['hak_akses'] == "mahasiswa") {
            $id_mahasiswa = $_SESSION['id_mahasiswa'];

            $sql = "
                SELECT * FROM mahasiswa m 
                LEFT JOIN dokumen_kkp d
                ON  m.id_mahasiswa=d.id_mahasiswa
                where
                    m.id_mahasiswa='$id_mahasiswa'
                ";
        } else {

            $sql = "SELECT * FROM dokumen_kkp d, mahasiswa m where m.id_mahasiswa=d.id_mahasiswa";
        }
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);

        return $query;
    }

    public function queryMenampilkanDokumenPermahasiswa()
    {
        $id_mahasiswa = $_SESSION['id_mahasiswa'];

        $sql = "
            SELECT *, m.id_mahasiswa FROM mahasiswa m
            LEFT JOIN kelompok k ON m.id_kelompok=k.id_kelompok
            LEFT JOIN dokumen_kkp d ON m.id_mahasiswa=d.id_mahasiswa
            LEFT JOIN dosen ds ON k.id_dosen=ds.id_dosen
            LEFT JOIN pembimbing_lapangan pl ON k.id_kelompok=pl.id_kelompok
            LEFT JOIN instansi i ON pl.id_instansi=i.id_instansi
            LEFT JOIN status_kelompok s ON m.id_status_kelompok=s.id_status_kelompok
            LEFT JOIN memvalidasi_dokumen_kkp mdk ON d.id_dokumen_kkp=mdk.id_dokumen_kkp                
            WHERE m.id_mahasiswa='$id_mahasiswa'
            ";

        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);
        return $query;
    }

    public function queryJumlahDokumen()
    {
        $sql = "SELECT count(id_dokumen_kkp) as jumlah_kkp FROM dokumen_kkp";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);

        return $query;
    }

    public function queryMencariDokumen()
    {
        $id_dokumen_kkp   = $this->getIdDokumenKkp();


        $sql = "SELECT * FROM dokumen_kkp d, mahasiswa m, kelompok k, status_kelompok s,dosen ds, pembimbing_lapangan pl,instansi i where i.id_instansi=pl.id_instansi AND pl.id_kelompok=k.id_kelompok AND ds.id_dosen=k.id_dosen AND s.id_status_kelompok=m.id_status_kelompok AND k.id_kelompok=m.id_kelompok AND m.id_mahasiswa=d.id_mahasiswa AND d.id_dokumen_kkp='$id_dokumen_kkp'";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);
        return $query;
    }

    public function queryMencariDokumenKKP($id_mahasiswa)
    {
        $sql = "SELECT *,COUNT(*) ada FROM dokumen_kkp WHERE id_mahasiswa='$id_mahasiswa'";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);
        return $query;
    }

    public function queryMemasukkanDokumen()
    {
        $id_mahasiswa               = $this->getIdMahasiswa();
        $tanggal_upload             = $this->getTanggalUpload();
        $tahun                      = $this->getTahun();
        $file_bab_I                 = $this->getFileBabI();
        $file_lengkap_laporan_kkp   = $this->getFileLengkapLaporanKkp();

        $sql = "INSERT into dokumen_kkp values (NULL,'$id_mahasiswa','$tanggal_upload','$tahun','$file_bab_I','$file_lengkap_laporan_kkp')";
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
                                Berhasil di Upload
                            </div>
                            <br>
                              <div class="form-group">
                                <a href="?rik=data-DokumenKkp"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMengubahDokumen()
    {
        $id_dokumen_kkp = $this->getIdDokumenKkp();
        $tahun          = $this->getTahun();


        $sql = "UPDATE dokumen_kkp SET tahun='$tahun' where id_dokumen_kkp='$id_dokumen_kkp'";
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
                                <a href="?rik=data-DokumenKkp"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMengosongkanFile($id)
    {
        $id_mahasiswa = $_SESSION['id_mahasiswa'];

        $sql = "
            UPDATE dokumen_kkp
            SET 
                file_bab_I = '',
                file_lengkap_laporan_kkp = ''
            WHERE id_mahasiswa='$id_mahasiswa'";

        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        $sql = "UPDATE memvalidasi_dokumen_kkp SET Id_status_validasi='3' where id_dokumen_kkp='$id'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();
    }

    public function queryMengubahDokumenKKP()
    {

        $id_mahasiswa               = $this->getIdMahasiswa();
        $tanggal_upload             = $this->getTanggalUpload();
        $tahun                      = $this->getTahun();
        $file_bab_I                 = $this->getFileBabI();
        $file_lengkap_laporan_kkp   = $this->getFileLengkapLaporanKkp();

        $this->konek->execute()->setAttribute(PDO::ATTR_EMULATE_PREPARES, 1);


        $sql = "UPDATE dokumen_kkp SET tahun='$tahun', tanggal_upload='$tanggal_upload', file_bab_I='$file_bab_I', file_lengkap_laporan_kkp='$file_lengkap_laporan_kkp' WHERE id_mahasiswa='$id_mahasiswa'";
        $prepare = $this->konek->execute()->prepare($sql);
        $prepare->execute();

        $sql = "SELECT id_dokumen_kkp FROM dokumen_kkp WHERE id_mahasiswa='$id_mahasiswa'";
        $proses = $this->konek->execute()->query($sql)->fetch();
        // print_r($proses);
        // die;

        if ($proses) {

            if ($proses) {
                echo '<div id="myModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <br><div class="alert alert-success text-center">
                                    Berhasil diupload ulang 
                                </div>
                                <br>
                                  <div class="form-group">
                                    <a href="?rik=data-DokumenKkp"><button class="btn btn-info">Lihat Data</button></a>
                                  </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>';
            } else {
                echo '<div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                            <br><div class="alert alert-warning text-center">
                                Dokumen telah diupload ulang 
                            </div>
                            <br>
                              <div class="form-group">
                                <a href="?rik=data-DokumenKkp"><button class="btn btn-info">Lihat Data</button></a>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>';
            }
        } else {
            echo "Gagal";
        }
    }

    public function queryFileBab1()
    {
        $id_dokumen_kkp = $this->getIdDokumenKkp();
        $file_bab_I     = $this->getFileBabI();

        $sql = "UPDATE dokumen_kkp SET file_bab_I='$file_bab_I' where id_dokumen_kkp='$id_dokumen_kkp'";
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
                                Berhasil dikonfirmasi
                            </div>
                            <br>
                              <div class="form-group">
                                <a href="?rik=detail-DokumenKkp&id_dokumen_kkp=' . $id_dokumen_kkp . '"><button class="btn btn-info">Lihat Data</button></a>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>';
        }
    }

    public function queryFileLengkap()
    {
        $id_dokumen_kkp           = $this->getIdDokumenKkp();
        $file_lengkap_laporan_kkp = $this->getFileLengkapLaporanKkp();

        $sql = "UPDATE dokumen_kkp SET file_lengkap_laporan_kkp='$file_lengkap_laporan_kkp' where id_dokumen_kkp='$id_dokumen_kkp'";
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
                                Berhasil dikonfirmasi
                            </div>
                            <br>
                              <div class="form-group">
                                <a href="?rik=detail-DokumenKkp&id_dokumen_kkp=' . $id_dokumen_kkp . '"><button class="btn btn-info">Lihat Data</button></a>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>';
        }
    }

    public function queryMenghapusDokumen()
    {
        $id_dokumen_kkp = $this->getIdDokumenKkp();

        $sql = "DELETE from dokumen_kkp where id_dokumen_kkp='$id_dokumen_kkp'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        if ($proses) {
            echo "berhasil di hapus";
        } else {
            echo "Gagal";
        }
    }

    public function queryMencariByTahun($tahun)
    {
        if (isset($_SESSION['hak_akses'])) {

            $sql = "
                SELECT
                    m.id_mahasiswa,m.nama_mahasiswa,m.email,dk.tahun,i.nama_instansi,dk.file_lengkap_laporan_kkp
                FROM
                    dokumen_kkp dk
                LEFT JOIN
                    mahasiswa m
                ON m.id_mahasiswa=dk.id_mahasiswa
                LEFT JOIN
                    kelompok k
                ON k.id_kelompok=m.id_kelompok
                LEFT JOIN
                    pembimbing_lapangan pl
                ON pl.id_kelompok=k.id_kelompok
                LEFT JOIN
                    instansi i
                ON i.id_instansi=pl.id_instansi
                WHERE dk.tahun='$tahun'
            ";
        } else {
            $sql = "
                SELECT
                    m.id_mahasiswa,m.nama_mahasiswa,m.email,dk.tahun,i.nama_instansi,dk.file_bab_I
                FROM
                    dokumen_kkp dk
                LEFT JOIN
                    mahasiswa m
                ON m.id_mahasiswa=dk.id_mahasiswa
                LEFT JOIN
                    kelompok k
                ON k.id_kelompok=m.id_kelompok
                LEFT JOIN
                    pembimbing_lapangan pl
                ON pl.id_kelompok=k.id_kelompok
                LEFT JOIN
                    instansi i
                ON i.id_instansi=pl.id_instansi
                WHERE dk.tahun='$tahun'
            ";
        }

        $hasil = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
        return $hasil;
    }

    public function queryCountByTahun()
    {
        $sql = "
        SELECT dk.tahun, COUNT(*) as jumlah FROM dokumen_kkp dk 
        RIGHT JOIN memvalidasi_dokumen_kkp mk ON dk.id_dokumen_kkp=mk.id_dokumen_kkp 
        WHERE mk.Id_status_validasi=1 AND dk.tahun > (YEAR(NOW())-3)
        GROUP BY dk.tahun
        ORDER BY dk.tahun DESC
        ";

        $result = $this->konek->execute()->query($sql)->fetchAll();
        return $result;
    }

    function __destruct()
    {
    }
}

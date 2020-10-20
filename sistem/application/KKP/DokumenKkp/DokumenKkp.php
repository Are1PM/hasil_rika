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
        $this->file_bab_I = $file_bab_Iile;
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
        $sql = "SELECT * FROM dokumen_kkp d, mahasiswa m where m.id_mahasiswa=d.id_mahasiswa";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);

        return $query;
    }

    public function queryMenampilkanDokumenPermahasiswa()
    {
        $id_mahasiswa = $_SESSION['id_mahasiswa'];

        $sql = "SELECT * FROM mahasiswa m, kelompok k, status_kelompok s,dosen ds, pembimbing_lapangan pl,instansi i where i.id_instansi=pl.id_instansi AND pl.id_kelompok=k.id_kelompok AND ds.id_dosen=k.id_dosen AND s.id_status_kelompok=m.id_status_kelompok AND k.id_kelompok=m.id_kelompok AND m.id_mahasiswa='$id_mahasiswa'";
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



    function __destruct()
    {
    }
}

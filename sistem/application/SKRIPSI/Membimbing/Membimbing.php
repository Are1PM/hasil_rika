<?php

class Membimbing
{
    public
        $id_mahasiswa,
        $id_dosen,
        $id_status_dosen_pembimbing;


    function getIdMahasiswa()
    {
        return $this->id_mahasiswa;
    }

    function getIdDosen()
    {
        return $this->id_dosen;
    }

    function getIdStatusDosenPembimbing()
    {
        return $this->id_status_dosen_pembimbing;
    }

    function setIdDosen($id_dosen)
    {
        $this->id_dosen = $id_dosen;
    }

    function setIdStatusDosenPembimbing($id_status)
    {
        $this->id_status_dosen_pembimbing = $id_status;
    }


    // ============== SUDAH DI PERBAIKI =============================
    // ============== SUDAH DI PERBAIKI =============================
    public function queryMelihatMembimbing()
    {
        $id_mahasiswa = $_SESSION['id_mahasiswa'];

        if ($_SESSION['hak_akses'] == "mahasiswa") {
            $sql = "SELECT * FROM membimbing mb
                LEFT JOIN dosen ds ON ds.id_dosen=mb.id_dosen 
                LEFT JOIN bimbingan b ON b.id_bimbingan=mb.id_bimbingan 
                LEFT JOIN mahasiswa m ON b.id_mahasiswa=m.id_mahasiswa
                LEFT JOIN status_dosen_pembimbing sdp ON mb.Id_status_dosen_pembimbing=sdp.Id_status_dosen_pembimbing
                WHERE b.id_mahasiswa='$id_mahasiswa'
                ORDER BY b.id_bimbingan ASC
            ";
        } else {
            $sql = "SELECT * FROM membimbing mb
            LEFT JOIN dosen ds ON ds.id_dosen=mb.id_dosen 
            LEFT JOIN bimbingan b ON b.id_bimbingan=mb.id_bimbingan 
            LEFT JOIN mahasiswa m ON b.id_mahasiswa=m.id_mahasiswa
            LEFT JOIN status_dosen_pembimbing sdp ON mb.Id_status_dosen_pembimbing=sdp.Id_status_dosen_pembimbing
            ORDER BY b.id_bimbingan ASC
            ";
        }
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);

        return $query;
    }


    // ============== SUDAH DI PERBAIKI =============================
    // ============== SUDAH DI PERBAIKI =============================
    public function queryMencariMembimbing($id, $id_dsn)
    {
        $id_bimbingan = $id;
        $id_dosen = $id_dsn;
        // print_r($id_dosen);
        // die;

        $sql = "
        SELECT * FROM membimbing mb
        LEFT JOIN dosen ds ON ds.id_dosen=mb.id_dosen 
        LEFT JOIN bimbingan b ON b.id_bimbingan=mb.id_bimbingan 
        LEFT JOIN mahasiswa m ON b.id_mahasiswa=m.id_mahasiswa
        LEFT JOIN status_dosen_pembimbing sdp ON mb.Id_status_dosen_pembimbing=sdp.Id_status_dosen_pembimbing
        WHERE mb.id_bimbingan='$id_bimbingan' AND mb.id_dosen='$id_dosen'
        ";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);


        return $query;
    }

    // ============== SUDAH DI PERBAIKI =============================
    // ============== SUDAH DI PERBAIKI =============================
    public function queryMencariDosen()
    {
        $status = $this->getIdStatusDosenPembimbing();
        if ($_SESSION['hak_akses'] == "mahasiswa") {
            $id_mahasiswa = $_SESSION['id_mahasiswa'];
        } else {
            $id_mahasiswa = $this->getIdMahasiswa();
        }

        $sql = "
        SELECT * FROM 
        bimbingan b
        LEFT JOIN  membimbing bm 
        ON b.id_bimbingan=bm.id_bimbingan
        LEFT JOIN dosen d
        ON bm.id_dosen=d.id_dosen
        WHERE b.id_mahasiswa='$id_mahasiswa' AND bm.Id_status_dosen_pembimbing='$status'
        ";

        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);

        return $query;
    }


    // ============== SUDAH DI PERBAIKI =============================
    // ============== SUDAH DI PERBAIKI =============================
    public function queryMemasukkanMembimbing()
    {
        $id_mahasiswa        = $this->getIdMahasiswa();
        $id_dosen        = $this->getIdDosen();
        $id_status_dosen_pembimbing   = $this->getIdStatusDosenPembimbing();

        // print_r($id_status_dosen_pembimbing);
        // die;

        $con = $this->konek->execute();
        $sql_cari = "SELECT id_bimbingan,count(*) ada FROM bimbingan WHERE id_mahasiswa='$id_mahasiswa'";
        $hasil = $con->query($sql_cari)->fetch(PDO::FETCH_OBJ);
        // print_r($hasil);
        // die;
        if ($hasil->ada == 0) {

            $sql = "INSERT INTO bimbingan values (NULL,'$id_mahasiswa','-',YEAR(NOW()),'','',NOW())";
            $exe = $con->exec($sql);

            $last_id = $con->lastInsertId();

            $sql = "INSERT INTO membimbing (id_dosen,Id_status_dosen_pembimbing,id_bimbingan) values ('$id_dosen','$id_status_dosen_pembimbing','$last_id');";
        } else {
            // print_r($id_status_dosen_pembimbing);
            // die;
            $sql = "INSERT INTO membimbing (id_dosen,Id_status_dosen_pembimbing,id_bimbingan) values ('$id_dosen','$id_status_dosen_pembimbing','$hasil->id_bimbingan');";
        }
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
                                <a href="?rik=data-dosen-pembimbing"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMengubahMembimbing()
    {
        $id_mahasiswa        = $this->getIdMahasiswa();
        $id_dosen        = $this->getIdDosen();
        $id_status_dosen_pembimbing        = $this->getIdStatusDosenPembimbing();


        $sql = "UPDATE membimbing SET id_dosen='$id_dosen',id_status_dosen_pembimbing='$id_status_dosen_pembimbing' where id_bimbingan IN (SELECT id_bimbingan FROM bimbingan WHERE id_mahasiswa='$id_mahasiswa')";
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
                                <a href="?rik=data-dosen-pembimbing"><button class="btn btn-info">Lihat Data</button></a>
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

    // ============== SUDAH DI PERBAIKI =============================
    // ============== SUDAH DI PERBAIKI =============================
    public function queryMenghapusMembimbing($id)
    {
        $id_bimbingan = $id;
        $id_status = $this->getIdStatusDosenPembimbing();

        $sql = "DELETE from membimbing where id_bimbingan='$id_bimbingan' AND Id_status_dosen_pembimbing='$id_status' ";
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
                                Berhasil dihapus 
                            </div>
                            <br>
                              <div class="form-group">
                                <a href="?rik=data-dosen-pembimbing"><button class="btn btn-info">Lihat Data</button></a>
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



    function __destruct()
    {
    }
}

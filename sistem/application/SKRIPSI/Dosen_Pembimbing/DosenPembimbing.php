<?php

class DosenPembimbing
{
    public
        $id_mahasiswa,
        $id_dosen,
        $id_status_dosen_pembimbing,
        $id_dosen_pembimbing;

    function getIdDosenPembimbing()
    {
        return $this->id_dosen_pembimbing;
    }

    function getIdMahasiswa()
    {
        return $this->id_mahasiswa;
    }

    function getIdDosen()
    {
        return $this->id_dosen;
    }

    function getStatusPembimbing()
    {
        return $this->id_status_dosen_pembimbing;
    }


    function setIdDosenPembimbing($id_dosen_pembimbing)
    {
        $this->id_dosen_pembimbing = $id_dosen_pembimbing;
    }

    function setIdDosen($id_dosen)
    {
        $this->id_dosen = $id_dosen;
    }
    function setIdStatusDosenPembimbing($id_status_dosen_pembimbing)
    {
        $this->id_status_dosen_pembimbing = $id_status_dosen_pembimbing;
    }

    // ============== SUDAH DI PERBAIKI =============================
    // ============== SUDAH DI PERBAIKI =============================
    public function queryMelihatDosenPembimbing()
    {
        $id_mahasiswa = $_SESSION['id_mahasiswa'];

        if ($_SESSION['hak_akses'] == "mahasiswa") {
            $sql = "SELECT * FROM dosen_pembimbing dp
            LEFT JOIN dosen ds ON ds.id_dosen=dp.id_dosen 
            LEFT JOIN bimbingan b ON b.Id_dosen_pembimbing=dp.Id_dosen_pembimbing 
            LEFT JOIN status_dosen_pembimbing sdp ON dp.Id_status_dosen_pembimbing=sdp.Id_status_dosen_pembimbning
            WHERE b.id_mahasiswa='$id_mahasiswa'
            ";
        } else {
            $sql = "SELECT * FROM dosen_pembimbing dp
            LEFT JOIN dosen ds ON ds.id_dosen=dp.id_dosen 
            LEFT JOIN bimbingan b ON b.Id_dosen_pembimbing=dp.Id_dosen_pembimbing 
            LEFT JOIN status_dosen_pembimbing sdp ON dp.Id_status_dosen_pembimbing=sdp.Id_status_dosen_pembimbning";
        }
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);

        return $query;
    }


    // ============== SUDAH DI PERBAIKI =============================
    // ============== SUDAH DI PERBAIKI =============================
    public function queryMencariDosenPembimbing($id)
    {
        $id_dosen_pembimbing = $id;

        $sql = "
        SELECT * FROM dosen_pembimbing dp
        LEFT JOIN dosen ds ON ds.id_dosen=dp.id_dosen 
        LEFT JOIN bimbingan b ON b.Id_dosen_pembimbing=dp.Id_dosen_pembimbing 
        LEFT JOIN status_dosen_pembimbing sdp ON dp.Id_status_dosen_pembimbing=sdp.Id_status_dosen_pembimbning
        WHERE dp.id_dosen_pembimbing='$id_dosen_pembimbing'
        ";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);

        return $query;
    }

    // ============== SUDAH DI PERBAIKI =============================
    // ============== SUDAH DI PERBAIKI =============================
    public function queryMencariDosen()
    {
        $status = $this->getStatusPembimbing();
        if ($_SESSION['hak_akses'] == "mahasiswa") {

            $id_mahasiswa = $_SESSION['id_mahasiswa'];
            $sql = "
                SELECT * FROM 
                bimbingan b
                LEFT JOIN  dosen_pembimbing dp 
                ON b.Id_dosen_pembimbing=dp.Id_dosen_pembimbing
                LEFT JOIN dosen d
                ON dp.id_dosen=d.id_dosen
                WHERE b.id_mahasiswa='$id_mahasiswa' AND dp.Id_status_dosen_pembimbing='$status'
                ";
        } else {
            $id_mahasiswa = $this->getIdMahasiswa();
            $sql = "
                SELECT * FROM 
                bimbingan b
                LEFT JOIN  dosen_pembimbing dp 
                ON b.Id_dosen_pembimbing=dp.Id_dosen_pembimbing
                LEFT JOIN dosen d
                ON dp.id_dosen=d.id_dosen
                WHERE b.id_mahasiswa='$id_mahasiswa' AND dp.Id_status_dosen_pembimbing='$status'
                ";
        }

        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);
        // if ($status == '2') {
        //     var_dump($query);
        //     die;
        // }

        return $query;
    }


    // ============== SUDAH DI PERBAIKI =============================
    // ============== SUDAH DI PERBAIKI =============================
    public function queryMemasukkanDosenPembimbing()
    {
        $id_mahasiswa        = $this->getIdMahasiswa();
        $id_dosen        = $this->getIdDosen();
        $id_status_dosen_pembimbing        = $this->getStatusPembimbing();
        $con = $this->konek->execute();

        $sql = "INSERT INTO dosen_pembimbing (id_dosen,Id_status_dosen_pembimbing) values('$id_dosen','$id_status_dosen_pembimbing');";
        $exe = $con->exec($sql);

        $last_id = $con->lastInsertId();

        $sql = "INSERT INTO bimbingan values (NULL,'$id_mahasiswa','-',YEAR(NOW()),'','',NOW(),'$last_id')";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        // var_dump($last_id);
        // var_dump($proses);
        // print_r($con->errorInfo());
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

    public function queryMengubahDosenPembimbing()
    {
        $id_bimbingan        = $this->getIdBimbingan();
        $id_dosen        = $this->getIdDosen();
        $id_dosen_pembimbing = $this->getIdDosenPembimbing();
        $id_status_dosen_pembimbing        = $this->getIdStatusDosenPembimbing();


        $sql = "UPDATE dosen_pembimbing SET id_dosen='$id_dosen',id_upload='$id_bimbingan',id_status_dosen_pembimbing='$id_status_dosen_pembimbing' where id_dosen_pembimbing='$id_dosen_pembimbing'";
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
    public function queryMenghapusDosenPembimbing()
    {
        $id_dosen_pembimbing = $this->getIdDosenPembimbing();

        $sql = "DELETE from dosen_pembimbing where id_dosen_pembimbing='$id_dosen_pembimbing'";
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

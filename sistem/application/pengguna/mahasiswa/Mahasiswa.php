<?php

class mahasiswa
{
    public $id_mahasiswa,
        $id_kelompok,
        $id_status_kelompok,
        $nama_mahasiswa,
        $angkatan,
        $username,
        $password,
        $email,
        $number_handphone;

    function getIdMahasiswa()
    {
        return $this->id_mahasiswa;
    }
    function getIdKelompok()
    {
        return $this->id_kelompok;
    }

    function getIdStatusKelompok()
    {
        return $this->id_status_kelompok;
    }

    function getNama()
    {
        return $this->nama_mahasiswa;
    }

    function getAngkatan()
    {
        return $this->angkatan;
    }

    function getUsername()
    {
        return $this->username;
    }

    function getPassword()
    {
        return $this->password;
    }

    function getEmail()
    {
        return $this->email;
    }
    function getNumberHandphone()
    {
        return $this->number_handphone;
    }



    function setIdMahasiswa($id_mahasiswa)
    {
        $this->id_mahasiswa = $id_mahasiswa;
    }
    function setIdKelompok($id_kelompok)
    {
        $this->id_kelompok = $id_kelompok;
    }
    function setIdStatusKelompok($id_status_kelompok)
    {
        $this->id_status_kelompok = $id_status_kelompok;
    }

    function setNama($nama_mahasiswa)
    {
        $this->nama_mahasiswa = $nama_mahasiswa;
    }

    function setAngkatan($angkatan)
    {
        $this->angkatan = $angkatan;
    }

    function setUsername($username)
    {
        $this->username = $username;
    }

    function setPassword($password)
    {
        $this->password = $password;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }
    function setNumberHandphone($number_handphone)
    {
        $this->number_handphone = $number_handphone;
    }


    public function queryMelihatMahasiswa()
    {
        if (isset($_GET['r'])) {
            $sql = "SELECT * FROM mahasiswa m, kelompok k where m.id_kelompok=k.id_kelompok AND m.id_kelompok='$_GET[r]'";
        } else {
            $sql = "SELECT * FROM mahasiswa m, kelompok k where m.id_kelompok=k.id_kelompok";
        }
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);

        return $query;
    }

    public function queryMelihatMahasiswaSkripsi($id)
    {
        if ($id != "") {
            $sql = "SELECT * FROM mahasiswa WHERE id_mahasiswa='$id'";
        } else {
            $sql = "SELECT * FROM mahasiswa";
        }
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);

        return $query;
    }

    public function muchMahasiswa()
    {
        $sql = "SELECT * FROM mahasiswa where id_kelompok in ('0')";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
        return $query;
    }

    public function queryJumlahMahasiswa()
    {
        $sql = "SELECT count(id_mahasiswa) as jumlah_mahasiswa FROM mahasiswa";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);

        return $query;
    }

    public function queryMencariMahasiswa()
    {
        $id_mahasiswa   = $this->getIdMahasiswa();
        $id_kelompok   = $this->getIdKelompok();
        $nama           = $this->getNama();
        $angkatan       = $this->getAngkatan();
        $username       = $this->getUsername();

        $sql = "SELECT * FROM mahasiswa m LEFT JOIN kelompok k ON k.id_kelompok=m.id_kelompok LEFT JOIN status_kelompok sk ON sk.id_status_kelompok=m.id_status_kelompok where  m.id_mahasiswa='$id_mahasiswa' OR m.nama_mahasiswa='$nama' OR m.angkatan='$angkatan' OR m.username='$username'";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);

        return $query;
    }

    public function queryMemasukkanMahasiswa()
    {
        $id_mahasiswa   = $this->getIdMahasiswa();
        $id_kelompok  = $this->getIdKelompok();
        $id_status_kelompok = $this->getIdStatusKelompok();
        $nama          = $this->getNama();
        $angkatan      = $this->getAngkatan();
        $username      = $this->getUsername();
        $password      = $this->getPassword();
        $email         = $this->getEmail();
        $number_handphone = $this->getNumberHandphone();

        $sql = "INSERT into mahasiswa values ('$id_mahasiswa','$id_kelompok','$id_status_kelompok','$nama','$angkatan','$email','$number_handphone', '$username','$password')";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        if ($_SESSION['hak_akses'] != "") {

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
                                    <a href="?rik=data-mahasiswa&r=' . $id_kelompok . '"><button class="btn btn-info">Lihat Data</button></a>
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
        if ($proses) {
            echo '<div class="container">
                    <div id="myModal" class="modal fade" role="dialog">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content" style="position: relative; top: 4cm;">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <a href="login.php" class="btn btn-primary">Registrasi berhasil</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
        }
    }

    public function addAnggotaMahasiswa()
    {
        $id_mahasiswa  = $this->getIdMahasiswa();
        $id_kelompok  = $this->getIdKelompok();
        $id_status_kelompok = $this->getIdStatusKelompok();

        $sql = "UPDATE mahasiswa SET id_status_kelompok='$id_status_kelompok',id_kelompok='$id_kelompok' where id_mahasiswa='$id_mahasiswa'";
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
                                <a href="?rik=data-mahasiswa&r=' . $id_kelompok . '"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMengubahMahasiswa()
    {
        $id_mahasiswa  = $this->getIdMahasiswa();
        $id_kelompok  = $this->getIdKelompok();
        $id_status_kelompok = $this->getIdStatusKelompok();
        $nama          = $this->getNama();
        $angkatan      = $this->getAngkatan();
        $username      = $this->getUsername();
        $password      = $this->getPassword();
        $email         = $this->getEmail();
        $number_handphone = $this->getNumberHandphone();

        $sql = "UPDATE mahasiswa SET id_status_kelompok='$id_status_kelompok',nama_mahasiswa='$nama',angkatan='$angkatan',username='$username',password='$password',email='$email',number_handphone='$number_handphone' where id_mahasiswa='$id_mahasiswa'";
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
                                <a href="?rik=data-mahasiswa&r=' . $id_kelompok . '"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMenghapusMahasiswa()
    {
        $id_mahasiswa = $this->getIdMahasiswa();
        $id_kelompok  = $_GET['r'];

        $sql = "DELETE from mahasiswa where id_mahasiswa='$id_mahasiswa'";
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
                                <a href="?rik=data-mahasiswa&r=' . $id_kelompok . '"><button class="btn btn-info">Kembali</button></a>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>';
        }
    }

    public function queryCekLogin($username, $password)
    {
        $sql = "SELECT * FROM mahasiswa where username='$username' AND password='$password'";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);

        return $query;
    }

    function __destruct()
    {
    }
}

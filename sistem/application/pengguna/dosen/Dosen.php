<?php

class dosen
{
    public $id_dosen,
        $nama,
        $number_handphone,
        $email,
        $username,
        $password;

    function getIdDosen()
    {
        return $this->id_dosen;
    }

    function getNama()
    {
        return $this->nama;
    }

    function getNumberHandphone()
    {
        return $this->number_handphone;
    }
    function getEmail()
    {
        return $this->email;
    }
    function getUsername()
    {
        return $this->username;
    }

    function getPassword()
    {
        return $this->password;
    }



    function setIdDosen($id_dosen)
    {
        $this->id_dosen = $id_dosen;
    }

    function setNama($nama)
    {
        $this->nama = $nama;
    }

    function setNumberHandphone($number_handphone)
    {
        $this->number_handphone = $number_handphone;
    }

    function setEmail($email)
    {
        $this->email = $email;
    }

    function setUsername($username)
    {
        $this->username = $username;
    }

    function setPassword($password)
    {
        $this->password = $password;
    }


    public function queryMelihatDosen()
    {
        $sql = "SELECT * FROM dosen";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);

        return $query;
    }

    public function queryMencariDosen()
    {
        $id_dosen       = $this->getIdDosen();
        $nama           = $this->getNama();
        $username       = $this->getUsername();

        $sql = "SELECT * FROM dosen where id_dosen='$id_dosen' OR nama='$nama' OR username='$username'";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);

        return $query;
    }

    public function queryMemasukkanDosen()
    {
        $id_dosen           = $this->getIdDosen();
        $nama               = $this->getNama();
        $number_handphone   = $this->getNumberHandphone();
        $email              = $this->getEmail();
        $username           = $this->getUsername();
        $password           = $this->getPassword();

        $sql = "INSERT into dosen values ('$id_dosen','$nama','$number_handphone','$email','$username','$password')";
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
                                <a href="?rik=data-dosen"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMengubahDosen()
    {
        $id_dosen           = $this->getIdDosen();
        $nama               = $this->getNama();
        $number_handphone   = $this->getNumberHandphone();
        $email              = $this->getEmail();
        $username           = $this->getUsername();
        $password           = $this->getPassword();

        $sql = "UPDATE dosen SET nama='$nama',number_handphone='$number_handphone',email='$email',username='$username',password='$password' where id_dosen='$id_dosen'";
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
                                <a href="?rik=data-dosen"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMenghapusDosen()
    {
        $id_dosen = $this->getIdDosen();

        $sql = "DELETE from dosen where id_dosen='$id_dosen'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        if ($proses) {
            echo "berhasil di hapus";
        } else {
            echo "Gagal";
        }
    }

    public function queryCekLogin($username, $password)
    {
        $sql = "SELECT * FROM dosen where username='$username' AND password='$password'";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);

        return $query;
    }

    function __destruct()
    {
    }
}

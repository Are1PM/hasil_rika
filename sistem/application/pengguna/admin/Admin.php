<?php

class Admin
{
    public $id_admin,
        $nama,
        $number_handphone,
        $email,
        $username,
        $password;

    function getIdAdmin()
    {
        return $this->id_admin;
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






    function setIdAdmin($id_admin)
    {
        $this->id_admin = $id_admin;
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



    public function queryMelihatAdmin()
    {
        $sql = "SELECT * FROM admin";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);

        return $query;
    }

    public function queryMencariAdmin()
    {
        $id_admin   = $this->getIdAdmin();

        $sql = "SELECT * FROM Admin where id_admin='$id_admin'";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);

        return $query;
    }

    public function queryMemasukkanAdmin()
    {
        $nama               = $this->getNama();
        $number_handphone   = $this->getNumberHandphone();
        $email              = $this->getEmail();
        $username           = $this->getUsername();
        $password           = $this->getPassword();

        $sql = "INSERT into Admin values (NULL,'$nama','$number_handphone','$email','$username','$password')";
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
                                <a href="?rik=data-admin"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMengubahAdmin()
    {
        $id_admin           = $this->getIdAdmin();
        $nama               = $this->getNama();
        $number_handphone   = $this->getNumberHandphone();
        $email              = $this->getEmail();
        $username           = $this->getUsername();
        $password           = $this->getPassword();

        $sql = "UPDATE Admin SET nama='$nama',number_handphone='$number_handphone',email='$email',username='$username',password='$password' where id_admin='$id_admin'";
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
                                <a href="?rik=data-admin"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMenghapusAdmin()
    {
        $id_admin = $this->getIdAdmin();

        $sql = "DELETE from Admin where id_admin='$id_admin'";
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
        $sql = "SELECT * FROM admin where username='$username' AND password='$password'";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);

        return $query;
    }

    function __destruct()
    {
    }
}

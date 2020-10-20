<?php

class DosenPembimbing
{
    public $id_dosen_pembimbing,
           $id_dosen,
           $id_status_dosen_pembimbing;

    function getIdDosenPembimbing()
    {
        return $this->id_dosen_pembimbing;
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
        $this->id_status_dosen_pembimbing=$id_status_dosen_pembimbing;
    }
    
    
    public function queryMelihatDosenPembimbing()
    {
        $id_mahasiswa=$_SESSION['id_mahasiswa'];
        if ($_SESSION['hak_akses']=="mahasiswa") {
            $sql = "SELECT * from dosen_pembimbing p, dosen d, bimbingan m where m.id_mahasiswa='$id_mahasiswa' AND d.id_dosen=p.id_dosen AND m.id_bimbingan=p.id_upload";
        }else{
            $sql = "SELECT * from dosen_pembimbing p, dosen d, bimbingan m where d.id_dosen=p.id_dosen AND m.id_bimbingan=p.id_upload";
        }
        
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);

        return $query;
    }

    public function queryMencariDosenPembimbing()
    {
        $id_dosen_pembimbing = $this->getIdDosenPembimbing();

        $sql = "SELECT * FROM dosen_pembimbing p, dosen d, bimbingan m where p.id_dosen_pembimbing='$id_dosen_pembimbing' AND d.id_dosen=p.id_dosen AND m.id_bimbingan=p.id_upload";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);

        return $query;
    }

    public function queryMencariDosen()
    {
        $id_status_dosen_pembimbing = $this->getIdStatusDosenPembimbing();
        $id_bimbingan        = $this->getIdBimbingan();


        $sql = "SELECT * FROM dosen_pembimbing p, dosen d where p.status_pembimbing='$id_status_dosen_pembimbing' AND d.id_dosen=p.id_dosen AND p.id_upload='$id_bimbingan'";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);

        return $query;
    }
    

    public function queryMemasukkanDosenPembimbing()
    {
        $id_bimbingan        = $this->getIdBimbingan();
        $id_dosen        = $this->getIdDosen();
        $id_status_dosen_pembimbing        = $this->getIdStatusDosenPembimbing();


       $sql = "INSERT into dosen_pembimbing values (NULL,'$id_dosen','$id_bimbingan','$id_status_dosen_pembimbing')";
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
    { }
}

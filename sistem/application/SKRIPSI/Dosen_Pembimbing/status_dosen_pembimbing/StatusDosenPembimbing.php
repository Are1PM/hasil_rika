<?php

class StatusDosenPembimbing
{
    public $id_status_dosen_pembimbing,
        $status_dosen_pembimbing;

    function getIdStatusDosenPembimbing()
    {
        return $this->id_status_dosen_pembimbing;
    }

    function getStatusDosenPembimbing()
    {
        return $this->status_dosen_pembimbing;
    }



    function setIdStatusDosenPembimbing($id_status_dosen_pembimbing)
    {
        $this->id_status_dosen_pembimbing = $id_status_dosen_pembimbing;
    }

    function setStatusDosenPembimbing($status_dosen_pembimbing)
    {
        $this->status_dosen_pembimbing = $status_dosen_pembimbing;
    }





    public function queryMelihatStatusDosenPembimbing()
    {
        $sql = "SELECT * FROM status_dosen_pembimbing";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);

        return $query;
    }

    public function queryMencariStatusDosenPembimbing()
    {
        $id_status_dosen_pembimbing   = $this->getIdStatusDosenPembimbing();

        $sql = "SELECT * FROM status_dosen_pembimbing where id_status_dosen_pembimbing='$id_status_dosen_pembimbing'";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);

        return $query;
    }

    public function queryMemasukkanStatusDosenPembimbing()
    {
        $status_dosen_pembimbing     = $this->getStatusDosenPembimbing();



        $sql = "INSERT into status_dosen_pembimbing values (NULL,'$status_dosen_pembimbing')";
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
                                <a href="?rik=data-StatusDosenPembimbing"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMengubahStatusDosenPembimbing()
    {
        $id_status_dosen_pembimbing  = $this->getIdStatusDosenPembimbing();
        $status_dosen_pembimbing = $this->getStatusDosenPembimbing();



        $sql = "UPDATE status_dosen_pembimbing SET status_dosen_pembimbing='$status_dosen_pembimbing' where id_status_dosen_pembimbing='$id_status_dosen_pembimbing'";
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
                                <a href="?rik=data-StatusDosenPembimbing"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMenghapusStatusDosenPembimbing()
    {
        $id_status_dosen_pembimbing = $this->getIdStatusDosenPembimbing();

        $sql = "DELETE from status_dosen_pembimbing where id_status_dosen_pembimbing='$id_status_dosen_pembimbing'";
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

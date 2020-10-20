<?php

class StatusKelompok
{
    public $id_status_kelompok,
           $status_kelompok;
           
    function getIdStatusKelompok()
    {
        return $this->id_status_kelompok;
    }

    function getStatusKelompok()
    {
        return $this->status_kelompok;
    }
   

    
    function setIdStatusKelompok($id_status_kelompok)
    {
        $this->id_status_kelompok = $id_status_kelompok;
    }

    function setStatusKelompok($status_kelompok)
    {
        $this->status_kelompok = $status_kelompok;
    }
    
     

   

    public function queryMelihatStatusKelompok()
    {
        $sql= "SELECT * FROM status_kelompok where id_status_kelompok not in ('0')";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
        
        return $query;
    }

    public function queryMencariStatusKelompok()
    {
        $id_instansi   = $this->getIdInstansi();

        $sql= "SELECT * FROM status_kelompok where id_status_kelompok='$id_status_kelompok'";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);
        
        return $query;
    }

    public function queryMemasukkanStatusKelompok()
    {
        $status_kelompok     = $this->getStatusKelompok();

         
       
        $sql = "INSERT into status_kelompok values (NULL,'$status_kelompok')";
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
                                <a href="?rik=data-status-kelompok"><button class="btn btn-info">Lihat Data</button></a>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>';
        }else{
            echo '<br><div class="alert alert-danger text-center">
                Gagal
            </div>';
        }
    }

    public function queryMengubahStatusKelompok()
    {
        $id_status_kelompok  = $this->getIdStatusKelompok();
        $status_kelompok = $this->getStatusKelompok();
       
        

        $sql = "UPDATE status_kelompok SET status_kelompok='$status_kelompok' where id_status_kelompok='$id_status_kelompok'";
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
                                <a href="?rik=data-status-kelompok"><button class="btn btn-info">Lihat Data</button></a>
                              </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>';
        }else{
            echo "Gagal";
        }
    }

    public function queryMenghapusStatusKelompok()
    {
        $id_status_kelompok = $this->getIdInstansi();

        $sql = "DELETE from status_kelompok where id_status_kelompok='$id_status_kelompok'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        if ($proses) {
            echo "berhasil di hapus";
        }else{
            echo "Gagal";
        }

    }

 

    function __destruct()
    {

    }


}

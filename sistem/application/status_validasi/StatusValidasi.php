<?php

class StatusValidasi
{
    public $id_status_validasi,
           $status_valid;


           
    function getIdStatusValidasi()
    {
        return $this->id_status_validasi;
    }

    function getStatusValidasig()
    {
        return $this->status_valid;
    }
   

    
    function setIdStatusValidasi($id_status_validasi)
    {
        $this->id_status_validasi = $id_status_validasi;
    }

    function setStatusValidasi($status_valid)
    {
        $this->status_valid = $status_valid;
    }
    
     

   

    public function queryMelihatStatusValidasi()
    {
        $sql= "SELECT * FROM status_valid";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
        
        return $query;
    }

    public function queryMencariStatusValidasi()
    {
        $id_status_validasi   = $this->getIdStatusValidasi();

        $sql= "SELECT * FROM status_validasi where id_status_validasi='$id_status_validasi'";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);
        
        return $query;
    }

    public function queryMemasukkanStatusValidasi()
    {
        $status_validasi    = $this->getStatusDosenValidasi();

         
       
        $sql = "INSERT into status_dosen_Validasi values (NULL,'$status_validasi')";
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
                                <a href="?rik=data-StatusValidasi"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMengubahStatusValidasi()
    {
        $id_status_validasi  = $this->getIdStatusValidasi();
        $status_validasi = $this->getStatusValidasig();
       
        

        $sql = "UPDATE status_validasi SET status_validasi='$status_valid' where id_status_validasi='$id_status_validasi'";
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
                                <a href="?rik=data-StatusValidasi"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMenghapusStatusValidasi()
    {
        $id_status_validasi = $this->getIdStatusValidasi();

        $sql = "DELETE from status_validasi where id_status_validasi='$id_status_validasi'";
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

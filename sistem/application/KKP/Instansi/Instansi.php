<?php

class Instansi
{
    public $id_instansi,
           $nama_instansi,
           $alamat,
           $kontak;
           
    function getIdInstansi()
    {
        return $this->id_instansi;
    }

    function getNamaInstansi()
    {
        return $this->nama_instansi;
    }
    function getAlamat()
    {
        return $this->alamat;
    }

    function getKontak()
    {
        return $this->kontak;
    }
    

    
    function setIdInstansi($id_instansi)
    {
        $this->id_instansi = $id_instansi;
    }

    function setNamaInstansi($nama_instansi)
    {
        $this->nama_instansi = $nama_instansi;
    }
    function setAlamat($alamat)
    {
        $this->alamat = $alamat;
    }

    function setKontak($kontak)
    {
        $this->kontak = $kontak;
    }
     

   

    public function queryMelihatInstansi()
    {
        $sql= "SELECT * FROM instansi";
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
        
        return $query;
    }

    public function queryMencariInstansi()
    {
        $id_instansi   = $this->getIdInstansi();

        $sql= "SELECT * FROM instansi where id_instansi='$id_instansi'";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);
        
        return $query;
    }

    public function queryMemasukkanInstansi()
    {
        $nama_instansi      = $this->getNamaInstansi();
        $alamat             = $this->getAlamat();
        $kontak             = $this->getKontak();
         
       
        $sql = "INSERT into instansi values (NULL,'$nama_instansi','$alamat','$kontak')";
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
                                <a href="?rik=data-Instansi"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMengubahInstansi()
    {
        $id_instansi  = $this->getIdInstansi();
        $nama_instansi  = $this->getNamaInstansi();
        $alamat          = $this->getAlamat();
        $kontak   = $this->getKontak();
        

        $sql = "UPDATE instansi SET nama_instansi='$nama_instansi',alamat='$alamat',kontak='$kontak' where id_instansi='$id_instansi'";
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
                                <a href="?rik=data-Instansi"><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMenghapusInstansi()
    {
        $id_instansi = $this->getIdInstansi();

        $sql = "DELETE from instansi where id_instansi='$id_instansi'";
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

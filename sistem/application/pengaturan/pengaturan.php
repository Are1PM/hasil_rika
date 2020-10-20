<?php

class Pengaturan
{
    function __construct()
    {
        $this->konek = new KoneksiBasisData();
    }
   
    function TampilkanPengaturan()
    {
        $sql = "SELECT * from pengaturan where id=1";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);

        return $query;
    }

    function MengubahPengaturan($title='',$judul_top_bar='',$singkatan_apps='',$catatan_kaki='')
    {
        $id=1;
        $sql = "UPDATE pengaturan SET title='$title',judul_top_bar='$judul_top_bar',singkatan_apps='$singkatan_apps',catatan_kaki='$catatan_kaki' where id='$id'";

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
                                <a href="?rik=ubah-pengaturan"><button class="btn btn-info">Lihat Data</button></a>
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

}

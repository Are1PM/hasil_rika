<?php

class DokumenSkripsi
{
    public $id_dokumen_skripsi,
        $id_bimbingan,
        $file_abstrak_indonesia,
        $file_abstrak_inggris,
        $file_bab_I,
        $file_full_skripsi,
        $file_full_proposal;

    function getIdDokumenSkripsi()
    {
        return $this->id_dokumen_skripsi;
    }

    function getIdBimbingan()
    {
        return $this->id_bimbingan;
    }

    function getFileAbstrakIndonesia()
    {
        return $this->file_abstrak_indonesia;
    }

    function getFileAbstrakInggris()
    {
        return $this->file_abstrak_inggris;
    }
    function getFileBabI()
    {
        return $this->file_bab_I;
    }
    function getFileFuellSkripsi()
    {
        return $this->file_full_skripsi;
    }
    function getFileFullProposal()
    {
        return $this->file_full_proposal;
    }






    function setIdDokumenSkripsi($id_dokumen_skripsi)
    {
        $this->id_dokumen_skripsi = $id_dokumen_skripsi;
    }

    function setIdBimbingan($id_bimbingan)
    {
        $this->id_bimbingan = $id_bimbingan;
    }

    function setFileAbstrakIndonesia($file_abstrak_indonesia)
    {
        $this->file_abstrak_indonesia = $file_abstrak_indonesia;
    }

    function setFileAbstrakInggris($file_abstrak_inggris)
    {
        $this->file_abstrak_inggris = $file_abstrak_inggris;
    }
    function setFileBabI($file_bab_I)
    {
        $this->file_bab_I = $file_bab_I;
    }
    function setFileFullSkripsi($file_full_skripsi)
    {
        $this->file_full_skripsi = $file_full_skripsi;
    }
    function setFileFullProposal($file_full_proposal)
    {
        $this->file_full_proposal = $file_full_proposal;
    }


    // ============== SUDAH DI PERBAIKI =============================
    // ============== SUDAH DI PERBAIKI =============================
    public function queryMelihatDokumen()
    {

        if ($_SESSION['hak_akses'] == 'mahasiswa') {
            $id_mahasiwa = $_SESSION['id_mahasiswa'];

            $sql = "
            SELECT * FROM
                mahasiswa m 
            INNER JOIN
                bimbingan b
            ON m.id_mahasiswa=b.id_mahasiswa
            WHERE m.id_mahasiswa='$id_mahasiwa'";
        } else {

            $sql = "SELECT * FROM dokumen_skripsi ds, bimbingan b,mahasiswa m where b.id_bimbingan=ds.id_bimbingan AND m.id_mahasiswa=b.id_mahasiswa";
        }
        $query = $this->konek->execute()->query($sql)->fetchAll(PDO::FETCH_OBJ);
        // print_r($id_mahasiwa);
        // die;
        return $query;
    }

    public function queryJumlahDokumen()
    {
        $sql = "SELECT count(id_dokumen_skripsi) as jumlah_skripsi FROM dokumen_skripsi";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);

        return $query;
    }

    // ============== SUDAH DI PERBAIKI =============================
    // ============== SUDAH DI PERBAIKI =============================
    public function queryMencariDokumen()
    {
        $id_bimbingan = $this->getIdBimbingan();

        $sql = "
        SELECT * FROM 
        bimbingan b
        LEFT JOIN dokumen_skripsi dsk
        ON b.id_bimbingan=dsk.id_bimbingan
        WHERE b.id_bimbingan='$id_bimbingan' AND b.judul<>'-'
        ";

        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);

        return $query;
    }

    public function queryMencariDokumenabc()
    {
        $id_dokumen_skripsi   = $this->getIdDokumenSkripsi();

        $sql = "SELECT * FROM dokumen_skripsi d,bimbingan m, mahasiswa mh where d.id_dokumen_skripsi='$id_dokumen_skripsi' AND m.id_bimbingan=d.id_upload AND mh.id_mahasiswa=m.id_mahasiswa";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);

        return $query;
    }

    public function queryMemasukkanDokumen()
    {
        $id_bimbingan               = $this->getIdBimbingan();
        $file_abstrak_inggris       = $this->getFileAbstrakInggris();
        $file_abstrak_indonesia     = $this->getFileAbstrakIndonesia();
        $file_bab_I                 = $this->getFileBabI();
        $file_full_skripsi          = $this->getFileFuellSkripsi();
        $file_full_proposal         = $this->getFileFullProposal();

        $sql = "INSERT into dokumen_skripsi values (null,'$id_bimbingan','$file_abstrak_inggris','$file_abstrak_indonesia','$file_bab_I','$file_full_skripsi','$file_full_proposal')";
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
                                <a href="?rik=data-Dokumenskripsi><button class="btn btn-info">Lihat Data</button></a>
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

    public function queryMengubahDokumen()
    {
        $id_dokumen_skripsi          = $this->getIdDokumenSkripsi();
        $id_bimbingan                  = $this->getIdBimbingan();
        $file_abstrak_inggris       = $this->getFileAbstrakInggris();
        $file_abstrak_indonesia     = $this->getFileAbstrakIndonesia();
        $file_bab_I                 = $this->getFileBabI();
        $file_full_skripsi          = $this->getFileFuellSkripsi();
        $file_full_proposal         = $this->getFileFullProposal();
        // print_r($file_abstrak_inggris);
        // die;
        if ($file_abstrak_indonesia != "" && $file_abstrak_inggris != "" && $id_bimbingan != "") {
            $sql = "UPDATE dokumen_skripsi SET file_abstrak_indonesia='$file_abstrak_indonesia', file_abstrak_inggris='$file_abstrak_inggris' where id_bimbingan='$id_bimbingan'";
        } else if ($file_abstrak_indonesia != "" && $id_bimbingan != "") {
            $sql = "UPDATE dokumen_skripsi SET file_abstrak_indonesia='$file_abstrak_indonesia' where id_bimbingan='$id_bimbingan'";
        } else if ($file_abstrak_inggris != "" && $id_bimbingan != "") {
            $sql = "UPDATE dokumen_skripsi SET file_abstrak_inggris='$file_abstrak_inggris' where id_bimbingan='$id_bimbingan'";
        }

        if ($file_bab_I != "" && $id_bimbingan != "") {
            $sql = "UPDATE dokumen_skripsi SET file_bab_I='$file_bab_I' where id_bimbingan='$id_bimbingan'";
        }

        if ($file_full_skripsi != "" && $id_bimbingan != "") {
            $sql = "UPDATE dokumen_skripsi SET file_full_skripsi='$file_full_skripsi' where id_bimbingan='$id_bimbingan'";
        }

        if ($file_full_proposal != "" && $id_bimbingan != "") {
            $sql = "UPDATE dokumen_skripsi SET file_full_proposal='$file_full_proposal' where id_bimbingan='$id_bimbingan'";
        }

        //batas aja

        // if ($file_abstrak_inggris != "" and $file_abstrak_indonesia != "") {
        //     $sql = "INSERT into dokumen_skripsi values (null,'$id_bimbingan','$file_abstrak_inggris','$file_abstrak_indonesia','','','')";
        // }

        // if ($file_bab_I != "") {
        //     $sql = "UPDATE dokumen_skripsi SET file_bab_I='$file_bab_I' where id_bimbingan='$id_bimbingan'";
        // }

        // if ($file_full_skripsi != "") {
        //     $sql = "UPDATE dokumen_skripsi SET file_full_skripsi='$file_full_skripsi' where id_bimbingan='$id_bimbingan'";
        // }

        // if ($file_full_proposal != "") {
        //     $sql = "UPDATE dokumen_skripsi SET file_full_proposal='$file_full_proposal' where id_bimbingan='$id_bimbingan'";
        // }


        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();
        // print_r($proses);
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
                                Berhasil diubah 
                            </div>
                            <br>
                              <div class="form-group">
                                <a href="?rik=data-Dokumenskripsi><button class="btn btn-info">Lihat Data</button></a>
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

    public function kosongkanDataFile($id, $id_val)
    {
        $id_bimbingan = $id;
        $file_abstrak_inggris       = '';
        $file_abstrak_indonesia     = '';
        $file_bab_I                 = '';
        $file_full_skripsi          = '';
        $file_full_proposal         = '';

        $sql = "
            UPDATE dokumen_skripsi 
            SET 
                file_abstrak_indonesia='$file_abstrak_indonesia',
                file_abstrak_inggris ='$file_abstrak_inggris',
                file_bab_I = '$file_bab_I',
                file_full_skripsi = '$file_full_skripsi',
                file_full_proposal = '$file_full_proposal'
            WHERE id_bimbingan='$id_bimbingan'";

        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        $sql = "UPDATE memvalidasi_dokumen_skripsi SET Id_status_validasi='3' where id_val_skripsi='$id_val'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();
    }

    public function queryMenghapusDokumen()
    {
        $id_dokumen_skripsi = $this->getIdDokumenSkripsi();

        $sql = "DELETE from dokumen_skripsi where id_dokumen_skripsi='$id_dokumen_skripsi'";
        $prepare = $this->konek->execute()->prepare($sql);
        $proses = $prepare->execute();

        if ($proses) {
            echo "berhasil di hapus";
        } else {
            echo "Gagal";
        }
    }

    public function queryCek()
    {
        $id_bimbingan = $this->getIdBimbingan();
        $sql = "
            SELECT if(COUNT(*)>0,1,0) as data
            FROM dokumen_skripsi
            WHERE id_bimbingan = '$id_bimbingan'
        ";
        $query = $this->konek->execute()->query($sql)->fetch(PDO::FETCH_OBJ);
        return $query->data;
    }



    function __destruct()
    {
    }
}

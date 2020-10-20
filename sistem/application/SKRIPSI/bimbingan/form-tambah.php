<div class="row">
     <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Tambah Bimbingan</h1>
    </div>
    <!--end page header -->
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Tambah
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form" method="post" action="">
                            <div class="form-group">
                                <label>Judul</label>
                                <textarea name="judul" class="form-control" required="" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Abstrak Bahasa Inggris</label>
                                <textarea name="abstrak_bahasa_inggris" class="form-control" required="" rows="10"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Abstrak Bahasa indonesia</label>
                                <textarea name="abstrak_bahasa_indonesia" class="form-control" required="" rows="10"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                        </form>
                        <?php
                        if (isset($_POST['simpan'])) {
                        
                            $id_mahasiswa = $_SESSION['id_mahasiswa'];
                            $id_dosen_pembimbing = $_SESSION['id_dosen_pembimbing'];
                            $judul=$_POST['judul'];
                            $tahun=date("Y");
                            $abstrak_bahasa_inggris=$_POST['abstrak_bahasa_inggris'];
                            $abstrak_bahasa_indonesia=$_POST['abstrak_bahasa_indonesia'];
                            $tanggal_upload=date("Y-m-d");

                            $tambah = new MengelolaBimbingan('',$id_mahasiswa, $id_dosen_pembimbing, $judul, $tahun, $abstrak_bahasa_inggris, $abstrak_bahasa_indonesia, $tanggal_upload);
                            $tambah->MemasukkanBimbingan();
                            

                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
         <!-- End Form Elements -->
    </div>
</div>
<div class="row">
     <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Ubah Detail Skripsi</h1>
    </div>
    <!--end page header -->
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Ubah 
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <form role="form" method="post" action="">
                            <div class="form-group">
                               <input type="hidden" name="id_upload" value="<?= $data_UploadSkripsi->id_upload ?>">
                            </div>
                            <div class="form-group">
                                <label>Judul</label>
                                <textarea name="judul" class="form-control" id="judul" required="" rows="3"><?= $data_UploadSkripsi->judul ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Abstrak Bahasa Inggris</label>
                                <textarea name="abstrak_bahasa_inggris" id="abstrak_inggris" class="form-control" required="" rows="10"><?= $data_UploadSkripsi->abstrak_inggris ?></textarea>
                            </div>
                            <div class="form-group">
                                <label>Abstrak Bahasa indonesia</label>
                                <textarea name="abstrak_bahasa_indonesia" id="abstrak_indonesia" class="form-control" required="" rows="10"><?= $data_UploadSkripsi->abstrak_indonesia ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                        </form>
                        <?php
                        if (isset($_POST['simpan'])) {
                        
                            $id_upload=$_POST['id_upload'];
                            $judul=$_POST['judul'];
                            $abstrak_bahasa_inggris=$_POST['abstrak_bahasa_inggris'];
                            $abstrak_bahasa_indonesia=$_POST['abstrak_bahasa_indonesia'];

                            $update = new MengelolaBimbingan($id_upload,'', $judul,'', $abstrak_bahasa_inggris, $abstrak_bahasa_indonesia, '');
                            $update->queryMengubahDokumen();
                            

                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
         <!-- End Form Elements -->
    </div>
</div>
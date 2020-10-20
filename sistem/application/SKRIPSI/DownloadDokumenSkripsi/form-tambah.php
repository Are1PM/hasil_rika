<div class="row">
     <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Tambah Download Dokumen Skripsi</h1>
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
                    <div class="col-lg-6">
                        <form role="form" method="post" action="">
                            <div class="form-group">
                                <label>Id Dokumen Skripsi</label>
                                <input type="text" name="id_dokumen_skripsi" class="form-control" placeholder="Id Dokumen Skripsi" required>
                            </div>
                            <div class="form-group">
                                <label>id Dosen</label>
                                <input type="text" name="id_dosen" class="form-control" placeholder=" Id Dosen" required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Download</label>
                                <input type="date" name="tanggal_download" class="form-control" placeholder="Tanggal Download" required>
                            </div>
                
                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                        </form>
                        <?php
                        if (isset($_POST['simpan'])) {
                        
                            $id_dokumen_skripsi = $_POST['id_dokumen_skripsi'];
                            $id_dosen=$_POST['id_dosen'];
                            $tanggal_download=$_POST['tanggal_download'];
                           

                            $tambah = new MengelolaDownloadDokumenSkripsi($id_dokumen_skripsi, $id_dosen, $tanggal_download);
                            $tambah->MemasukkanDownloadDokumenSkripsi();
                            

                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
         <!-- End Form Elements -->
    </div>
</div>
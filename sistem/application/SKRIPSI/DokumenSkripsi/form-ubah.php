<div class="row">
     <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Ubah Dokumen Skripsi</h1>
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
                                <label>Id Bimbingan</label>
                                <input type="text" name="id_bimbingan" class="form-control" placeholder="Id Bimbingan" required>
                            </div>
                            <div class="form-group">
                                <label>Abstrak Bahasa Inggris</label>
                                <input type="text" name="abstrak_bahasa_inggris" class="form-control" placeholder=" Abstrak Bahasa Inggris" required>
                            </div>
                            <div class="form-group">
                                <label>Abstrak Bahasa Indonesia</label>
                                <input type="text" name="abstrak_bahasa_indonesia" class="form-control" placeholder="Abstrak Bahasa Indonesia" required>
                            </div>
                            <div class="form-group">
                                <label>File Bab I</label>
                                <input type="text" name="file_bab_I" class="form-control" placeholder="File Bab I" required>
                            </div>
                            <div class="form-group">
                                <label>File Full Skripsi</label>
                                <input type="text" name="file_full_skripsi" class="form-control" placeholder="File Full Skripsi" required>
                            </div>
                            <div class="File Full Proposal">
                                <label>Password</label>
                                <input type="text" name="file_full_proposal" class="form-control" placeholder="File FullProposal" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                        </form>
                        <?php
                        if (isset($_POST['simpan'])) {
                        
                            $id_bimbingan = $_POST['id_bimbingan'];
                            $abstrak_bahasa_inggris=$_POST['abstrak_bahasa_inggris'];
                            $abstrak_bahasa_indonesia=$_POST['abstrak_bahasa_indonesia'];
                            $file_bab_I=$_POST['file_bab_I'];
                            $file_full_skripsi=$_POST['file_full_skripsi'];
                            $file_full_proposal=$_POST['file_full_proposal'];

                            $tambah = new MengelolaDokumenskripsi($id_upload, $abstrak_bahasa_inggris, $abstrak_bahasa_indonesia, $file_bab_I, $file_full_skripsi, $file_full_proposal);
                            $tambah->MemasukkanDokumenskripsi();
                            

                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
         <!-- End Form Elements -->
    </div>
</div>
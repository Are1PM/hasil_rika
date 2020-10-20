<div class="row">
     <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Ubah Validasi Dokumen Skripsi</h1>
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
                                <label>Id Admin</label>
                                <input type="text" name="id_admin" class="form-control" placeholder=" Id Admin" required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Validasi </label>
                                <input type="date" name="tanggal_validasi" class="form-control" placeholder="Tanggal Validasi" required>
                            </div>
                            <div class="form-group">
                                <label>Id Status Validasi</label>
                                <input type="text" name="id_status_validasi" class="form-control" placeholder="Id Status Validasi" required>
                            </div>
                            <div class="form-group">
                                <label>Keterangan</label>
                                <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" required>
                            </div>
                            
                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                        </form>
                        <?php
                        if (isset($_POST['simpan'])) {
                        
                            $id_dokumen_skripsi = $_POST['id_dokumen_skripsi'];
                            $id_admin=$_POST['id_admin'];
                            $tanggal_validasi=$_POST['tanggal_validasi'];
                            $id_status_validasi=$_POST['id_status_validasi'];
                            $keterangan=$_POST['keterangan'];
                            

                            $tambah = new MengelolaValidasiDokumenSkripsi($id_dokumen_skripsi, $id_admin, $tanggal_validasi, $id_status_validasi, $keterangan);
                            $tambah->MemasukkanValidasiDokumenSkripsi();
                            

                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
         <!-- End Form Elements -->
    </div>
</div>
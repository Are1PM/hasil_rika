<div class="row">
     <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Ubah Status Validasi</h1>
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
                    <div class="col-lg-6">
                        <form role="form" method="post" action="">
                            <div class="form-group">
                                <label>Status Validasi</label>
                                <input type="text" name="status_validasi" class="form-control" placeholder="Status Validasi" required>
                            </div>
                           
                            
                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                        </form>
                        <?php
                        if (isset($_POST['simpan'])) {
                        
                            $id_status_validasi = $_POST['id_status_validasi'];
                            $status_validasi = $_POST['status_validasi'];
                           
                            

                            $tambah = new MengelolaStatusValidasi(''$id_status_validasi, $status_validasi);
                            $tambah->MemasukkanStatusValidasi();
                            
 
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
         <!-- End Form Elements -->
    </div>
</div>
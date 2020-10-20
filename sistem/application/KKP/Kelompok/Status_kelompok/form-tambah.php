<div class="row">
     <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Tambah Status Kelompok</h1>
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
                                <label>Status Kelompok</label>
                                <input type="text" name="status_kelompok" class="form-control" placeholder="Status Kelompok" required>
                            </div>
                           
                            
                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                        </form>
                        <?php
                        if (isset($_POST['simpan'])) {
                        
                            $status_kelompok = $_POST['status_kelompok'];
                           
                            

                            $tambah = new MengelolaStatusKelompok('',$status_kelompok);
                            $tambah->MemasukkanStatusKelompok();
                            
 
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
         <!-- End Form Elements -->
    </div>
</div>
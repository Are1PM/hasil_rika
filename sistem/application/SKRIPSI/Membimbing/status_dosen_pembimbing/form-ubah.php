<div class="row">
     <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Ubah Status Dosen Pembimbing</h1>
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
                                <label>Status Dosen Pembimbing</label>
                                <input type="text" name="status_dosen_pembimbing" class="form-control" placeholder="Status Dosen Pembimbing" required>
                            </div>
                           
                            
                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                        </form>
                        <?php
                        if (isset($_POST['simpan'])) {
                        
                            $status_dosen_pembimbing = $_POST['status_dosen_pembimbing'];
                           
                            

                            $tambah = new MengelolaStatusDosenPembimbing('',$status_dosen_pembimbing);
                            $tambah->MemasukkanStatusDosenPembimbing();
                            
 
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
         <!-- End Form Elements -->
    </div>
</div>
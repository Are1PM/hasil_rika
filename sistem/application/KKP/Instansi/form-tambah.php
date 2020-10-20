<div class="row">
     <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Tambah Instansi</h1>
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
                                <label>Nama Instansi</label>
                                <input type="text" name="nama_instansi" class="form-control" placeholder="Nama Instansi" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control" placeholder="Alamat" required></textarea>
                            </div>
                            <div class="form-group">
                                <label>Kontak</label>
                                <textarea name="kontak" class="form-control" required="" placeholder="Kontak"></textarea>
                            </div>
                            
                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                        </form>
                        <?php
                        if (isset($_POST['simpan'])) {
                        
                            $nama_instansi = $_POST['nama_instansi'];
                            $alamat=$_POST['alamat'];
                            $kontak=$_POST['kontak'];
                            

                            $tambah = new MengelolaInstansi('',$nama_instansi, $alamat, $kontak);
                            $tambah->MemasukkanInstansi();
                            
 
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
         <!-- End Form Elements -->
    </div>
</div>
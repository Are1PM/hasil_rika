<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Ubah Dokumen KKP</h1>
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
                                <label>Id Upload</label>
                                <input type="hidden" name="id_upload" class="form-control" placeholder="Id Upload" required>
                            </div>
                            <div class="form-group">
                                <label>Tahun</label>
                                <input type="date" name="Tahun" class="form-control" placeholder=" Tahun" required>
                            </div>

                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                        </form>
                        <?php
                        if (isset($_POST['simpan'])) {

                            $id_upload = $_POST['id_upload'];
                            $tahun = $_POST['tahun'];

                            $tambah = new MengelolaDokumenKkp($id_upload, $tahun);
                            $tambah->MemasukkanDokumenKkp();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Elements -->
    </div>
</div>
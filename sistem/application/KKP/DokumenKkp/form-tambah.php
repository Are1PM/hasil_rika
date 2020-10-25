<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Upload Dokumen KKP</h1>
    </div>
    <!--end page header -->
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Upload
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-3">
                        <form role="form" method="post" action="" enctype="multipart/form-data">
                            <div class="form-group">
                                <input type="hidden" name="id_mahasiswa" value="<?= $_GET['m'] ?>" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>File Bab 1</label>
                                <input type="file" name="file_bab_1" class="form-control docKKP" onchange="return fileValidation()" required>
                            </div>
                            <div class="form-group">
                                <label>File Lengkap Laporan KKP</label>
                                <input type="file" name="file_lengkap_laporan_kkp" class="form-control docLaporan" onchange="return fileValidationLaporan()" required>
                            </div>

                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Elements -->
    </div>
</div>

<?php

include "proses-upload.php";
?>
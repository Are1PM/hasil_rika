<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Upload Bab 1</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="application/KKP/DokumenKkp/proses-upload.php" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                    <input type="hidden" name="id_mahasiswa" value="<?= $_GET['m'] ?>" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>File Bab 1</label>
                    <input type="file" name="file_bab_1" class="form-control docKKP" onchange="return fileValidation()" required>
                </div>


            </div>
            <div class="modal-footer justify-content-between">
                <button type="reset" class="btn btn-success">Reset</button>
                <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
            </div>
        </form>
    </div>
</div>
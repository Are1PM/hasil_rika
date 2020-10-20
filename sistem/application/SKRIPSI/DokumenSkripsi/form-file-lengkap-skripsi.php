<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Upload Dokumen Full Skripsi</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="application/SKRIPSI/DokumenSkripsi/proses-upload-skripsi.php" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                    <input type="hidden" value="<?= $_POST['id_upload']; ?>" name="id_upload">
                </div>
                <div class="form-group">
                    <label>File Full Skripsi</label>
                    <input type="file" name="file_full_skripsi" class="form-control" required="">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-primary" name="proses">Simpan</button>
            </div>
    </div>
    </form>
</div>
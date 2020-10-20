<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Upload Dokumen Proposal</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="application/SKRIPSI/DokumenSkripsi/proses-upload-proposal.php" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                    <input type="hidden" value="<?= $_POST['id_upload']; ?>" name="id_upload">
                </div>
                <div class="form-group">
                    <label>File Full Proposal</label>
                    <input type="file" name="file_full_proposal" class="form-control" required="">
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-primary" name="proses">Simpan</button>
            </div>
    </div>
    </form>
</div>
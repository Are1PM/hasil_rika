<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Upload Laporan KKP</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="apps/pengajuan/kupon-bbm/proses-konfirmasi.php" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <input type="hidden" value="<?= $_POST['id_kelompok']; ?>" name="id_kelompok">
                </div>
                <div class="form-group">
                    <label>File Bab I</label>
                    <input type="file" name="file_bab_I" class="form-control">
                </div>
                <div class="form-group">
                    <label>File Lengkap Laporan KKP</label>
                    <input type="file" name="file_lengkao_laporan_kkp" class="form-control">
                </div>
                <div class="form-group">
                    <label>Tanggal Upload</label>
                    <input type="date" name="tanggal_upload" class="form-control">
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea name="keterangan" class="form-control" rows="3" placeholder="Keterangan"></textarea>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-primary" name="proses">Simpan</button>
            </div>
    </div>
    </form>
</div>
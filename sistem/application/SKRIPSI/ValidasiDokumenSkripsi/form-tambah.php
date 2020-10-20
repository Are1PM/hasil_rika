<?php
session_start();
?>
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h4 class="modal-title">Validasi Dokumen Skripsi</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="application/SKRIPSI/ValidasiDokumenSkripsi/proses-validasi.php" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                    <input type="hidden" value="<?= $_POST['id_bimbingan']; ?>" name="id_bimbingan">
                </div>
                <div class="form-group">
                    <input type="hidden" value="<?= $_POST['id_dokumen_skripsi']; ?>" name="id_dokumen_skripsi">
                </div>
                 <div class="form-group">
                    <input type="hidden" value="<?= $_SESSION['id_admin']; ?>" name="id_admin">
                </div>
                <div class="form-group">
                    <label>Id Status Validasi</label>
                    <select name="id_status_validasi" class="form-control" required="">
                        <option>--Pilih--</option>
                        <option>Valid</option>
                        <option>Tidak Valid</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Keterangan</label>
                    <textarea name="keterangan" class="form-control" placeholder="keterangan" rows="2"></textarea>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                <button type="submit" class="btn btn-primary" name="proses">Simpan</button>
            </div>
    </div>
    </form>
</div>
<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Ubah Dosen Pembimbing</h1>
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
                                <input type="hidden" name="id_dosen_pembimbing" value="<?= $data->id_dosen_pembimbing ?>">
                            </div>
                            <div class="form-group">
                                <label>Nama Dosen</label>
                                <select name="id_dosen" class="form-control select2">
                                    <option>--Pilih--</option>
                                    <?php
                                    foreach ($data_dosen as $datal) { ?>

                                    <option value="<?= $datal->id_dosen ?>"

                                        <?php
                                        if ($data->id_dosen == $datal->id_dosen) {
                                            echo "selected";
                                        }
                                        ?>


                                        ><?= $datal->nama ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mahasiswa yang dibimbing</label>
                                <select name="id_bimbingan" class="form-control select2">
                                    <option>--Pilih--</option>
                                    <?php
                                    foreach ($data_Uploadskripsi as $datak) { ?>

                                    <option value="<?= $datak->id_upload ?>"
                                        <?php
                                        if ($data->id_upload == $datak->id_upload) {
                                            echo "selected";
                                        }
                                        ?>
                                        ><?= $datak->nama_mahasiswa ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Status Pembimbing</label>
                                <input type="text" name="status_pembimbing" value="<?= $data->status_pembimbing ?>" class="form-control" placeholder="Status Bimbingan" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                        </form>
                        <?php
                        if (isset($_POST['simpan'])) {
                            $id_dosen_pembimbing = $_POST['id_dosen_pembimbing'];
                            $id_dosen = $_POST['id_dosen'];
                            $id_bimbingan = $_POST['id_bimbingan'];
                            $id_status_dosen_pembimbing = $_POST['id_status_dosen_pembimbing'];


                            $tambah = new MengelolaDosenPembimbing($id_dosen_pembimbing,$id_dosen,$id_bimbingan,$id_status_dosen_pembimbing);
                            $tambah->MengubahDosenPembimbing();
                            
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Elements -->
    </div>
</div>

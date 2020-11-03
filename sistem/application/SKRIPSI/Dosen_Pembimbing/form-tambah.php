<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Tambah Dosen Pembimbing</h1>
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
                                <label>Nama Dosen</label>
                                <select name="id_dosen" class="form-control select2">
                                    <option>--Pilih--</option>
                                    <?php
                                    foreach ($data_dosen as $datal) { ?>

                                        <option value="<?= $datal->id_dosen ?>"><?= $datal->nama ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mahasiswa yang dibimbing</label>
                                <select name="id_mahasiswa" class="form-control select2">
                                    <option>--Pilih--</option>
                                    <?php
                                    foreach ($data_Uploadskripsi as $datak) { ?>

                                        <option value="<?= $datak->id_mahasiswa ?>"><?= $datak->nama_mahasiswa ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Status Dosen Pembimbing</label>
                                <select name="id_status_dosen_pembimbing" class="form-control select2">
                                    <option>--Pilih--</option>
                                    <?php
                                    foreach ($data_sdp as $dt) { ?>

                                        <option value="<?= $dt->Id_status_dosen_pembimbning ?>"><?= $dt->status_dosen_pembimbing ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                        </form>
                        <?php
                        if (isset($_POST['simpan'])) {

                            $id_mahasiswa = $_POST['id_mahasiswa'];
                            $id_dosen = $_POST['id_dosen'];
                            $id_status_dosen_pembimbing = $_POST['id_status_dosen_pembimbing'];

                            $tambah = new MengelolaDosenPembimbing('', $id_dosen, $id_mahasiswa, $id_status_dosen_pembimbing);
                            $tambah->MemasukkanDosenPembimbing();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Elements -->
    </div>
</div>
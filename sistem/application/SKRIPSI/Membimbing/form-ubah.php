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

                                        <option value="<?= $datal->id_dosen ?>" <?php
                                                                                if ($data->id_dosen == $datal->id_dosen) {
                                                                                    echo "selected";
                                                                                }
                                                                                ?>><?= $datal->nama ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Mahasiswa yang dibimbing</label>
                                <select name="id_mahasiswa" class="form-control select2">
                                    <option>--Pilih--</option>
                                    <?php
                                    foreach ($data_Uploadskripsi as $datak) { ?>

                                        <option value="<?= $datak->id_mahasiswa ?>" <?php
                                                                                    if ($data->id_mahasiswa == $datak->id_mahasiswa) {
                                                                                        echo "selected";
                                                                                    }
                                                                                    ?>><?= $datak->nama_mahasiswa ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Status Dosen</label>
                                <select name="id_status_dosen_pembimbing" class="form-control select2">
                                    <option>--Pilih--</option>
                                    <?php
                                    foreach ($data_status as $datas) {
                                        if ($datas->id_dosen == "-") continue;
                                    ?>

                                        <option value="<?= $datas->Id_status_dosen_pembimbing ?>" <?php
                                                                                                    if ($data->Id_status_dosen_pembimbing == $datas->Id_status_dosen_pembimbing) {
                                                                                                        echo "selected";
                                                                                                    }
                                                                                                    ?>>
                                            <?= $datas->status_dosen_pembimbing ?>
                                        </option>

                                    <?php } ?>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                        </form>
                        <?php
                        if (isset($_POST['simpan'])) {
                            $id_dosen_pembimbing = $_POST['id_dosen_pembimbing'];
                            $id_dosen = $_POST['id_dosen'];
                            // $id_bimbingan = $_POST['id_bimbingan'];
                            $id_mahasiswa = $_POST['id_mahasiswa'];
                            $id_status_dosen_pembimbing = $_POST['id_status_dosen_pembimbing'];

                            //                                  $id_mahasiswa, $id_dosen, $id_status_dosen_pembimbing
                            $tambah = new MengelolaMembimbing($id_mahasiswa, $id_dosen, $id_status_dosen_pembimbing);
                            $tambah->MengubahMembimbing();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Elements -->
    </div>
</div>
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
                                <label>Mahasiswa yang dibimbing</label>
                                <?php if ($_SESSION['hak_akses'] == "admin") { ?>
                                    <select name="id_mahasiswa" class="form-control select2">
                                        <option>--Pilih--</option>
                                        <?php
                                        foreach ($data_Uploadskripsi as $data) {
                                            if ($data->jumlah_pembimbing > 1) continue;
                                        ?>
                                            <option value="<?= $data->id_mahasiswa ?>"><?= $data->nama_mahasiswa ?></option>

                                        <?php } ?>
                                    </select>
                                <?php } else { ?>

                                    <input type="hidden" name="id_mahasiswa" value="<?= $data_Uploadskripsi[0]->id_mahasiswa; ?>">

                                    <input type="text" name="nama_mahasiswa" value="<?= $data_Uploadskripsi[0]->nama_mahasiswa; ?>" class="form-control" readonly>
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label>Dosen Pembimbing</label>
                                <select name="id_dosen" class="form-control select2">
                                    <option>--Pilih--</option>
                                    <?php
                                    foreach ($data_dosen as $datal) {
                                        if ($datal->id_dosen == "-") continue;
                                    ?>


                                        <option value="<?= $datal->id_dosen ?>"><?= $datal->nama ?></option>

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

                                        <option value="<?= $datas->Id_status_dosen_pembimbing ?>"><?= $datas->status_dosen_pembimbing ?></option>

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

                            // Menginputkan pembimbing I
                            $tambah = new MengelolaMembimbing($id_mahasiswa, $id_dosen, $id_status_dosen_pembimbing);
                            $tambah->MemasukkanMembimbing();
                            // Menginputkan pembimbing II

                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Elements -->
    </div>
</div>
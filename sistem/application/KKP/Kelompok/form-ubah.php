<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Ubah Kelompok</h1>
    </div>
    <!--end page header -->
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Ubah
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="post" action="">
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="id_kelompok" value="<?= $data->id_kelompok; ?>">
                            </div>
                            <div class="form-group">
                                <label>Mahasiswa</label>
                                <select name="id_mahasiswa" class="form-control select2" required="">
                                    <option>--Pilih--</option>
                                    <?php
                                    foreach ($data_mahasiswa as $datab) { ?>
                                        <option value="<?= $data->id_mahasiswa ?>" <?php
                                        if ($data->id_mahasiswa == $datab->id_mahasiswa) {
                                            echo "selected";
                                        }
                                        ?>><?= $datab->nama_mahasiswa ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="nama_instansi">Nama Pembimbing Lapangan</label>
                                <select name="id_pembimbing_lapangan" class="form-control select2" required="">
                                    <option>--Pilih--</option>
                                    <?php
                                    foreach ($PembimbingLapangan as $datab) { ?>
                                        <option value="<?= $datab->id_pembimbing_lapangan ?>" <?php
                                            if ($data->id_pembimbing_lapangan == $datab->id_pembimbing_lapangan) {
                                                echo "selected";
                                            }
                                            ?>><?= $datab->nama_pembimbing_lapangan ?> - <?= $datab->nama_instansi ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama Kelompok</label>
                                <input type="text" name="nama_kelompok" value="<?= $data->nama_kelompok; ?>" class="form-control" placeholder="Nama kelompok" required>
                            </div>
                            <div class="form-group">
                                <label>Status Dalam Kelompok</label>
                                <input type="text" name="id_status_kelompok" class="form-control" value="<?= $data->id_status_kelompok; ?>" placeholder="Status dalam kelompok" required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Masuk</label>
                                <input type="date" name="tanggal_masuk" class="form-control" value="<?= $data->tanggal_masuk; ?>" placeholder="tanggal_masuk" required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Keluar</label>
                                <input type="date" name="tanggal_keluar" class="form-control" value="<?= $data->tanggal_keluar; ?>" placeholder="tanggal_keluar" required>
                            </div>
                            <div class="form-group">
                                <label>Dosen Pembimbing</label>
                                <select name="id_dosen" class="form-control select2">
                                    <option>--Pilih--</option>
                                    <?php
                                    foreach ($data_dosen as $datapp) { ?>
                                        <option value="<?= $datapp->id_dosen ?>"
                                            <?php
                                            if ($data->id_dosen == $datapp->id_dosen) {
                                                echo "selected";
                                            }
                                            ?>

                                            ><?= $datapp->nama ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tahun Akademik</label>
                                <input type="number" name="tahun_akademik" class="form-control" value="<?= $data->tahun_akademik; ?>" placeholder="tahun_akademik" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                        </form>
                        <?php
                        if (isset($_POST['simpan'])) {

                            $id_kelompok = $_POST['id_kelompok'];
                            $nama_kelompok = $_POST['nama_kelompok'];
                            $id_status_kelompok = $_POST['id_status_kelompok'];
                            $tanggal_masuk = $_POST['tanggal_masuk'];
                            $tanggal_keluar = $_POST['tanggal_keluar'];
                            $id_dosen = $_POST['id_dosen'];
                            $tahun_akademik = $_POST['tahun_akademik'];

                            $tambah = new MengelolaKelompok($id_kelompok, $nama_kelompok, $id_status_kelompok, $tanggal_masuk, $tanggal_keluar, $id_dosen, $tahun_akademik);
                            $tambah->MengubahKelompok();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Elements -->
    </div>
</div>
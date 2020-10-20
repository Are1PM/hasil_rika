<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Tambah Kelompok</h1>
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
                                <label>Nama Kelompok</label>
                                <input type="text" name="nama_kelompok" class="form-control" placeholder="Nama kelompok" required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Masuk</label>
                                <input type="date" name="tanggal_masuk" class="form-control" placeholder="tanggal_masuk" required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Keluar</label>
                                <input type="date" name="tanggal_keluar" class="form-control" placeholder="tanggal_keluar" required>
                            </div>
                            <div class="form-group">
                                <label>Dosen Pembimbing</label>
                                <select name="id_dosen" class="form-control select2">
                                    <option>--Pilih--</option>
                                    <?php
                                    foreach ($data_dosen as $datapp) { ?>
                                        <option value="<?= $datapp->id_dosen ?>"><?= $datapp->nama ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Tahun Akademik</label>
                                <input type="number" name="tahun_akademik" class="form-control" placeholder="tahun akademik" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                        </form>
                        <?php
                        if (isset($_POST['simpan'])) {

                            $nama_kelompok = $_POST['nama_kelompok'];
                            $tahun_akademik = $_POST['tahun_akademik'];

                            $tanggal_masuk = $_POST['tanggal_masuk'];
                            $tanggal_keluar = $_POST['tanggal_keluar'];
                            $id_dosen= $_POST['id_dosen'];

                            $tambah = new MengelolaKelompok('', $nama_kelompok, $tanggal_masuk, $tanggal_keluar, $id_dosen, $tahun_akademik);
                            $tambah->MemasukkanKelompok();
                            
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Elements -->
    </div>
</div>








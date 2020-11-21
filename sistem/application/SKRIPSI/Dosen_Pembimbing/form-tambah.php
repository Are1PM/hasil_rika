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
                            <input type="hidden" name="id_mahasiswa" value="<?= $data_Uploadskripsi[0]->id_mahasiswa; ?>" class="form-control">
                            <div class="form-group">
                                <label>Mahasiswa yang dibimbing</label>
                                <input type="text" name="nama_mahasiswa" value="<?= $data_Uploadskripsi[0]->nama_mahasiswa; ?>" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Dosen Pembibing I</label>
                                <select name="id_dosen_I" class="form-control select2">
                                    <option>--Pilih--</option>
                                    <?php
                                    foreach ($data_dosen as $datal) { ?>

                                        <option value="<?= $datal->id_dosen ?>"><?= $datal->nama ?></option>

                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Dosen Pembimbing II</label>
                                <select name="id_dosen_II" class="form-control select2">
                                    <option>--Pilih--</option>
                                    <?php
                                    foreach ($data_dosen as $datal) { ?>

                                        <option value="<?= $datal->id_dosen ?>"><?= $datal->nama ?></option>

                                    <?php } ?>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                        </form>
                        <?php
                        if (isset($_POST['simpan'])) {

                            $id_mahasiswa = $_POST['id_mahasiswa'];
                            $id_dosen_I = $_POST['id_dosen_I'];
                            $id_dosen_II = $_POST['id_dosen_II'];

                            // Menginputkan pembimbing I
                            $tambah = new MengelolaDosenPembimbing($id_mahasiswa, $id_dosen_I, $id_dosen_II);
                            $tambah->MemasukkanDosenPembimbing();
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
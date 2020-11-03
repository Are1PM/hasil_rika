<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Tambah Pembimbing Lapangan</h1>
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
                                <label>Instansi</label>
                                <select name="id_instansi" class="form-control" required="">
                                    <option value="">--Pilih--</option>
                                    <?php
                                    foreach ($data_Instansi as $datar) { ?>
                                        <option value="<?= $datar->id_instansi ?>"><?= $datar->nama_instansi ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kelompok</label>
                                <select name="id_kelompok" class="form-control" required="">
                                    <option value="">--Pilih--</option>
                                    <?php
                                    foreach ($data_kelompok as $datak) { ?>
                                        <option value="<?= $datak->id_kelompok ?>"><?= $datak->nama_kelompok ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nama Pembimbing Lapangan</label>
                                <input type="text" name="pembimbing_lapangan" class="form-control" placeholder="Nama Pembimbing Lapangan" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control" rows="2" placeholder="Alamat"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Number Handphone</label>
                                <input type="text" name="number_handphone" class="form-control" placeholder="Number Handphone" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                        </form>
                        <?php
                        if (isset($_POST['simpan'])) {

                            $id_instansi = $_POST['id_instansi'];
                            $id_kelompok = $_POST['id_kelompok'];
                            $pembimbing_lapangan = $_POST['pembimbing_lapangan'];
                            $alamat = $_POST['alamat'];
                            $number_handphone = $_POST['number_handphone'];

                            $tambah = new MengelolaPembimbingLapangan('',$id_instansi,$id_kelompok,$pembimbing_lapangan,$alamat,$number_handphone);
                            $tambah->MemasukkanPembimbingLapangan();
                            
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Elements -->
    </div>
</div>

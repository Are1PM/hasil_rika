<section class="tm-banner">
    <div class="tm-container-outer tm-banner-bg">
        <div class="container">
            <div class="row tm-banner-row" id="tm-section-search">
                <form action="" method="post" class="tm-search-form tm-section-pad-2">
                    <div class="form-row tm-search-form-row">
                        <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                            <label for="inputCity">Judul</label>
                            <input name="judul" name="judul" value="<?= $_POST['judul'] ?>" type="text" class="form-control" placeholder="Ketik Penggalan Judul" required style="width: 250px;">
                        </div>
                        <div class="form-group tm-form-group tm-form-group-3">
                            <label for="inputRoom">Tahun</label>
                            <input type="number" name="tahun" value="<?= $_POST['tahun'] ?>" class="form-control" required="" placeholder="Masukkan Tahun">
                        </div>
                    </div> <!-- form-row -->
                    <div class="form-row tm-search-form-row">

                        <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">

                        </div>
                        <div class="form-group tm-form-group tm-form-group-pad tm-form-group-3">

                        </div>
                        <div class="form-group tm-form-group tm-form-group-pad tm-form-group-1">
                            <label for="btnSubmit">&nbsp;</label>
                            <button type="submit" class="btn btn-primary tm-btn tm-btn-search" name="cari-skripsi"><i class="fa fa-search"></i> Cari Dokumen</button>
                        </div>
                    </div>
                </form>
            </div> <!-- row -->
            <div class="tm-banner-overlay"></div>
        </div> <!-- .container -->
    </div> <!-- .tm-container-outer -->
</section>
<?php

if (isset($_POST['cari-skripsi'])) { ?>

    <section class="p-5 tm-container-outer tm-bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 mx-auto tm-about-text-wrap text-center">
                    <h2 class="text-uppercase mb-4">Hasil Pencarian</h2>
                </div>
            </div>
        </div>
    </section>
    <div class="tm-container-outer" id="tm-section-3">
        <div class="tab-content clearfix">
            <!-- Tab 4 -->
            <div class="tab-pane fade show active" id="4a">
                <!-- Current Active Tab WITH "show active" classes in DIV tag -->
                <div class="tm-recommended-place-wrap">
                    <table id="" class="display" style="width:100%">
                        <thead>
                            <tr>
                                <th>Mahasiswa</th>
                                <th>Nama</th>
                                <th>Judul</th>
                                <th>E-Mail</th>

                                <th>Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($data_skripsi as $data) { ?>

                                <tr>
                                    <td><?= $data->id_mahasiswa ?></td>
                                    <td><?= $data->nama ?></td>
                                    <td><?= $data->judul ?></td>
                                    <td><?= $data->email ?></td>

                                    <td>
                                        <a href="app/skripsi/download-skripsi.php?filename=<?= $data->file_abstrak_indonesia ?>&id=<?= $data->id_dokumen_skripsi ?>" target="_blank">ABSTRAK</a>
                                        <?php
                                        if ($_SESSION['hak_akses'] == "dosen") { ?>
                                            |
                                            <a href="app/skripsi/download-skripsi.php?filename=<?= $data->file_full_skripsi ?>&id=<?= $data->id_dokumen_skripsi ?>" target="_blank">FULL FILE</a>
                                        <?php } ?>
                                    </td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>

                <!-- <a href="#" class="text-uppercase btn-primary tm-btn mx-auto tm-d-table">Show More Places</a> -->
            </div> <!-- tab-pane -->
        </div>
    </div>
<?php } ?>
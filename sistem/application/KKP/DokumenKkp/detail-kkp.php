<div id="print">
    <div class="row">
        <!--  page header -->
        <div class="col-lg-12">
            <h1 class="page-header">Data Dokumen KKP</h1>
        </div>
        <!-- end  page header -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php if ($data->Id_status_validasi != 1) : ?>
                        <a href="?rik=tambah-DokumenKkp&m=<?= $_SESSION['id_mahasiswa'] ?>" class="btn btn-primary">
                            <i class="fa fa-cloud-upload"></i>
                            Upload
                        </a>
                    <?php endif; ?>

                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td><?= $data->nama_mahasiswa; ?></td>
                                </tr>
                                <tr>
                                    <td>NIM</td>
                                    <td><?= $data->id_mahasiswa; ?></td>
                                </tr>
                                <tr>
                                    <td>Nama Kelompok</td>
                                    <td><?= $data->nama_kelompok; ?></td>
                                </tr>
                                <tr>
                                    <td>Status dalam Kelompok</td>
                                    <td><?= $data->status_kelompok; ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Masuk</td>
                                    <td><?= $data->tanggal_masuk; ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Keluar</td>
                                    <td><?= $data->tanggal_keluar; ?></td>
                                </tr>
                                <tr>
                                    <td>Dosen Pembimbing</td>
                                    <td><?= $data->nama; ?></td>
                                </tr>
                                <tr>
                                    <td>Pembimbing Lapangan</td>
                                    <td><?= $data->nama_pembimbing_lapangan; ?></td>
                                </tr>
                                <tr>
                                    <td>Instansi</td>
                                    <td><?= $data->nama_instansi; ?></td>
                                </tr>
                                <tr>
                                    <td>Tahun Akademik</td>
                                    <td><?= $data->tahun_akademik; ?></td>
                                </tr>
                                <?php
                                $id_dokumen_kkp = $data->id_dokumen_kkp;
                                $validasi = new MengelolaValidasiDokumenKkp('', '', $id_dokumen_kkp, '', '', '');
                                $val      = $validasi->MencariDokumenKkp();

                                ?>
                                <tr>
                                    <td>File BAB I</td>
                                    <td>
                                        <a href="assets/dokumen_kkp/<?= $data->file_bab_I ?>" title="<?= $data->file_bab_I ?>">Preview</a> |
                                        <?php
                                        if ($data->file_bab_I == '' and $val->Id_status_validasi == '') {
                                            echo '<a href="#" class="validasi_kkp">Upload</a>';
                                        } elseif ($data->file_bab_I != '' and $val->Id_status_validasi == '') {
                                            echo '<label class="label label-info">Menunggu Validasi</label>';
                                            if ($_SESSION['hak_akses'] == 'admin') {
                                                echo '| <a href="#" class="validasi_kkp">Reset</a>';
                                            }
                                        } elseif ($data->file_bab_I != '' and $val->Id_status_validasi == '2') {
                                            echo '<label class="label label-danger">Tidak Valid</label>';
                                            if ($_SESSION['hak_akses'] == 'admin') {
                                                echo ' | <a href="#" class="validasi_kkp">Reset</a>';
                                            }
                                        } else {
                                            if ($val->Id_status_validasi == 1) {
                                                echo '<label class="label label-success">Selesai</label>';
                                            } elseif ($val->Id_status_validasi == 2 and $data->file_bab_I == '') {
                                                echo '<a href="#" class="validasi_kkp">Upload Ulang</a>';
                                            } else {
                                                echo '<label class="label label-success">Selesai</label>';
                                            }
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>File Lengkap Laporan KKP</td>
                                    <td>
                                        <a href="assets/dokumen_kkp/<?= $data->file_lengkap_laporan_kkp ?>" title="<?= $data->file_lengkap_laporan_kkp ?>">Preview</a> |
                                        <?php
                                        if ($data->file_lengkap_laporan_kkp == '' and $data->Id_status_validasi == '') {
                                            echo '<a href="#" class="validasi_kkp">Upload</a>';
                                        } elseif ($data->file_lengkap_laporan_kkp != '' and $data->Id_status_validasi == "") {
                                            echo '<label class="label label-info">Menunggu Validasi</label>';
                                            if ($_SESSION['hak_akses'] == 'admin') {
                                                echo ' | <a href="#" class="validasi_kkp">Reset</a>';
                                            }
                                        } elseif ($data->file_lengkap_laporan_kkp != '' and $data->Id_status_validasi == 2) {
                                            echo '<label class="label label-danger">Tidak Valid</label>';
                                            if ($_SESSION['hak_akses'] == 'admin') {
                                                echo ' | <a href="#" class="validasi_kkp">Reset</a>';
                                            }
                                        } else {
                                            if ($data->Id_status_validasi == 1) {
                                                echo '<label class="label label-success">Selesai</label>';
                                            } elseif ($data->file_lengkap_laporan_kkp == '' and $data->Id_status_validasi == 2) {
                                                echo '<a href="#" class="validasi_kkp">Upload Ulang</a>';
                                            } else {
                                                echo '<label class="label label-success">Selesai</label>';
                                            }
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tanggal Upload</td>
                                    <td><?= $data->tanggal_upload; ?></td>
                                </tr>
                                <tr>
                                    <td>Tahun</td>
                                    <td><?= $data->tahun; ?></td>
                                </tr>
                                <?php
                                if ($data->keterangan != "") { ?>
                                    <tr>
                                        <td>Catatan</td>
                                        <td colspan="2">
                                            <label class="label label-danger"><?= $data->keterangan ?></label>
                                        </td>
                                    </tr>
                                <?php } ?>
                                <tr>
                                    <td></td>
                                    <td>
                                        <?php
                                        if ($data->Id_status_validasi == '' or $data->Id_status_validasi == 2) {
                                            if ($_SESSION['hak_akses'] == 'admin') {
                                                echo '<a href="#" class="validasi_kkp btn btn-warning" data-id="<?= $data->id_dokumen_kkp; ?>" data="<?= $data->id_upload_kkp; ?>"> Validasi</a>';
                                            }
                                        } elseif ($_SESSION['hak_akses'] == 'mahasiswa') {
                                            echo '<button class="validasi_kkp btn btn-warning" onclick="printContent(\'print\');"> Cetak</button>';
                                        } else {
                                            echo '<i class="label label-warning">Telah di Validasi.</i>';
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <!-- <button onclick="printContent('print');" class="btn btn-danger">
                                    Cetak
                                </button> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>

</div>
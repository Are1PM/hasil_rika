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
                    <?php
                    // print_r($data->Id_status_validasi);
                    ?>
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
                                        <?php if ($data->file_bab_I != "") : ?>
                                            <a href="assets/dokumen_kkp/<?= $data->file_bab_I ?>" title="<?= $data->file_bab_I ?>"><i class="fa fa-file fa-3x"></i></a> |
                                        <?php else : ?>
                                            <a href="#" title="upload" class="upload-file-bab1-kkp" data-id="<?= $_SESSION['id_mahasiswa'] ?>"><i class="fa fa-upload"></i></a>
                                        <?php endif; ?>
                                        <?php
                                        if ($data->file_bab_I != '' and ($val->Id_status_validasi == '' || $val->Id_status_validasi == 3)) {
                                            echo '<label class="label label-info">Menunggu Validasi</label>';
                                        } elseif ($val->Id_status_validasi == 1) {
                                            echo '<label class="label label-success">Selesai</label>';
                                        }
                                        // if ($data->file_bab_I == '' and $val->Id_status_validasi == '') {
                                        //     echo '<a href="#" title="upload" class="upload-full-proposal"><i class="fa fa-upload"></i></a>';
                                        //     echo '<a href="#" class="validasi_kkp">Upload</a>';
                                        // } elseif ($data->file_bab_I != '' and $val->Id_status_validasi == '') {
                                        //     echo '<label class="label label-info">Menunggu Validasi</label>';
                                        //     if ($_SESSION['hak_akses'] == 'admin') {
                                        //         echo '| <a href="#" class="validasi_kkp">Reset</a>';
                                        //     }
                                        // } elseif ($data->file_bab_I != '' and $val->Id_status_validasi == '2') {
                                        //     echo '<label class="label label-danger">Tidak Valid</label>';
                                        //     if ($_SESSION['hak_akses'] == 'admin') {
                                        //         echo ' | <a href="#" class="validasi_kkp">Reset</a>';
                                        //     }
                                        // } else {
                                        //     if ($val->Id_status_validasi == 1) {
                                        //         echo '<label class="label label-success">Selesai</label>';
                                        //     } elseif ($val->Id_status_validasi == 2 and $data->file_bab_I == '') {
                                        //         echo '<a href="#" class="validasi_kkp">Upload Ulang</a>';
                                        //     } else {
                                        //         echo '<label class="label label-success">Selesai</label>';
                                        //     }
                                        // }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>File Lengkap Laporan KKP</td>
                                    <td>
                                        <?php if ($data->file_lengkap_laporan_kkp != "") : ?>
                                            <a href="assets/dokumen_kkp/<?= $data->file_lengkap_laporan_kkp ?>" title="<?= $data->file_lengkap_laporan_kkp ?>"><i class="fa fa-file fa-3x"></i></a> |
                                        <?php else : ?>
                                            <a href="#" title="upload" class="upload-file-lengkap-laporan-kkp" data-id="<?= $_SESSION['id_mahasiswa'] ?>"><i class="fa fa-upload fa-1x"></i></a>
                                        <?php endif; ?>
                                        <?php
                                        if ($data->file_lengkap_laporan_kkp != '' && ($val->Id_status_validasi == '' || $val->Id_status_validasi == 3)) {
                                            echo '<label class="label label-info">Menunggu Validasi</label>';
                                        } elseif ($val->Id_status_validasi == 1) {
                                            echo '<label class="label label-success">Selesai</label>';
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
                                $arr = [2, 3];
                                // var_dump(in_array($data->Id_status_validasi, $arr));
                                // die;
                                if ($data->keterangan != "" || in_array($data->Id_status_validasi, $arr)) { ?>
                                    <tr>
                                        <td>Catatan</td>
                                        <td colspan="2">
                                            <label class="label label-info"><?= $data->keterangan ?></label>
                                        </td>
                                    </tr>
                                <?php } ?>
                                <tr>
                                    <td></td>
                                    <td>
                                        <?php
                                        if ($data->Id_status_validasi == 1) {
                                            echo '<button class="validasi_kkp btn btn-warning" onclick="printContent(\'print\');"> Cetak</button>';
                                        } else if ($data->Id_status_validasi == 2) {
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
                        <?php if (in_array($data->Id_status_validasi, $arr)) :  ?>

                            <div class="alert alert-danger"><i><b>Silahkan upload ulang seluruh dokumen beserta perbaikannya</b></i></div>


                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>

</div>
<div class="modal fade" id="data"></div>

<?php
if (isset($_GET['pesan'])) {
    if ($_GET['pesan'] == "berhasil") {
        echo '<div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                          <br><div class="alert alert-success text-center">
                              Berhasil dikirim
                          </div>
                          <br>
                            <div class="form-group">
                              <a href="?rik=detail-DokumenKkp"><button class="btn btn-info">Kembali</button></a>
                            </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>';
    } else if ($_GET['pesan'] == "invalid-formatfile") {
        echo '<div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                          <br><div class="alert alert-danger text-center">
                              Format file bukan pdf.
                          </div>
                          <br>
                            <div class="form-group">
                              <a href="?rik=detail-DokumenKkp"><button class="btn btn-info">Kembali</button></a>
                            </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>';
    } else if ($_GET['pesan'] == "invalid-size") {
        echo '<div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                          <br><div class="alert alert-danger text-center">
                              Ukuran file terlalu besar.
                          </div>
                          <br>
                            <div class="form-group">
                              <a href="?rik=detail-DokumenKkp"><button class="btn btn-info">Kembali</button></a>
                            </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>';
    }
}
?>
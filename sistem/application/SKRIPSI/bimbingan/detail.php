<div id="print">
    <style type="text/css">
        td {
            width: 100px;
        }
    </style>
    <div class="row">
        <!--  page header -->
        <div class="col-lg-12">
            <h1 class="page-header">Detail Dokumen Skripsi</h1>
        </div>
        <!-- end  page header -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <!-- Advanced Tables -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Detail
                </div>
                <div class="panel-body">
                    <?php
                    // print_r($data_UploadSkripsi);
                    // die;
                    ?>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <tbody>
                                <tr>
                                    <td colspan="2" align="center">
                                        <h3>DATA DIRI</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Mahasiswa</td>
                                    <td><?= $data_UploadSkripsi->nama_mahasiswa; ?></td>
                                </tr>
                                <tr>
                                    <td>NIM</td>
                                    <td><?= $data_UploadSkripsi->id_mahasiswa; ?></td>
                                </tr>
                                <tr>
                                    <td>Angkatan</td>
                                    <td><?= $data_UploadSkripsi->angkatan; ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><?= $data_UploadSkripsi->email; ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <h3>DATA SKRIPSI</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Judul</td>
                                    <td><?= $data_UploadSkripsi->judul; ?></td>
                                </tr>
                                <tr>
                                    <td>Abstrak Bahasa Indonesia</td>
                                    <td><?= substr($data_UploadSkripsi->abstrak_indonesia, 0, 200); ?>...</td>
                                </tr>
                                <tr>
                                    <td>Abstrak Bahasa Inggris</td>
                                    <td><?= substr($data_UploadSkripsi->abstrak_inggris, 0, 200); ?>...</td>
                                </tr>
                                <tr>
                                    <td>Pembimbing I</td>
                                    <td>
                                        <?php
                                        $id_uploado = "";
                                        $datahhh = new MengelolaMembimbing($data_UploadSkripsi->id_mahasiswa, '', 1);
                                        $datacv = $datahhh->MencariDosen();
                                        // print_r($datacv);
                                        // die;
                                        if ($datacv->Id_status_dosen_pembimbing == "1") {
                                            echo $datacv->nama;
                                        } else {
                                            echo '<i class="label label-danger">Belum ada Pembimbing I</i>';
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Pembimbing II</td>
                                    <td>
                                        <?php
                                        $id_uploadp = "";
                                        $datahhh = new MengelolaMembimbing($data_UploadSkripsi->id_mahasiswa, '', 2);
                                        $datacv = $datahhh->MencariDosen();
                                        if ($datacv->Id_status_dosen_pembimbing == "2") {
                                            echo $datacv->nama;
                                        } else {
                                            echo '<i class="label label-danger">Belum ada Pembimbing II</i>';
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tahun</td>
                                    <td><?= $data_UploadSkripsi->tahun; ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Upload</td>
                                    <td><?= $data_UploadSkripsi->tanggal_upload; ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <h3>DATA DOKUMEN</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Abstrak Bahasa Inggris</td>
                                    <td>
                                        <?php
                                        if ($data->file_abstrak_inggris == "") { ?>
                                            <a href="#" title="upload" class="upload-abstrak" data-id="<?= $data_UploadSkripsi->id_bimbingan; ?>"><i class="fa fa-upload"></i></a>
                                        <?php } else { ?>
                                            <a href="assets/dokumen_skripsi/<?= $data->file_abstrak_inggris; ?>" target="_blank">
                                                <i class="fa fa-file fa-3x"></i>
                                            </a>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Abstrak Bahasa Indonesia</td>
                                    <td>
                                        <?php
                                        if ($data->file_abstrak_indonesia == "") { ?>
                                            <a href="#" title="upload" class="upload-abstrak" data-id="<?= $data_UploadSkripsi->id_bimbingan; ?>"><i class="fa fa-upload"></i></a>
                                        <?php } else { ?>
                                            <a href="assets/dokumen_skripsi/<?= $data->file_abstrak_indonesia; ?>" target="_blank">
                                                <i class="fa fa-file fa-3x"></i>
                                            </a>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>File Bab I</td>
                                    <td>
                                        <?php
                                        if ($data->file_bab_I == "") { ?>
                                            <a href="#" title="upload" class="upload-bab-1" data-id="<?= $data_UploadSkripsi->id_bimbingan; ?>"><i class="fa fa-upload"></i></a>
                                        <?php  } else { ?>

                                            <a href="assets/dokumen_skripsi/<?= $data->file_bab_I; ?>" target="_blank">
                                                <i class="fa fa-file fa-3x"></i>
                                            </a>

                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>File Full Skripsi</td>
                                    <td>
                                        <?php
                                        if ($data->file_full_skripsi == "") { ?>
                                            <a href="#" title="upload" class="upload-full-skripsi" data-id="<?= $data_UploadSkripsi->id_bimbingan; ?>"><i class="fa fa-upload"></i></a>
                                        <?php  } else { ?>
                                            <a href="assets/dokumen_skripsi/<?= $data->file_full_skripsi; ?>" target="_blank">
                                                <i class="fa fa-file fa-3x"></i>
                                            </a>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>File Full Proposal</td>
                                    <td>
                                        <?php
                                        if ($data->file_full_proposal == "") { ?>
                                            <a href="#" title="upload" class="upload-full-proposal" data-id="<?= $data_UploadSkripsi->id_bimbingan; ?>"><i class="fa fa-upload"></i></a>
                                        <?php  } else { ?>
                                            <a href="assets/dokumen_skripsi/<?= $data->file_full_proposal; ?>" target="_blank">
                                                <i class="fa fa-file fa-3x"></i>
                                            </a>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <?php

                                        if ($_SESSION['hak_akses'] == "mahasiswa") {
                                            if ($data->id_dokumen_skripsi != "") {

                                                if ($cek->Id_status_validasi == 1) {
                                        ?>

                                                    <button onclick="printContent('print');" class="btn btn-danger">
                                                        Cetak
                                                    </button>

                                                <?php
                                                } else if ($cek->keterangan != "") {
                                                ?>
                                <tr>
                                    <td colspan="2">
                                        <div class="alert alert-danger">Catatan : <?= $cek->keterangan ?> <br><br><i><b>(Silahkan upload ulang seluruh dokumen beserta perbaikannya)</b></i></div>
                                    </td>
                                </tr>
                            <?php
                                                } else 

                                                if ($data->file_full_skripsi != '' && $data->file_full_proposal != '' && $data->file_bab_I != '') { ?>
                                <tr>
                                    <td colspan="2">
                                        <div class="alert alert-success">Catatan : Dokumen Anda Sedang dalam proses validasi.</div>
                                    </td>
                                </tr>

                        <?php
                                                }
                                            }
                                        } else {
                        ?>
                        <a href="#" class="validasi_skripsi btn btn-warning" data-id="<?= $data_UploadSkripsi->id_dokumen_skripsi; ?>" data="<?= $data_UploadSkripsi->id_upload; ?>"> Validasi</a>
                    <?php } ?>
                    </td>
                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--End Advanced Tables -->
        </div>
    </div>
</div>
<div class="modal fade" id="show"></div>

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
                              <a href="?rik=detail-UploadSkripsi&id_upload=' . $_GET['id_upload'] . '"><button class="btn btn-info">Kembali</button></a>
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
                              <a href="?rik=detail-UploadSkripsi&id_upload=' . $_GET['id_upload'] . '"><button class="btn btn-info">Kembali</button></a>
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
                              <a href="?rik=detail-UploadSkripsi&id_upload=' . $_GET[id_upload] . '"><button class="btn btn-info">Kembali</button></a>
                            </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>';
    }
}
?>
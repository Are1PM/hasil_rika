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
                                    <td><?= $data_Dokumenskripsi->nama_mahasiswa; ?></td>
                                </tr>
                                <tr>
                                    <td>NIM</td>
                                    <td><?= $data_Dokumenskripsi->id_mahasiswa; ?></td>
                                </tr>
                                <tr>
                                    <td>Angkatan</td>
                                    <td><?= $data_Dokumenskripsi->angkatan; ?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td><?= $data_Dokumenskripsi->email; ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <h3>DATA SKRIPSI</h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Judul</td>
                                    <td><?= $data_Dokumenskripsi->judul; ?></td>
                                </tr>
                                <tr>
                                    <td>Abstrak Bahasa Indonesia</td>
                                    <td><?= substr($data_Dokumenskripsi->abstrak_indonesia, 0, 200); ?>...</td>
                                </tr>
                                <tr>
                                    <td>Abstrak Bahasa Inggris</td>
                                    <td><?= substr($data_Dokumenskripsi->abstrak_inggris, 0, 200); ?>...</td>
                                </tr>
                                <tr>
                                    <td>Pembimbing I</td>
                                    <td>
                                        <?php
                                        $id_mahasiswa = $data_Dokumenskripsi->id_mahasiswa;
                                        $datahhh = new MengelolaMembimbing($data_Dokumenskripsi->id_mahasiswa, '', 1);
                                        $datacv = $datahhh->MencariDosen();

                                        if ($datacv->Id_status_dosen_pembimbing == 1) {
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
                                        $id_mahasiswa = $data_Dokumenskripsi->id_mahasiswa;
                                        $datahhh = new MengelolaMembimbing($data_Dokumenskripsi->id_mahasiswa, '', 2);
                                        $datacv = $datahhh->MencariDosen();



                                        if ($datacv->Id_status_dosen_pembimbing == 2) {
                                            echo $datacv->nama;
                                        } else {
                                            echo '<i class="label label-danger">Belum ada Pembimbing II</i>';
                                        }

                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Tahun</td>
                                    <td><?= $data_Dokumenskripsi->tahun; ?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Upload</td>
                                    <td><?= $data_Dokumenskripsi->tanggal_upload; ?></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center">
                                        <h3>DATA DOKUMEN</h3>
                                    </td>
                                </tr>
                                <?php
                                $id_bimbingan = $data_Dokumenskripsi->id_bimbingan;
                                $file = new MengelolaDokumenSkripsi('', $id_bimbingan, '', '', '', '', '');
                                $data_file = $file->MencariDokumen();
                                ?>
                                <tr>
                                    <td>Abstrak Bahasa Inggris</td>
                                    <td>
                                        <a href="application/SKRIPSI/preview/skripsi.php?filename=<?= str_replace('*', '', $data_file->file_abstrak_inggris); ?>" target="_blank">
                                            <!-- <a href="application/SKRIPSI/cek-file/cek-abstrak-ing.php?id_bimbingan=<?= $data_Dokumenskripsi->id_bimbingan; ?>&filename=<?= str_replace('*', '', $data_Dokumenskripsi->file_abstrak_inggris); ?>"> -->
                                            <i class="fa fa-file fa-3x"></i>
                                        </a>
                                        <?php

                                        $a = $data_file->file_abstrak_inggris;
                                        // if ($this->DokumenSkripsi->cekFile($a) == '1') {
                                        if ($a == '') {

                                        ?>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="label label-danger">
                                                Belum
                                            </i>
                                        <?php } else { ?>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="label label-success">
                                                Sudah
                                            </i>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Abstrak Bahasa Indonesia</td>
                                    <td>
                                        <a href="application/SKRIPSI/preview/skripsi.php?filename=<?= str_replace('*', '', $data_file->file_abstrak_indonesia); ?>" target="_blank">
                                            <!-- <a href="application/SKRIPSI/cek-file/cek-abstrak-indo.php?id_bimbingan=<?= $data_Dokumenskripsi->id_bimbingan; ?>&filename=<?= str_replace('*', '', $data_Dokumenskripsi->file_abstrak_indonesia); ?>"> -->
                                            <i class="fa fa-file fa-3x"></i>
                                        </a>
                                        <?php
                                        $b = $data_file->file_abstrak_indonesia;
                                        // if ($this->DokumenSkripsi->cekFile($b) == '1') {
                                        if ($b == '') {

                                        ?>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="label label-danger">
                                                Belum
                                            </i>
                                        <?php } else { ?>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="label label-success">
                                                Sudah
                                            </i>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>File Bab I</td>
                                    <td>
                                        <a href="application/SKRIPSI/preview/skripsi.php?filename=<?= str_replace('*', '', $data_file->file_bab_I); ?>" target="_blank">
                                            <!-- <a href="application/SKRIPSI/cek-file/cek-file-bab-1.php?id_bimbingan=<?= $data_Dokumenskripsi->id_bimbingan; ?>&filename=<?= str_replace('*', '', $data_Dokumenskripsi->file_bab_I); ?>"> -->
                                            <i class="fa fa-file fa-3x"></i>
                                        </a>
                                        <?php

                                        $c = $data_file->file_bab_I;
                                        // if ($this->DokumenSkripsi->cekFile($c) == '1') {
                                        if ($c == '') {

                                        ?>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="label label-danger">
                                                Belum
                                            </i>
                                        <?php } else { ?>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="label label-success">
                                                Sudah
                                            </i>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td>File Full Skripsi</td>
                                    <td>
                                        <a href="application/SKRIPSI/preview/skripsi.php?filename=<?= str_replace('*', '', $data_file->file_full_skripsi); ?>" target="_blank">
                                            <!-- <a href="application/SKRIPSI/cek-file/cek-file-skripsi.php?id_bimbingan=<?= $data_Dokumenskripsi->id_bimbingan; ?>&filename=<?= str_replace('*', '', $data_Dokumenskripsi->file_full_skripsi); ?>"> -->
                                            <i class="fa fa-file fa-3x"></i>
                                        </a>

                                        <?php
                                        $d = $data_file->file_full_skripsi;
                                        // if ($this->DokumenSkripsi->cekFile($d) == '1') {
                                        if ($d == '') {

                                        ?>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="label label-danger">
                                                Belum
                                            </i>
                                        <?php } else { ?>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="label label-success">
                                                Sudah
                                            </i>
                                        <?php } ?>

                                    </td>
                                </tr>
                                <tr>
                                    <td>File Full Proposal</td>
                                    <td>
                                        <a href="application/SKRIPSI/preview/skripsi.php?filename=<?= str_replace('*', '', $data_file->file_full_proposal); ?>" target="_blank">
                                            <!-- <a href="application/SKRIPSI/cek-file/cek-file-proposal.php?id_bimbingan=<?= $data_Dokumenskripsi->id_bimbingan; ?>&filename=<?= str_replace('*', '', $data_Dokumenskripsi->file_full_proposal); ?>"> -->
                                            <i class="fa fa-file fa-3x"></i>
                                        </a>
                                        <?php
                                        $e = $data_file->file_full_proposal;
                                        // if ($this->DokumenSkripsi->cekFile($e) == '1') {
                                        if ($e == '') {

                                        ?>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="label label-danger">
                                                Belum
                                            </i>
                                        <?php } else { ?>
                                            &nbsp;&nbsp;&nbsp;&nbsp;
                                            <i class="label label-success">
                                                Sudah
                                            </i>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td>
                                        <?php
                                        $id_dokumen_skripsi = $data_file->id_dokumen_skripsi;
                                        $val = new MengelolaValidasiDokumenSkripsi('', '', $id_dokumen_skripsi, '', '', '');
                                        $cek_val = $val->mencariValidasi();

                                        if ($_SESSION['hak_akses'] == "mahasiswa") {

                                            if ($cek_val->Id_status_validasi == 1) { ?>
                                                <button onclick="printContent('print');" class="btn btn-danger">
                                                    Cetak
                                                </button>

                                            <?php
                                            } else {
                                            ?>
                                <tr>
                                    <td colspan="2">
                                        <div class="alert alert-success">Catatan : Dokumen Anda Sedang dalam proses validasi.</div>
                                    </td>
                                </tr>

                            <?php
                                            }
                                        } else { ?>
                            <?php
                                            if (!$cek_val->Id_status_validasi) { ?>
                                <a href="#" class="validasi_skripsi btn btn-warning" data-id="<?= $data_file->id_dokumen_skripsi; ?>" data-bimbingan="<?= $data_Dokumenskripsi->id_bimbingan; ?>"> Validasi</a>
                            <?php } else if ($cek_val->Id_status_validasi == 2 || $cek_val->Id_status_validasi == 3) {
                            ?>
                                <tr>
                                    <td colspan="2">
                                        <div class="alert alert-danger">
                                            <b>DATA TIDAK VALID</b><br><br>
                                            Catatan yang diberikan: <?= $cek_val->keterangan ?>
                                        </div>
                                    </td>
                                </tr>
                            <?php } else if ($cek_val->Id_status_validasi == 1) {
                            ?>
                                <tr>
                                    <td colspan="2">
                                        <div class="alert alert-success">
                                            <b>DATA VALID</b><br><br>
                                            Catatan yang diberikan: <?= $cek_val->keterangan ?>

                                        </div>
                                    </td>
                                </tr>
                        <?php
                                            }
                                        } ?>
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
<div class="modal fade" id="validasi_skripsi"></div>

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
                              <a href="?rik=detail-DokumenSkripsi&id_bimbingan=' . $_GET[id_bimbingan] . '"><button class="btn btn-info">Kembali</button></a>
                            </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>';
    } else if ($_GET['pesan'] == "gagal") {
        echo '<div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                          <br><div class="alert alert-success text-center">
                              ukuran file anda terlalu besar atau format file bukan pdf.
                          </div>
                          <br>
                            <div class="form-group">
                              <a href="?rik=detail-DokumenSkripsi&id_bimbingan=' . $_GET[id_bimbingan] . '"><button class="btn btn-info">Kembali</button></a>
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
                              <a href="?rik=data-Bimbingan"><button class="btn btn-info">Kembali</button></a>
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
                              <a href="?rik=data-Bimbingan"><button class="btn btn-info">Kembali</button></a>
                            </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>';
    } else if ($_GET['pesan'] == "validasi-gagal") {
        echo '<div id="myModal" class="modal fade" role="dialog">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                          <br><div class="alert alert-danger text-center">
                              Pilih status validasi dengan benar.
                          </div>
                          <br>
                            <div class="form-group">
                              <a href="?rik=detail-DokumenSkripsi&id_bimbingan=' . $_GET[id_bimbingan] . '"><button class="btn btn-info">Kembali</button></a>
                            </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>';
    }
}
?>
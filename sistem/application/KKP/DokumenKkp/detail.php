<style type="text/css">
    td {
        width: 100px;
    }
</style>
<div class="row">
    <!--  page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Detail Dokumen KKP</h1>
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
                                <td>Nama</td>
                                <td><?= $data_DokumenKkp->nama_mahasiswa; ?></td>
                            </tr>
                            <tr>
                                <td>NIM</td>
                                <td><?= $data_DokumenKkp->id_mahasiswa; ?></td>
                            </tr>
                            <tr>
                                <td>Nama Kelompok</td>
                                <td><?= $data_DokumenKkp->nama_kelompok; ?></td>
                            </tr>
                            <tr>
                                <td>Status dalam Kelompok</td>
                                <td><?= $data_DokumenKkp->status_kelompok; ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Masuk</td>
                                <td><?= $data_DokumenKkp->tanggal_masuk; ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Keluar</td>
                                <td><?= $data_DokumenKkp->tanggal_keluar; ?></td>
                            </tr>
                            <tr>
                                <td>Dosen Pembimbing</td>
                                <td><?= $data_DokumenKkp->nama; ?></td>
                            </tr>
                            <tr>
                                <td>Pembimbing Lapangan</td>
                                <td><?= $data_DokumenKkp->nama_pembimbing_lapangan; ?></td>
                            </tr>
                            <tr>
                                <td>Instansi</td>
                                <td><?= $data_DokumenKkp->nama_instansi; ?></td>
                            </tr>
                            <tr>
                                <td>Tahun Akademik</td>
                                <td><?= $data_DokumenKkp->tahun_akademik; ?></td>
                            </tr>
                            <?php
                            $id_dokumen_kkp = $data_DokumenKkp->id_dokumen_kkp;
                            $validasi = new MengelolaValidasiDokumenKkp('', '', $id_dokumen_kkp, '', '', '');
                            $val      = $validasi->MencariDokumenKkp();

                            $daval = [2, 3];
                            ?>
                            <tr>
                                <td>File BAB I</td>
                                <td>

                                    <a href="assets/dokumen_kkp/<?= $data_DokumenKkp->file_bab_I ?>" title="<?= $data_DokumenKkp->file_bab_I ?>">
                                        <i class="fa fa-file fa-3x"></i>
                                    </a>


                                    <?php
                                    $d = $data_DokumenKkp->file_bab_I;
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
                                <td>File Lengkap Laporan KKP</td>
                                <td>
                                    <a href="assets/dokumen_kkp/<?= $data_DokumenKkp->file_lengkap_laporan_kkp ?>" title="<?= $data_DokumenKkp->file_lengkap_laporan_kkp ?>">
                                        <i class="fa fa-file fa-3x"></i>
                                    </a>


                                    <?php
                                    $d = $data_DokumenKkp->file_lengkap_laporan_kkp;
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
                                <td>Tanggal Upload</td>
                                <td><?= $data_DokumenKkp->tanggal_upload; ?></td>
                            </tr>
                            <tr>
                                <td>Tahun</td>
                                <td><?= $data_DokumenKkp->tahun; ?></td>
                            </tr>
                            <?php
                            $valid = "";
                            if ($val->keterangan != '') { ?>
                                <tr>
                                    <td>Catatan </td>
                                    <td colspan="2">
                                        <label class="label label-info"><?= $val->keterangan ?></label>
                                    </td>
                                </tr>
                            <?php }
                            if ($val->Id_status_validasi == '' && $data_DokumenKkp->file_lengkap_laporan_kkp != '') {
                            ?>
                                <tr>
                                    <td></td>
                                    <td>
                                        <a href="#" class="validasi_kkp btn btn-warning" data-id="<?= $data_DokumenKkp->id_dokumen_kkp ?>" data="<?= $data_DokumenKkp->id_upload_kkp ?>"> Validasi</a>
                                    </td>
                                </tr>
                            <?php
                            } else if ($val->Id_status_validasi == 1) {
                            ?>
                                <tr>
                                    <td colspan="2">
                                        <div class="alert alert-success"><b>Data telah divalidasi</b></div>
                                    </td>
                                </tr>
                            <?php
                            } else if ($val->Id_status_validasi == 2 || $val->Id_status_validasi == 3 || $data_DokumenKkp->file_lengkap_laporan_kkp == '') {

                                $valid = ' <div class="alert alert-info"><b>Menunggu Perbaikan</b></div>';
                            } ?>

                        </tbody>
                    </table>
                    <?php echo $valid; ?>
                </div>
            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>
<div class="modal fade" id="validasi_kkp"></div>

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
                              <a href="?rik=detail-DokumenKkp&id_dokumen_kkp=' . $_GET["id_dokumen_kkp"] . '"><button class="btn btn-info">Kembali</button></a>
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
                              <a href="?rik=detail-DokumenKkp&id_dokumen_kkp=' . $_GET["id_dokumen_kkp"] . '"><button class="btn btn-info">Kembali</button></a>
                            </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>';
    }
}
?>
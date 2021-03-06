<div class="row">
    <!--  page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Data Skripsi</h1>
    </div>
    <!-- end  page header -->
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <?php
                if ($cek->judul == "-") { ?>

                    <a href="?rik=tambah-UploadSkripsi" class="btn btn-primary">
                        <i class="fa fa-plus"></i>
                        Tambah
                    </a>

                <?php } elseif ($cek->id_mahasiswa == NULL) { ?>
                    <br>
                    <!-- success info warning danger primary -->
                    <div class="alert alert-info text-center">
                        Inputkan data dosen pembimbing terlebih dahulu yang terdapat pada menu master data .
                    </div>
                <?php } ?>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th width="35px">No.</th>
                                <th>NIM</th>
                                <th>Judul Skripsi</th>
                                <th>Tahun</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // print_r($data_Uploadskripsi);
                            // die;
                            $i = 1;
                            foreach ($data_Uploadskripsi as $data) { ?>
                                <tr class="even gradeC">
                                    <td><?= $i++; ?>.</td>
                                    <td><?= $data->id_mahasiswa; ?></td>
                                    <td><?= $data->judul; ?></td>
                                    <td><?= $data->tahun; ?></td>
                                    <td>
                                        <?php
                                        if ($data->Id_status_validasi == 1) {
                                            echo '<i class="label label-success">Telah di Validasi</i>';
                                        } elseif ($data->Id_status_validasi == 2) {
                                            echo '<i class="label label-danger">Tidak Valid</i>';
                                        } else {
                                            echo '<i class="label label-warning">Belum di Validasi</i>';
                                        }
                                        ?>
                                    </td>
                                    <td class="center">
                                        <a href="?rik=detail-UploadSkripsi&id_upload=<?= $data->id_bimbingan; ?>&parameter=1"><i class="fa fa-upload"></i></a> |
                                        <a href="?rik=ubah-UploadSkripsi&id_upload=<?= $data->id_bimbingan; ?>&parameter=1"><i class="fa fa-pencil"></i></a>
                                    </td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="data_skripsi"></div>

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
                              <a href="?rik=data-UploadSkripsi"><button class="btn btn-info">Kembali</button></a>
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
                              <a href="?rik=data-UploadSkripsi"><button class="btn btn-info">Kembali</button></a>
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
                              <a href="?rik=data-UploadSkripsi"><button class="btn btn-info">Kembali</button></a>
                            </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>';
    }
}
?>
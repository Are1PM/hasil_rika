<div class="row">
     <!--  page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Data Bimbingan</h1>
    </div>
     <!-- end  page header -->
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <?php

                if ($cek->id_mahasiswa=="") { ?>
                  
                <a href="?rik=tambah-Bimbingan" class="btn btn-primary">
                    <i class="fa fa-plus"></i>
                    Tambah
                </a>

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
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i=1;
                                foreach ($data_Bimbingan as $data) { ?>
                            <tr class="even gradeC">
                                <td><?= $i++; ?>.</td>
                                <td><?= $data->id_mahasiswa; ?></td>
                                <td><?= $data->judul; ?></td>
                                <td><?= $data->tahun; ?></td>
                                <td class="center">
                                    <a href="?rik=detail-Bimbingan&id_bimbingan=<?= $data->id_bimbingan; ?>&parameter=1"><i class="fa fa-upload"></i></a> |
                                    <a href="?rik=ubah-Bimbingan&id_bimbingan=<?= $data->id_bimbingan; ?>&parameter=1"><i class="fa fa-pencil"></i></a> 
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
                              <a href="?rik=data-Bimbingan"><button class="btn btn-info">Kembali</button></a>
                            </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>';
    }else if ($_GET['pesan'] == "invalid-formatfile") {
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
    }else if ($_GET['pesan'] == "invalid-size") {
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
    }
}
?>

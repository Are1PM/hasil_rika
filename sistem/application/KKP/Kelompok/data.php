<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Data Kelompok</h1>
    </div>
</div>
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?php
                if ($_SESSION['hak_akses'] == "admin") { ?>
                    <a href="?rik=tambah-Kelompok" class="btn btn-primary">
                        <i class="fa fa-plus"></i>
                        Tambah Kelompok
                    </a>
                <?php } ?>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th width="35px">No.</th>
                                <th>Nama Kelompok</th>
                                <th>Tanggal Masuk</th>
                                <th>Tanggal Kelaur</th>
                                <th>Dosen</th>
                                <th>Tahun Akademik</th>
                                <th>Anggota</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($data_kelompok as $data) { ?>
                                <tr class="even gradeC">
                                    <td><?= $i++; ?>.</td>
                                    <td><?= $data->nama_kelompok; ?></td>
                                    <td><?= $data->tanggal_masuk; ?></td>
                                    <td><?= $data->tanggal_keluar; ?></td>
                                    <td><?= $data->nama; ?></td>
                                    <td><?= $data->tahun_akademik; ?></td>
                                    <td><a href="?rik=data-anggota&r=<?= $data->id_kelompok ?>"><i class="fa fa-plus"></i> Add</a></td>
                                    <td class="center">
                                        <a href="?rik=detail-Kelompok&id_kelompok=<?= $data->id_kelompok; ?>&parameter=1"><i class="fa fa-eye"></i></a>
                                        |
                                        <a href="?rik=ubah-Kelompok&id_kelompok=<?= $data->id_kelompok; ?>&parameter=1"><i class="fa fa-pencil"></i></a> |
                                        <a href="?rik=hapus-Kelompok&id_kelompok=<?= $data->id_kelompok; ?>" onclick="javascript: return confirm('Anda yakin ingin menghapus ?')"><i class="fa fa-trash-o"></i></a>
                                    </td>
                                </tr>

                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!--End Advanced Tables -->
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
                              Berhasil dikonfirmasi
                          </div>
                          <br>
                            <div class="form-group">
                              <a href="?rik=data-Kelompok"><button class="btn btn-info">Kembali</button></a>
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
                              <a href="?rik=data-Kelompok"><button class="btn btn-info">Kembali</button></a>
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
                              <a href="?rik=data-Kelompok"><button class="btn btn-info">Kembali</button></a>
                            </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>';
    }
}
?>
<div class="row">
    <!--  page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Data Mahasiswa</h1>
    </div>
    <!-- end  page header -->
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <a href="?rik=tambah-mahasiswa&r=<?= $_GET['r'] ?>" class="btn btn-primary">
                    <i class="fa fa-plus"></i>
                    Tambah
                </a>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th width="35px">No.</th>
                                <th>NIM Mahasiswa</th>

                                <th>Nama</th>
                                <th>Angkatan</th>
                                <th>E-Mail</th>
                                <th>Number Handphone</th>

                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($data_mahasiswa as $data) { ?>

                                <tr class="even gradeC">
                                    <td><?= $i++; ?>.</td>
                                    <td><?= $data->id_mahasiswa; ?></td>

                                    <td><?= $data->nama_mahasiswa; ?></td>
                                    <td><?= $data->angkatan; ?></td>
                                    <td><?= $data->email; ?></td>
                                    <td><?= $data->number_handphone; ?></td>

                                    <td class="center">
                                        <a href="?rik=detail-mahasiswa&id_mahasiswa=<?= $data->id_mahasiswa; ?>&parameter=1"><i class="fa fa-eye"></i></a> |
                                        <a href="?rik=ubah-mahasiswa&id_mahasiswa=<?= $data->id_mahasiswa; ?>&parameter=1"><i class="fa fa-pencil"></i></a> |
                                        <a href="?rik=hapus-mahasiswa&id_mahasiswa=<?= $data->id_mahasiswa; ?>&r=<?= $_GET['r'] ?>"><i class="fa fa-trash-o"></i></a>
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
<div class="modal fade" id="data-skripsi"></div>

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
                              <a href="?emi=data-Mahasiswa"><button class="btn btn-info">Kembali</button></a>
                            </div>
                          </form>
                      </div>
                  </div>
              </div>
          </div>';
    }
}
?>
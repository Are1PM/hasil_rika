<div class="row">
     <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Tambah Anggota Kelompok</h1>
    </div>
    <!--end page header -->
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Tambah
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-2">
                        <form role="form" method="post" action="">
                            <div class="form-group">
                                <label>Id Mahasiswa</label>
                                <input type="text" name="id_mahasiswa" class="form-control pencarian" id="textbox" placeholder="id mahasiswa" readonly="">
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="id_kelompok" value="<?= $_GET['r'] ?>" class="form-control" placeholder="Id Kelompok" required>
                            </div>
                            <div class="form-group">
                                <label>Status Kelompok</label>
                                <select name="id_status_kelompok" class="form-control select2">
                                    <option>--Pilih--</option>
                                    <?php
                                    foreach ($data_status_kelompok as $datakl) { ?>
                                        <option value="<?= $datakl->id_status_kelompok ?>"><?= $datakl->status_kelompok ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                        </form>
                        <?php
                        if (isset($_POST['simpan'])) {
                        
                            $id_mahasiswa = $_POST['id_mahasiswa'];
                            $id_kelompok = $_POST['id_kelompok'];
                            $id_status_kelompok = $_POST['id_status_kelompok'];

                            $tambah = new MengelolaMahasiswa($id_mahasiswa,$id_kelompok,$id_status_kelompok,'','','','','','');
                            $tambah->tambahAnggotaKelompok();

                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
         <!-- End Form Elements -->
    </div>
</div>

<div class="modal fade" id="mahasiswa" role="dialog">
    <div class="modal-dialog" style="width: 30cm;">
       <!-- Modal content-->
       <div class="modal-content">
          <div class="modal-header">
             <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title">DATA MAHASISWA</h4>
          </div>
          <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th width="35px">No.</th>
                                <th>Id Mahasiswa</th>
                                <th>Id Kelompok</th>
                                <th>Nama</th>
                                <th>Angkatan</th>
                                <th>E-Mail</th>
                                <th>Number Handphone</th>
                                <th>Username</th>
                                <th>Password</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                $i=1;
                                foreach ($allMahasiswa as $data) { ?>
                               
                            <tr class="even gradeC">
                                <td><?= $i++; ?>.</td>
                                <td>
                                    <a id="data" onClick="masuk(this,'<?= $data->id_mahasiswa; ?>')" href="javascript:void(0)"><?= $data->id_mahasiswa; ?>
                                    </a>
                                </td>
                                <td><?= $data->id_kelompok; ?></td>
                                <td><?= $data->nama_mahasiswa; ?></td>
                                <td><?= $data->angkatan; ?></td>
                                <td><?= $data->email; ?></td>
                                <td><?= $data->number_handphone; ?></td>
                                <td><?= $data->username; ?></td>
                                <td><?= $data->password; ?></td>
                            </tr>

                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
          <div class="modal-footer">
             <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
       </div>
    </div>
 </div>

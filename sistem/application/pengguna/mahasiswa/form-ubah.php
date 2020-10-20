<div class="row">
     <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Ubah mahasiswa</h1>
    </div>
    <!--end page header -->
</div>
<div class="row">
    <div class="col-lg-12">
        <!-- Form Elements -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Ubah
            </div>
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-6">
                        <form role="form" method="post" action="">
                            <div class="form-group">
                                <label>Id Mahasiswa</label>
                                <input type="text" name="id_mahasiswa" value="<?= $data_mahasiswa->id_mahasiswa; ?>" class="form-control" placeholder="Id mahasiswa" readonly required>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="id_kelompok" value="<?= $data_mahasiswa->id_kelompok; ?>" class="form-control" placeholder="Id Kelompok" readonly required>
                            </div>
                            <div class="form-group">
                                <label>Nama mahasiswa</label>
                                <input type="text" name="nama_mahasiswa" value="<?= $data_mahasiswa->nama_mahasiswa; ?>" class="form-control" placeholder=" Nama Mahasiswa" required>
                            </div>
                            <div class="form-group">
                                <label>Angkatan</label>
                                <input type="text" name="angkatan" value="<?= $data_mahasiswa->angkatan; ?>" class="form-control" placeholder="Angkatan" required>
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" name="email" value="<?= $data_mahasiswa->email; ?>" class="form-control" placeholder="E-mail" required>
                            </div>
                             <div class="form-group">
                                <label>Number Handphone</label>
                                <input type="text" name="number_handphone" value="<?= $data_mahasiswa->number_handphone; ?>" class="form-control" placeholder="Number Handphone" required>
                            </div>
                            <div class="form-group">
                                <label>Status Kelompok</label>
                                <select name="id_status_kelompok" class="form-control select2">
                                    <option>--Pilih--</option>
                                    <?php
                                    foreach ($data_status_kelompok as $datakl) { ?>
                                        <option value="<?= $datakl->id_status_kelompok ?>"
                                            <?php
                                            if ($datakl->id_status_kelompok==$data_mahasiswa->id_status_kelompok) {
                                                echo "selected";
                                            }

                                            ?>><?= $datakl->status_kelompok ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" value="<?= $data_mahasiswa->username; ?>" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="password" value="<?= $data_mahasiswa->password; ?>" class="form-control" placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                        </form>
                        <?php  
                            if (isset($_POST['simpan'])) {
                            
                                $id_mahasiswa = $_POST['id_mahasiswa'];
                                $id_kelompok = $_POST['id_kelompok'];
                                $nama=$_POST['nama_mahasiswa'];
                                $id_status_kelompok = $_POST['id_status_kelompok'];
                                $angkatan=$_POST['angkatan'];
                                $email=$_POST['email'];
                                $number_handphone=$_POST['number_handphone'];
                                $status_kelompok=$_POST['status_kelompok'];
                                $username=$_POST['username'];
                                $password=$_POST['password'];

                                $ubah = new MengelolaMahasiswa($id_mahasiswa, $id_kelompok,$id_status_kelompok, $nama, $angkatan, $email, $number_handphone, $username, $password);
                                $ubah->mengubahMahasiswa();

                            }

                        ?>

                    </div>
                </div>
            </div>
        </div>
         <!-- End Form Elements -->
    </div>
</div>
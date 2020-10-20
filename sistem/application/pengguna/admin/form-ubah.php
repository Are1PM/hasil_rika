<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Ubah Admin</h1>
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
                    <div class="col-lg-6">
                        <form role="form" method="post" action="">
                            <div class="form-group">
                                <input type="hidden" class="form-control" name="id_admin" value="<?= $data_Admin->id_admin; ?>">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama admin</label>
                                <input type="text" name="nama" class="form-control" value="<?= $data_Admin->nama; ?>" placeholder="Nama admin">
                            </div>
                            <div class="form-group">
                                <label for="number_handphone">NO HP</label>
                                <input type="text" name="number_handphone" class="form-control" value="<?= $data_Admin->number_handphone; ?>" placeholder="Number handphone">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control" value="<?= $data_Admin->email; ?>" placeholder="......@gmail.com">
                            </div>
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control" value="<?= $data_Admin->username; ?>" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" value="<?= $data_Admin->password; ?>" placeholder="Password">
                            </div>


                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                        </form>
                        <?php
                        if (isset($_POST['simpan'])) {

                            $id_admin = $_POST['id_admin'];
                            $nama = $_POST['nama'];
                            $number_handphone = $_POST['number_handphone'];
                            $email = $_POST['email'];
                            $username = $_POST['username'];
                            $password = $_POST['password'];


                            $tambah = new MengelolaAdmin($id_admin, $nama, $number_handphone, $email, $username, $password);
                            $tambah->MengubahAdmin();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Elements -->
    </div>
</div>
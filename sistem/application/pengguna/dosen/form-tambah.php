<div class="row">
    <!-- page header -->
    <div class="col-lg-12">
        <h1 class="page-header">Tambah dosen</h1>
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
                                <label>Nama dosen</label>
                                <input type="text" name="nama" class="form-control" placeholder="Nama Dosen" required>
                            </div>
                            <div class="form-group">
                                <label>No. HP</label>
                                <input type="text" name="number_handphone" class="form-control" placeholder="No.HP" required>
                            </div>
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Username" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="Password" required>
                            </div>
                            <button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
                            <button type="reset" class="btn btn-success">Reset</button>
                        </form>
                        <?php
                        if (isset($_POST['simpan'])) {

                            $nama = $_POST['nama'];
                            $number_handphone = $_POST['number_handphone'];
                            $email = $_POST['email'];
                            $username = $_POST['username'];
                            $password = $_POST['password'];

                            $tambah = new MengelolaDosen('', $nama, $number_handphone, $email, $username, $password);
                            $tambah->MemasukkanDosen();
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Elements -->
    </div>
</div>
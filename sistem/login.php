
<?php 
require "template/head.php"; 
require "application/config/Validasi.php";

$ada_sesi = new Validasi();
$ada_sesi->CekStatusLogin();

?>

<body style="background: url('assets/bg/uho.png'); opacity: 0.7;">

    <div class="container">
       
        <div class="row">
            <div class="col-md-4 col-md-offset-4 text-center logo-margin " style="font-size: 20pt; color: white; font-family: 'times new roman';">
                SISTEM INFORMASI PENGARSIPAN DOKUMEN
            </div>
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">                  
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form role="form" method="post">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Username" name="Username" type="text" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="Password" type="password" value="">
                                </div>
                                 <div class="form-group">
                                    <select name="hak_akses" class="form-control">
                                        <option>--Pilih--</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Dosen</option>
                                        <option value="3">Mahasiswa</option>
                                    </select>
                                </div>
                                
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit" name="login" class="btn btn-lg btn-success btn-block">Login</button>
                            </fieldset>
                        </form>
                        <?php
                        if (isset($_POST['login'])) {
                            $Username =$_POST['Username'];
                            $Password =$_POST['Password'];
                            $hak_akses=$_POST['hak_akses'];

                            $Validasi = new Validasi();
                            $Validasi->login($hak_akses,$Username,$Password);
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- Core Scripts - Include with every page -->
    <script src="assets/plugins/jquery-1.10.2.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/metisMenu/jquery.metisMenu.js"></script>

</body>

</html>

<div class="tm-container-outer" id="tm-section-3">
    <ul class="nav nav-pills tm-tabs-links">
        <li class="tm-tab-link-li">
            <a href="#1a" data-toggle="tab" class="tm-tab-link">
                <i class="fa fa-graduation-cap fa-5x"></i>
                LOGIN MAHASISWA
            </a>
        </li>
        <li class="tm-tab-link-li">
            <a href="#2a" data-toggle="tab" class="tm-tab-link">
                <i class="fa fa-user fa-5x"></i>
                LOGIN DOSEN
            </a>
        </li>
        <li class="tm-tab-link-li">
            <a href="#3a" data-toggle="tab" class="tm-tab-link">
                <i class="fa fa-user-secret fa-5x"></i>
                LOGIN ADMIN
            </a>
        </li>
    </ul>
    <?php
    require_once "../sistem/application/config/Validasi.php";

        if (isset($_POST['login'])) {
            $Username =$_POST['username'];
            $Password =$_POST['password'];
            $hak_akses=$_POST['hak_akses'];

            $Validasi = new Validasi();
            $Validasi->login($hak_akses,$Username,$Password);

        }
    ?>
    <div class="tab-content clearfix">
        <!-- Tab 1 -->
        <div class="tab-pane fade show active" id="1a">
            <div class="tm-recommended-place-wrap">
                <div class="tm-recommended-place">
                    <img style="width: 465px;" src="assets/img-login/ak.jpeg" alt="Image" class="img-fluid tm-recommended-img">
                    <div class="tm-recommended-description-box">
                        <h3 class="tm-recommended-title">Login Mahasiswa</h3>
                        <form method="post" action="">
                            <div class="form-group">
                                <input type="hidden" name="hak_akses" value="3" class="form-control" readonly="">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="password">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="login" class="btn btn-success">Masuk</button>
                            </div>
                        </form> 

                    </div>
                </div>
            </div>                        
        </div> <!-- tab-pane -->
        
        <!-- Tab 2 -->
        <div class="tab-pane fade" id="2a">
            <div class="tm-recommended-place-wrap">
                <div class="tm-recommended-place">
                    <img style="width: 465px;" src="assets/img-login/ak.jpeg" alt="Image" class="img-fluid tm-recommended-img">
                    <div class="tm-recommended-description-box">
                        <h3 class="tm-recommended-title">Login Dosen</h3>
                        <form method="post" action="">
                            <div class="form-group">
                                <input type="hidden" name="hak_akses" value="2" class="form-control" readonly="">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="password">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="login" class="btn btn-success">Masuk</button>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>                        
        </div> <!-- tab-pane -->          
        
        <!-- Tab 3 -->     
        <div class="tab-pane fade" id="3a">
            <div class="tm-recommended-place-wrap">
                <div class="tm-recommended-place">
                    <img style="width: 465px;" src="assets/img-login/ak.jpeg" alt="Image" class="img-fluid tm-recommended-img">
                    <div class="tm-recommended-description-box">
                        <h3 class="tm-recommended-title">Login Admin</h3>
                        <form method="post" action="">
                            <div class="form-group">
                                <input type="hidden" name="hak_akses" value="1" class="form-control" readonly="">
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" placeholder="password">
                            </div>
                            <div class="form-group">
                                <button type="submit" name="login" class="btn btn-success">Masuk</button>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>                        
        </div> <!-- tab-pane -->

    </div>
</div>   



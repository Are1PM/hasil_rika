<?php 
require "../sistem/application/config/Validasi.php";

$ada_sesi = new Validasi();
$ada_sesi->CekStatusLogin();
require_once "../sistem/application/pengaturan/pengaturan.php";
$p = new Pengaturan();
$set = $p->TampilkanPengaturan();
require_once("template/head.php"); 


?>
      <body>
        <div class="tm-main-content" id="top">
            <div class="tm-top-bar-bg"></div>    
            <div class="tm-top-bar" id="tm-top-bar">
                <div class="container">
                    <div class="row">
                        <nav class="navbar navbar-expand-lg narbar-light">
                            <a class="navbar-brand mr-auto" href="#">
                                <img src="assets/img/logo.png" alt="Site logo">
                                <?= $set->singkatan_apps ?>
                            </a>
                            <button type="button" id="nav-toggle" class="navbar-toggler collapsed" data-toggle="collapse" data-target="#mainNav" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div id="mainNav" class="collapse navbar-collapse tm-bg-white">
                                <ul class="navbar-nav ml-auto">
                                  <li class="nav-item">
                                    <a class="nav-link active" href="index.php">BERANDA <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="login.php">LOGIN</a>
                                </li>
                            </ul>
                        </div>                            
                    </nav>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- .tm-top-bar -->
        <div class="tm-page-wrap mx-auto">
            <?php require_once("app/login/form-login.php"); ?>
            <?php require_once("template/footer.php"); ?>
        </div>
    </div> <!-- .main-content -->

<?php require("template/javascript.php"); ?>

</body>
</html>
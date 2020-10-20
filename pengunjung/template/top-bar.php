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
                        <a class="nav-link <?php if ($_GET['rik']==""){ echo 'active'; }  ?>" href="index.php">BERANDA <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($_GET['rik']=="KKP"){ echo 'active'; }  ?>" href="?rik=KKP">KKP</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($_GET['rik']=="SKRIPSI"){ echo 'active'; }  ?>" href="?rik=SKRIPSI">SKRIPSI</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if ($_GET['rik']=="registrasi"){ echo 'active'; }  ?>" href="?rik=registrasi">REGISTRASI</a>
                    </li>
                    <li class="nav-item">
                        <?php
                        if ($_SESSION['hak_akses']=="dosen") { ?>
                            <a class="nav-link" href="../sistem/sesi.php">KELUAR (<?= $_SESSION['user']; ?>)</a>
                           
                        <?php }else { ?>
                            <a class="nav-link" href="login.php">LOGIN</a>
                        <?php } ?>
                    </li>
                </ul>
            </div>                            
        </nav>
    </div> <!-- row -->
</div> <!-- container -->
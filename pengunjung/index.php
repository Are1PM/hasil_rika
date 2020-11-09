<?php
require_once("../sistem/application/config/Validasi.php");
require_once "../sistem/application/pengaturan/pengaturan.php";
$p = new Pengaturan();
$set = $p->TampilkanPengaturan();

require("template/head.php");
require_once "../sistem/application/KKP/DokumenKkp/MengelolaDokumenKkp.php";
require_once "../sistem/application/SKRIPSI/DokumenSkripsi/MengelolaDokumenskripsi.php";
require_once "../sistem/application/SKRIPSI/bimbingan/MengelolaBimbingan.php";
require_once "../sistem/application/KKP/Instansi/MengelolaInstansi.php";
require_once "../sistem/application/pengguna/mahasiswa/MengelolaMahasiswa.php";


$intansi = new MengelolaInstansi();
$data_instansi = $intansi->MelihatInstansi();


if ($_SESSION['hak_akses'] == "mahasiswa" or $_SESSION['hak_akses'] == "admin") {
    header("location: ../sistem/");
}

?>

<body>
    <div class="tm-main-content" id="top">
        <div class="tm-top-bar-bg"></div>
        <?php require("template/top-bar.php"); ?>
    </div> <!-- .tm-top-bar -->
    <div class="tm-page-wrap mx-auto">
        <?php require("app/config/route.php"); ?>
        <?php require("template/footer.php"); ?>
    </div>
    </div> <!-- .main-content -->

    <?php require("template/javascript.php"); ?>

</body>

</html>
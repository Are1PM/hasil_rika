<div class="row">
  <!-- Page Header -->
  <div class="col-lg-12">
    <h1 class="page-header">Dashboard</h1>
  </div>
  <!--End Page Header -->
</div>

<div class="row">
  <!-- Welcome -->
  <div class="col-lg-12">
    <div class="alert alert-info">
      <i class="fa fa-folder-open"></i><b>&nbsp;Hello !</b> Selamat datang, <b><?= $_SESSION['user'] ?></b>
      <!-- <i class="fa  fa-pencil"></i><b>&nbsp;2,000 </b>Support Tickets Pending to Answere. nbsp; -->
    </div>
  </div>
  <!--end  Welcome -->
</div>
<?php
if ($_SESSION['hak_akses'] == "admin") { ?>

  <?php
  $skripsi = new MengelolaDokumenSkripsi();
  $j_s = $skripsi->AllDokumen();

  $kkp = new MengelolaDokumenKkp();
  $j_k = $kkp->AllDokumen();

  $validasiskripsi = new MengelolaValidasiDokumenSkripsi();
  $v_s = $validasiskripsi->AllDokumenSkripsi();

  $validasikkp = new MengelolaValidasiDokumenKkp();
  $v_k = $validasikkp->AllDokumenKkp();

  $j_v = $v_s->jumlah_validasi + $v_k->jumlah_validasi;

  $mahasiswa = new MengelolaMahasiswa();
  $j_m = $mahasiswa->AllMahasiswa();

  ?>

  <div class="row">
    <!--quick info section -->
    <div class="col-lg-3">
      <div class="alert alert-danger text-center">
        <i class="fa fa-file fa-5x"></i>&nbsp;<b><?= $j_s->jumlah_skripsi; ?> </b>Skripsi
      </div>
    </div>
    <div class="col-lg-3">
      <div class="alert alert-success text-center">
        <i class="fa  fa-file fa-5x"></i>&nbsp;<b><?= $j_k->jumlah_kkp; ?> </b>KKP
      </div>
    </div>
    <div class="col-lg-3">
      <div class="alert alert-info text-center">
        <i class="fa fa-check fa-5x"></i>&nbsp;<b><?= $j_v; ?></b> Tervalidasi
      </div>
    </div>
    <div class="col-lg-3">
      <div class="alert alert-warning text-center">
        <i class="fa fa-users fa-5x"></i>&nbsp;<b><?= $j_m->jumlah_mahasiswa; ?> </b>Mahasiswa
      </div>
    </div>
    <!--end quick info section -->
  </div>
  <div class="row">
    <div class="col-lg-12">
      <!--  Bar Chart -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h3>Jumlah SKRIPSI dan KKP yang tervalidasi 3 tahun terakhir</h3>
        </div>
        <div class="panel-body">
          <div id="cek-bar"></div>
        </div>
      </div>
      <!-- End Bar Chart -->
    </div>
  </div>

<?php } else { ?>

  <div class="col-md-12">
    <div class="box box-solid">
      <div class="box-body">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="3" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="4" class=""></li>
            <li data-target="#carousel-example-generic" data-slide-to="5" class=""></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <img src="assets/bg/slider.jpg" alt="First slide">

              <div class="carousel-caption">
                Pelepasan KKP Gelombang 20191 Angkatan 016
              </div>
            </div>

            <div class="item">
              <img src="assets/bg/slider1.jpg" alt="Second slide">

              <div class="carousel-caption">
                Pelepasan KKP Gelombang 20191 Angkatan 016
              </div>
            </div>

            <div class="item">
              <img src="assets/bg/slider2.jpg" alt="Third slide">

              <div class="carousel-caption">
                Pelepasan KKP Gelombang 20191 Angkatan 016
              </div>
            </div>

            <div class="item">
              <img src="assets/bg/slider3.jpg" alt="Second slide">

              <div class="carousel-caption">
                Angkatan Petama Program Studi Ilmu Komputer
              </div>
            </div>

            <div class="item">
              <img src="assets/bg/slider4.jpg" alt="Third slide">

              <div class="carousel-caption">
                Pelepasan KKP Gelombang 20191 Angkatan 016
              </div>
            </div>

            <div class="item">
              <img src="assets/bg/slider5.jpg" alt="Third slide">

              <div class="carousel-caption">
                Penarikan KKP di Instansi BPKP
              </div>
            </div>
          </div>
          <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="fa fa-angle-left"></span>
          </a>
          <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="fa fa-angle-right"></span>
          </a>
        </div>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>

<?php } ?>
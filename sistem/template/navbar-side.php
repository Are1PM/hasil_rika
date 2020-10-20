<nav class="navbar-default navbar-static-side" role="navigation">
    <!-- sidebar-collapse -->
    <div class="sidebar-collapse">
        <!-- side-menu -->
        <ul class="nav" id="side-menu">
            <li>
                <!-- user image section-->
                <div class="user-section">
                    <div class="user-section-inner">
                        <img src="assets/img/user.jpg" alt="">
                    </div>
                    <div class="user-info">
                        <div><?= $_SESSION['user']; ?></div>
                        <div class="user-text-online">
                            <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                        </div>
                    </div>
                </div>
                <!--end user image section-->
            </li>
            <li class="<?php if ($_GET['rik']=="") { echo 'selected'; } ?>">
                <a href="index.php"> <i class="fa fa-home fa-fw"></i> Dashboard</a>
            </li>
            <?php
            if ($_SESSION['hak_akses']=="admin") { ?>
                
            <li class="<?php if ($_GET['rik']=="data-Instansi" or $_GET['rik']=="tambah-Instansi" or $_GET['rik']=="detail-Instansi" or $_GET['rik']=="ubah-Instansi" or $_GET['rik']=="data-pembimbing-lapangan" or $_GET['rik']=="tambah-pembimbing-lapangan" or $_GET['rik']=="detail-pembimbing" or $_GET['rik']=="ubah-pembimbing" or $_GET['rik']=="data-dosen-pembimbing" or $_GET['rik']=="tambah-dosen-pembimbing" or $_GET['rik']=="detail-dosen-pembimbing" or $_GET['rik']=="ubah-dosen-pembimbing" ) { echo 'active'; } ?>">
                <a href="#"><i class="fa fa-folder-open fa-fw"></i> Master Data<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="child-menu <?php if ($_GET['rik']=="data-dosen-pembimbing" or $_GET['rik']=="tambah-dosen-pembimbing" or $_GET['rik']=="detail-dosen-pembimbing" or $_GET['rik']=="ubah-dosen-pembimbing") { echo 'selected'; } ?>">
                        <a href="?rik=data-dosen-pembimbing">Dosen Pembimbing</a>
            </li>
            <?php } ?>
            <?php
            if ($_SESSION['hak_akses']=="admin") { ?>
                    <li class="child-menu <?php if ($_GET['rik']=="data-pembimbing-lapangan" or $_GET['rik']=="tambah-pembimbing-lapangan" or $_GET['rik']=="detail-pembimbing" or $_GET['rik']=="ubah-pembimbing") { echo 'selected'; } ?>">
                        <a href="?rik=data-pembimbing-lapangan">Pembimbing Lapangan</a>
                    </li>
                    <li class="child-menu <?php if ($_GET['rik']=="data-Instansi" or $_GET['rik']=="tambah-Instansi" or $_GET['rik']=="detail-Instansi" or $_GET['rik']=="ubah-Instansi") { echo 'selected'; } ?>">
                        <a href="?rik=data-Instansi">Instansi</a>
                    </li>
                    </ul>
            </li>
            <?php } ?>
                

            <?php if ($_SESSION['hak_akses']=="admin" OR $_SESSION['hak_akses']=="mahasiswa") { ?>
            <?php } ?>
            <?php
            if ($_SESSION['hak_akses']=="admin") { ?>
            <li class="<?php if ($_GET['rik']=="data-Kelompok" or $_GET['rik']=="tambah-Kelompok" or $_GET['rik']=="detail-Kelompok" or $_GET['rik']=="ubah-Kelompok" or $_GET['rik']=="data-DokumenKkp" or $_GET['rik']=="detail-DokumenKkp" or $_GET['rik']=="hapus-Kelompok" or $_GET['rik']=="ubah-DokumenKkp" or $_GET['rik']=="data-DokumenKkp" or $_GET['rik']=="data-DownloadDokumenKKP") { echo 'active'; } ?>">
                <a href="#"><i class="fa fa-file-text fa-fw"></i> KKP<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="child-menu <?php if ($_GET['rik']=="data-Kelompok" or $_GET['rik']=="tambah-Kelompok" or $_GET['rik']=="detail-Kelompok" or $_GET['rik']=="ubah-Kelompok") { echo 'selected'; } ?>">
                        <a href="?rik=data-Kelompok">Kelompok</a>
                    </li>
                    <li class="child-menu <?php if ($_GET['rik']=="data-DokumenKkp" or $_GET['rik']=="detail-DokumenKkp" or $_GET['rik']=="hapus-Kelompok" or $_GET['rik']=="ubah-DokumenKkp") { echo 'selected'; } ?>">
                        <a href="?rik=data-DokumenKkp">Dokumen KKP</a>
                    </li>
                </ul>
                <!-- second-level-items -->
            </li>
            <li class="<?php if ($_GET['rik']=="data-Dokumenskripsi" or $_GET['rik']=="tambah-DokumenSkripsi" or $_GET['rik']=="detail-DokumenSkripsi" or $_GET['rik']=="ubah-DokumenSkripsi" or $_GET['rik']=="data-DownloadDokumenSkripsi") { echo 'active'; } ?>">
                <a href="#"><i class="fa fa-file fa-fw"></i> Skripsi<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="child-menu <?php if ($_GET['rik']=="data-Dokumenskripsi" or $_GET['rik']=="tambah-DokumenSkripsi" or $_GET['rik']=="detail-DokumenSkripsi" or $_GET['rik']=="ubah-DokumenSkripsi") { echo 'selected'; } ?>">
                        <a href="?rik=data-Dokumenskripsi">Dokumen Skripsi</a>
                    </li>
                   
                </ul>
                <!-- second-level-items -->
            </li>
            <li class="<?php if ($_GET['rik']=="data-admin" or $_GET['rik']=="tambah-Admin" or $_GET['rik']=="detail-admin" or $_GET['rik']=="ubah-Admin" or $_GET['rik']=="data-dosen" or $_GET['rik']=="tambah-dosen" or $_GET['rik']=="detail-dosen" or $_GET['rik']=="ubah-dosen" or $_GET['rik']=="data-mahasiswa" or $_GET['rik']=="tambah-mahasiswa" or $_GET['rik']=="detail-mahasiswa" or $_GET['rik']=="ubah-mahasiswa") { echo 'active'; } ?>">
                <a href="#"><i class="fa fa-users fa-fw"></i> Pengguna<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="child-menu <?php if ($_GET['rik']=="data-admin" or $_GET['rik']=="tambah-Admin" or $_GET['rik']=="detail-admin" or $_GET['rik']=="ubah-Admin") { echo 'selected'; } ?>">
                        <a href="?rik=data-admin">Admin</a>
                    </li>
                    <li class="child-menu <?php if ($_GET['rik']=="data-dosen" or $_GET['rik']=="tambah-dosen" or $_GET['rik']=="detail-dosen" or $_GET['rik']=="ubah-dosen") { echo 'selected'; } ?>">
                        <a href="?rik=data-dosen">Dosen</a>
                    </li>
                    <li class="child-menu <?php if ($_GET['rik']=="data-mahasiswa" or $_GET['rik']=="tambah-mahasiswa" or $_GET['rik']=="detail-mahasiswa" or $_GET['rik']=="ubah-mahasiswa") { echo 'selected'; } ?>">
                        <a href="?rik=data-mahasiswa">Mahasiswa</a>
                    </li>
                </ul>
                <!-- second-level-items -->
            </li>
            <li>
                <a href="?rik=ubah-pengaturan"><i class="fa fa-gear fa-fw"></i> Pengaturan</a>
            </li>
            
        <?php } ?>
        <?php 
        if ($_SESSION['hak_akses']=="mahasiswa") { ?>
            <li class="<?php if ($_GET['rik']=="data-DokumenKkp" or $_GET['rik']=="tambah-DokumenKkp" or $_GET['rik']=="detail-DokumenKkp" or $_GET['rik']=="ubah-DokumenKkp") { echo 'active'; } ?>">
                <a href="#"><i class="fa fa-users fa-fw"></i> KKP<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="child-menu <?php if ($_GET['rik']=="data-DokumenKkp" or $_GET['rik']=="tambah-DokumenKkp" or $_GET['rik']=="detail-DokumenKkp" or $_GET['rik']=="ubah-DokumenKkp") { echo 'selected'; } ?>">
                        <a href="?rik=data-DokumenKkp">Upload Laporan KKP</a>
                    </li>
                </ul>
            </li>
            <li class="<?php if ($_GET['rik']=="data-UploadSkripsi" or $_GET['rik']=="tambah-UploadSkripsi" or $_GET['rik']=="detail-DokumenSkripsi" or $_GET['rik']=="ubah-UploadSkripsi") { echo 'active'; } ?>">
                <a href="#"><i class="fa fa-users fa-fw"></i> SKRIPSI<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="child-menu <?php if ($_GET['rik']=="data-UploadSkripsi" or $_GET['rik']=="tambah-UploadSkripsi" or $_GET['rik']=="detail-DokumenSkripsi" or $_GET['rik']=="ubah-UploadSkripsi") { echo 'selected'; } ?>">
                        <a href="?rik=data-UploadSkripsi">Upload File Skripsi</a>
                    </li>
                </ul>
            </li>
        <?php } ?>
        </ul>
    </div>
</nav>
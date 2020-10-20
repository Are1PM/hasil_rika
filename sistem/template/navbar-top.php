<?php
session_start();

?>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar" style="background-color: green;">
        <!-- navbar-header -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <img style="position: relative; top: -0.2cm; width: 70px; height: 70px;" src="assets/logo/logo.png" alt="">
                <span style="position: relative; top: -0.1cm; color: white;"><?= $set->judul_top_bar ?></span>
            </a>
        </div>
        <!-- end navbar-header -->
        <!-- navbar-top-links -->
        <ul class="nav navbar-top-links navbar-right">
            <!-- main dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" href="sesi.php">
                    Logout ( <?= $_SESSION['hak_akses']; ?> )
                </a>
            </li>
            <!-- end main dropdown -->
        </ul>
        <!-- end navbar-top-links -->
    </nav>

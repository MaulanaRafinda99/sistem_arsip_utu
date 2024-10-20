<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="../assets/img/logo/logo_utu.png" />
    <title>Admin - Sistem Informasi Arsip Digital</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.css">
    <link rel="stylesheet" href="../assets/css/owl.transitions.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/educate-custon-icon.css">
    <link rel="stylesheet" href="../assets/css/morrisjs/morris.css">
    <link rel="stylesheet" href="../assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="../assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="../assets/css/metisMenu/metisMenu-vertical.css">
    <link rel="stylesheet" href="../assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../assets/css/calendar/fullcalendar.print.min.css">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <link rel="stylesheet" type="text/css" href="../assets/js/DataTables/datatables.css">

    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <?php
    include '../koneksi.php';
    session_start();
    if ($_SESSION['status'] != "admin_login") {
        header("location:../login.php?alert=belum_login");
    }
    ?>
</head>

<body>
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.php"><img class="main-logo" src="../assets/img/logo/Logo SA.png" alt="" style="width: 80%;" /></a>
                <strong><a href="index.php"><img src="../assets/img/logo/Logo SA.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">

                <?php
                $currentPage = basename($_SERVER['PHP_SELF']);
                ?>

                <nav class="sidebar-nav left-sidebar-menu-pro" style="margin-top: 30px">
                    <ul class="metismenu" id="menu1">
                        <li class="<?= $currentPage == 'index.php' ? 'active' : '' ?>">
                            <a href="index.php">
                                <span class="educate-icon educate-home icon-wrap"></span>
                                <span class="mini-click-non">Dashboard</span>
                            </a>
                        </li>

                        <li class="<?= $currentPage == 'admin.php' ? 'active' : '' ?> <?= $currentPage == 'admin_edit.php' ? 'active' : '' ?> <?= $currentPage == 'admin_tambah.php' ? 'active' : '' ?>">
                            <a href="admin.php" aria-expanded="false">
                                <span class="educate-icon educate-professor icon-wrap sub-icon-mg"></span>
                                <span class="mini-click-non">Data Admin</span>
                            </a>
                        </li>

                        <li class="<?= $currentPage == 'petugas.php' ? 'active' : '' ?> <?= $currentPage == 'petugas_edit.php' ? 'active' : '' ?> <?= $currentPage == 'petugas_tambah.php' ? 'active' : '' ?>">
                            <a href="petugas.php" aria-expanded="false">
                                <span class="educate-icon educate-professor icon-wrap sub-icon-mg"></span>
                                <span class="mini-click-non">Data Operator</span>
                            </a>
                        </li>

                        <li class="<?= $currentPage == 'user.php' ? 'active' : '' ?> <?= $currentPage == 'user_edit.php' ? 'active' : '' ?> <?= $currentPage == 'user_tambah.php' ? 'active' : '' ?>">
                            <a href="user.php" aria-expanded="false">
                                <span class="educate-icon educate-professor icon-wrap sub-icon-mg"></span>
                                <span class="mini-click-non">Data User</span>
                            </a>
                        </li>

                        <li class="<?= $currentPage == 'arsip.php' ? 'active' : '' ?> <?= $currentPage == 'arsip_preview.php' ? 'active' : '' ?>">
                            <a href="arsip.php" aria-expanded="false">
                                <span class="educate-icon educate-data-table icon-wrap sub-icon-mg"></span>
                                <span class="mini-click-non">Data Arsip</span>
                            </a>
                        </li>

                        <li class="<?= $currentPage == 'kategori.php' ? 'active' : '' ?> <?= $currentPage == 'kategori_edit.php' ? 'active' : '' ?><?= $currentPage == 'kategori_tambah.php' ? 'active' : '' ?>">
                            <a href="kategori.php" aria-expanded="false">
                                <span class="educate-icon educate-course icon-wrap sub-icon-mg"></span>
                                <span class="mini-click-non">Data Kategori</span>
                            </a>
                        </li>

                        <li class="<?= $currentPage == 'gantipassword.php' ? 'active' : '' ?>">
                            <a href="gantipassword.php" aria-expanded="false">
                                <span class="educate-icon educate-danger icon-wrap sub-icon-mg"></span>
                                <span class="mini-click-non">Ganti Password</span>
                            </a>
                        </li>

                        <li class="<?= $currentPage == 'riwayat.php' ? 'active' : '' ?>">
                            <a href="riwayat.php" aria-expanded="false">
                                <span class="educate-icon educate-form icon-wrap sub-icon-mg"></span>
                                <span class="mini-click-non">Riwayat Unduh</span>
                            </a>
                        </li>

                        <li class="<?= $currentPage == 'arsip_dihapus.php' ? 'active' : '' ?>">
                            <a href="arsip_dihapus.php" aria-expanded="false">
                                <span class="fa fa-trash-o fa-2x" style="padding-right: 12px;"></span>
                                <span class="mini-click-non">Arsip Dihapus</span>
                            </a>
                        </li>

                        <li class="<?= $currentPage == 'logout.php' ? 'active' : '' ?>">
                            <a href="logout.php" aria-expanded="false">
                                <span class="educate-icon educate-pages icon-wrap sub-icon-mg"></span>
                                <span class="mini-click-non">Logout</span>
                            </a>
                        </li>
                    </ul>
                </nav>

                <style>
                    .sidebar-nav .metismenu li.active a {
                        background-color: #007bff;
                        color: white;
                    }

                    .sidebar-nav .metismenu li.active a .icon-wrap {
                        color: white;
                    }

                    .sidebar-nav .metismenu li a {
                        display: flex;
                        color: #333;
                        background-color: transparent;
                        transition: background-color 0.3s ease;
                    }

                    .sidebar-nav .metismenu li a:hover {
                        background-color: #f0f0f0;
                        color: #007bff;
                    }
                </style>

            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.php"><img class="main-logo" src="../assets/img/logo//Logo SA.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-12 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="educate-icon educate-nav"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="#" class="nav-link">Sistem Informasi Arsip Digital</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">

                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Riwayat unduh terakhir</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                            <?php
                                                            $arsip = mysqli_query($koneksi, "SELECT * FROM riwayat,arsip,user WHERE riwayat_arsip=arsip_id and riwayat_user=user_id ORDER BY riwayat_id DESC");
                                                            while ($p = mysqli_fetch_array($arsip)) {
                                                            ?>
                                                                <li>
                                                                    <a href="riwayat.php">
                                                                        <div class="notification-content">
                                                                            <p>
                                                                                <small><i><?php echo date('H:i:s  d-m-Y', strtotime($p['riwayat_waktu'])) ?></i></small>
                                                                                <br>
                                                                                <b><?php echo $p['user_nama'] ?></b> mengunduh <b><?php echo $p['arsip_nama'] ?></b>.
                                                                            </p>
                                                                        </div>
                                                                    </a>
                                                                    <hr>
                                                                </li>
                                                            <?php
                                                            }
                                                            ?>
                                                        </ul>
                                                        <div class="notification-view">
                                                            <a href="riwayat.php">Lihat semua riwayat</a>
                                                        </div>
                                                    </div>
                                                </li>

                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                        <?php
                                                        $id_admin = $_SESSION['id'];
                                                        $profil = mysqli_query($koneksi, "select * from admin where admin_id='$id_admin'");
                                                        $profil = mysqli_fetch_assoc($profil);
                                                        if ($profil['admin_foto'] == "") {
                                                        ?>
                                                            <img src="../gambar/sistem/user.png" style="width: 20px;height: 20px">
                                                        <?php } else { ?>
                                                            <img src="../gambar/admin/<?php echo $profil['admin_foto'] ?>" style="width: 20px;height: 20px">
                                                        <?php } ?>
                                                        <span class="admin-name"><?php echo $_SESSION['nama']; ?> [ <b>Administrator</b> ]</span>
                                                        <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="profil.php"><span class="edu-icon edu-home-admin author-log-ic"></span>Profil Saya</a></li>
                                                        <li><a href="gantipassword.php"><span class="edu-icon edu-user-rounded author-log-ic"></span>Ganti Password</a></li>
                                                        <li><a href="logout.php"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li class="active">
                                            <a href="index.php">
                                                <span class="educate-icon educate-home icon-wrap"></span>
                                                <span class="mini-click-non">Dashboard</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="admin.php" aria-expanded="false"><span class="educate-icon educate-course icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Admin</span></a>
                                        </li>

                                        <li>
                                            <a href="petugas.php" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Operator</span></a>
                                        </li>


                                        <li>
                                            <a href="user.php" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data User</span></a>
                                        </li>

                                        <li>
                                            <a href="arsip.php" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Arsip</span></a>
                                        </li>

                                        <li>
                                            <a href="kategori.php" aria-expanded="false"><span class="educate-icon educate-course icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Kategori</span></a>
                                        </li>

                                        <li>
                                            <a href="riwayat.php" aria-expanded="false"><span class="educate-icon educate-form icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Riwayat Unduh</span></a>
                                        </li>

                                        <li>
                                            <a href="gantipassword.php" aria-expanded="false"><span class="educate-icon educate-danger icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Ganti Password</span></a>
                                        </li>

                                        <li>
                                            <a href="logout.php" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Logout</span></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
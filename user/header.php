<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="../assets/img/logo/logo_utu.png" />
    <title>User - Sistem Informasi Arsip Digital</title>
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
    if ($_SESSION['status'] != "user_login") {
        header("location:../login.php?alert=belum_login");
    }
    ?>
</head>

<body>
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.php"><img class="main-logo" src="../assets/img/logo/Logo SA.png" alt="" /></a>
                <strong><a href="index.php"><img src="../assets/img/logo/Logo SA.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">

                <?php
                $currentPage = basename($_SERVER['PHP_SELF']); // Mendapatkan nama file saat ini
                ?>

                <nav class="sidebar-nav left-sidebar-menu-pro" style="margin-top: 30px">
                    <ul class="metismenu" id="menu1">
                        <li class="<?= $currentPage == 'index.php' ? 'active' : '' ?>">
                            <a href="index.php">
                                <span class="educate-icon educate-home icon-wrap"></span>
                                <span class="mini-click-non">Dashboard</span>
                            </a>
                        </li>

                        <li class="<?= $currentPage == 'arsip.php' ? 'active' : '' ?> <?= $currentPage == 'arsip_preview.php' ? 'active' : '' ?>">
                            <a href="arsip.php" aria-expanded="false">
                                <span class="educate-icon educate-data-table icon-wrap sub-icon-mg"></span>
                                <span class="mini-click-non">Data Arsip</span>
                            </a>
                        </li>

                        <li class="<?= $currentPage == 'gantipassword.php' ? 'active' : '' ?>">
                            <a href="gantipassword.php" aria-expanded="false">
                                <span class="educate-icon educate-danger icon-wrap sub-icon-mg"></span>
                                <span class="mini-click-non">Ganti Password</span>
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
                        border-radius: 5px;
                    }

                    .sidebar-nav .metismenu li.active a .icon-wrap {
                        color: white;
                    }

                    .sidebar-nav .metismenu li a {
                        display: flex;
                        align-items: center;
                        padding: 10px 15px;
                        color: #333;
                        text-decoration: none;
                        background-color: transparent;
                        border-radius: 5px;
                        transition: background-color 0.3s ease, color 0.3s ease;
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
                        <a href="index.php"><img class="main-logo" src="../assets/img/logo/Logo SA.png" alt="" /></a>
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
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                                                <i class="educate-icon educate-nav"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
                                                <li class="nav-item"><a href="arsip.php" class="nav-link">Semua Arsip</a></li>
                                                <li class="nav-item dropdown res-dis-nn">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">Kategori <span class="angle-down-topmenu"><i class="fa fa-angle-down"></i></span></a>
                                                    <div role="menu" class="dropdown-menu animated zoomIn">

                                                        <?php
                                                        $no = 1;
                                                        $kategori = mysqli_query($koneksi, "SELECT * FROM kategori");
                                                        while ($p = mysqli_fetch_array($kategori)) {
                                                        ?>
                                                            <a href="arsip.php?kategori=<?php echo $p['kategori_id'] ?>" class="dropdown-item"><?php echo $p['kategori_nama'] ?></a>
                                                        <?php
                                                        }
                                                        ?>

                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">

                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">

                                                        <?php
                                                        $id_user = $_SESSION['id'];
                                                        $profil = mysqli_query($koneksi, "select * from user where user_id='$id_user'");
                                                        $profil = mysqli_fetch_assoc($profil);
                                                        if ($profil['user_foto'] == "") {
                                                        ?>
                                                            <img src="../gambar/sistem/user.png">
                                                        <?php
                                                        } else {
                                                        ?>
                                                            <img src="../gambar/user/<?php echo $profil['user_foto'] ?>">
                                                        <?php
                                                        }
                                                        ?>
                                                        <span class="admin-name"><?php echo $_SESSION['nama']; ?> [ <b>User</b> ]</span>
                                                        <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                                    </a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li><a href="profil.php"><span class="edu-icon edu-money author-log-ic"></span>Profil</a></li>
                                                        <li><a href="gantipassword.php"><span class="edu-icon edu-settings author-log-ic"></span>Ganti Password</a></li>
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
                                            <a href="arsip.php" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Arsip</span></a>
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
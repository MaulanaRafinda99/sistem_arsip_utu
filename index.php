<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./assets/css/landing_page.css">

    <!-- AOS animate -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Box Icon CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <link rel="shortcut icon" href="assets/img/logo/logo_utu.png" />
    <title>SA - UTU</title>
</head>

<body>
    <!-- Navbar Section -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./assets/img/brand/Logo.png" alt="brand" style="height: 150%; width:150%; margin-left:-80px;">
            </a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i> <!-- Ikon hamburger -->
            </button>

            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="https://www.utu.ac.id">Web UTU</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-5">
                    <div class="copy" data-aos="fade-up" data-aos-duration="3000">
                        <div class="text-label">Sistem Arsip Digital - UTU</div>
                        <div class="text-hero-bold">UNIVERSITAS TEUKU UMAR</div>
                        <div class="text-hero-regular">
                            Sistem Arsip Dokumen Universitas Teuku Umar
                        </div>
                        <div class="d-flex flex-row">
                            <div class="cta">
                                <a href="user_login.php" class="btn btn-secondary shadow-none" style="margin-right: 15px;">Login User</a>
                            </div>
                            <div class="cta">
                                <a href="login.php" class="btn btn-secondary shadow-none">Login Admin | Operator</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6" data-aos="fade-up" data-aos-duration="3000">
                    <img src="./assets/img/illustration/Screen Shot 2023-11-11 at 18.40.20.png" class="img-fluid" alt="png">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="footer_section">
        <div class="container text-center">
            <p>
                Sistem Arsip Dokumen - Universitas Teuku Umar
            </p>
            &copy; <span id="displayYear"></span> Copyright by
            <a href="utu.ac.id/">Universitas Teuku Umar 2024</a>
        </div>
    </footer>

    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>
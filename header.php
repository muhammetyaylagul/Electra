<?php
    $page = basename($_SERVER['PHP_SELF']);
?>

<!-- Navbar & Hero Start -->
<div class="container-fluid header-top">
    <div class="container d-flex align-items-center">
        <div class="d-flex align-items-center h-100">
            <a href="index.php" class="navbar-brand" style="height: 125px;">
                <h1 class="text-primary mb-0"><i class="fas fa-bolt"></i> Electra</h1>
                <!-- <img src="img/logo.png" alt="Logo"> -->
            </a>
        </div>
        <div class="w-100 h-100">
            <div class="topbar px-0 py-2 d-none d-lg-block" style="height: 45px;">
                <div class="row gx-0 align-items-center">
                    <div class="col-lg-8 text-center text-lg-center mb-lg-0">
                        <div class="d-flex flex-wrap">
                            <div class="border-end border-primary pe-3">
                                <a href="#" class="text-muted small"><i
                                        class="fas fa-map-marker-alt text-primary me-2"></i>Çerkezköy/TEKİRDAĞ</a>
                            </div>
                            <div class="ps-3">
                                <a href="mailto:example@gmail.com" class="text-muted small"><i
                                        class="fas fa-envelope text-primary me-2"></i>electra@gmail.com</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 text-center text-lg-end">
                        <div class="d-flex justify-content-end">
                            <div class="d-flex border-end border-primary pe-3">
                                <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="btn p-0 text-primary me-3" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="btn p-0 text-primary me-0" href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            <div class="text-white-50 ms-auto p-0 m-0">
                                <small>Çalışma: 09:00 - 18:00</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-bar px-0 py-lg-0" style="height: 80px;">
                <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-lg-end">
                    <a href="index.php" class="navbar-brand-2">
                        <h1 class="text-primary mb-0"><i class="fas fa-bolt"></i> Electra</h1>
                        <!-- <img src="img/logo.png" alt="Logo"> -->
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav mx-0 mx-lg-auto bg-white">
                            <a href="index.php"
                                class="nav-link <?php echo ($page == 'index.php') ? 'active' : ''; ?>">Anasayfa</a>
                            <a href="hakkimizda.php"
                                class="nav-link <?php echo ($page == 'hakkimizda.php') ? 'active' : ''; ?>">Hakkımızda</a>
                            <a href="hizmetlerimiz.php"
                                class="nav-link <?php echo ($page == 'hizmetlerimiz.php') ? 'active' : ''; ?>">Hizmetlerimiz</a>
                            <div class="nav-item dropdown">
                                
                                <a href="#"
                                    class="nav-link dropdown-toggle <?php echo ($page == 'ekibimiz.php' || $page == 'referanslar.php' || $page == '404.php') ? 'active' : ''; ?>"
                                    data-bs-toggle="dropdown">
                                    Sayfalar
                                </a>
                                <div
                                    class="dropdown-menu">
                                    <a href="ekibimiz.php"
                                        class="dropdown-item <?php echo ($page == 'ekibimiz.php') ? 'active' : ''; ?>">Ekibimiz</a>
                                    <a href="referanslar.php"
                                        class="dropdown-item <?php echo ($page == 'referanslar.php') ? 'active' : ''; ?>">Referanslar</a>
                                    <a href="blog.php"
                                        class="dropdown-item <?php echo ($page == 'blog.php' || $page == 'blog-detail.php') ? 'active' : ''; ?>">
                                        Blog</a>    
                                    <a href="404.php"
                                        class="dropdown-item <?php echo ($page == '404.php') ? 'active' : ''; ?>">404
                                        Page</a>
                                </div>
                            </div>
                            <a href="iletisim.php"
                                class="nav-link <?php echo ($page == 'iletişim.php') ? 'active' : ''; ?>">İletişim</a>
                            <div class="nav-btn ps-3">
                                <a href="iletisim.php" class="btn btn-primary py-2 px-4 ms-0 ms-lg-3"> Teklif Al</a>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Navbar & Hero End -->
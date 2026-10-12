<?php

include "database.php";

$result = $connection->query("SELECT * FROM about LIMIT 1");

$about = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="tr">

<head>
    <title>Ana Sayfa</title>
    <meta content="Ana Sayfa Meta Description" name="description">
    <?php include 'head.php'; ?>
</head>

<body>

    <?php include 'spinner.php'; ?>

    <?php include 'header.php'; ?>

    <!-- Carousel Start -->
    <div class="header-carousel owl-carousel overflow-hidden">
        <div class="header-carousel-item hero-section">
            <div class="hero-bg-half-1"></div>
            <div class="hero-shape-1"></div>
            <div class="carousel-caption">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-start">
                                <h4 class="text-white text-uppercase fw-bold mb-4">
                                    Güncel Elektrik Hizmetleri
                                </h4>
                                <h1 class="display-2 text-white mb-4">
                                    Güvenli Enerji ve Kesintisiz Çözümler
                                </h1>
                                <p class="mb-5 fs-5">
                                    Enerji sektöründeki deneyimimizle, projenizin başından sonuna kadar güvenilir
                                    ve kesintisiz çözümler üretiyoruz.
                                </p>
                                <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                    <a class="btn btn-light py-3 px-4 px-md-5 me-2" href="#"><i
                                            class="fas fa-play-circle me-2"></i> Tanıtım Videosu </a>
                                    <a class="btn btn-primary py-3 px-4 px-md-5 ms-2" href="hizmetlerimiz.php">Detaylı
                                        Bilgi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-carousel-item hero-section">
            <div class="hero-bg-half-2"></div>
            <div class="hero-shape-2"></div>
            <div class="carousel-caption">
                <div class="container">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-7 animated fadeInLeft">
                            <div class="text-sm-center text-md-start">
                                <h4 class="text-white text-uppercase fw-bold mb-4">Güncel Elektrik Hizmetleri</h4>
                                <h1 class="display-2 text-white mb-4">Profesyonelliğin Gücünü Deneyimleyin</h1>
                                <p class="mb-5 fs-5">Alanında uzman mühendis ve teknik kadromuzla, tüm elektrik tesisatı
                                    ve bakım işlemlerinizde uluslararası kalite standartlarında hizmet veriyoruz.
                                </p>
                                <div class="d-flex justify-content-center justify-content-md-start flex-shrink-0 mb-4">
                                    <a class="btn btn-light py-3 px-4 px-md-5 me-2" href="#"><i
                                            class="fas fa-play-circle me-2"></i> Tanıtım Videosu </a>
                                    <a class="btn btn-primary py-3 px-4 px-md-5 ms-2" href="service.php">Detaylı
                                        Bilgi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid about bg-light py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-7 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="h-100">
                        <h4 class="text-primary">Hakkımızda</h4>
                        <h1 class="display-4 mb-4">Sizin İçin En Yüksek Kalitede Çözümler Sunuyoruz</h1>
                        <div class="row g-4 mb-4">
                            <div class="col-md-6">
                                <a href="#" class="d-flex">
                                    <span class="fas fa-bolt fa-3x me-3"></span>
                                    <h4 class="mb-0">Acil Durum Enerji Çözümleri</h4>
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a href="#" class="d-flex">
                                    <span class="fas fa-broadcast-tower fa-3x me-3"></span>
                                    <h4 class="mb-0">Tam Kapsamlı Elektrik Projelendirme</h4>
                                </a>
                            </div>
                        </div>
                        <p class="mb-4">Müşterilerimizin enerji ihtiyaçlarına profesyonel yaklaşımlarla odaklanıyor, tüm
                            projelendirme ve acil müdahale süreçlerini güvenli standartlarda yönetiyoruz.
                        </p>
                        <div class="text-dark mb-4">
                            <p class="fs-5"><span class="fa fa-check text-primary me-2"></span> Müşterilerimiz için
                                aydınlatma sistemlerinin kurulum, bakım ve onarım işlemlerini gerçekleştiriyoruz. </p>
                            <p class="fs-5"><span class="fa fa-check text-primary me-2"></span> Giderek daha popüler
                                hale gelen enerji üretim yöntemleri sunuyoruz. </p>
                            <p class="fs-5"><span class="fa fa-check text-primary me-2"></span> Elektrikli cihazlarınızı
                                olası hasarlara karşı koruma altına alıyoruz. </p>
                        </div>
                        <a class="btn btn-primary py-3 px-4 px-md-5 ms-2" href="iletisim.php">Bize Ulaşın</a>
                    </div>
                </div>
                <div class="col-lg-5 wow fadeInRight" data-wow-delay="0.2s">
                    <div class="position-relative h-100">
                        <img src="img/about-1.jpg" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="">
                        <div class="bg-white">
                            <div class="position-absolute pt-3 bg-white" style="width: 50%; left: 0; bottom: 0;">
                                <div class="bg-primary p-4">
                                    <h4 class="display-2 mb-0">25+</h4>
                                    <p class="text-white fs-5 mb-0">years of experience</p>
                                </div>
                            </div>
                            <div class="position-absolute p-3 bg-white pb-0 pe-0"
                                style="width: 50%; bottom: 0; right: 0;">
                                <img src="img/about-2.jpg" class="img-fluid" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="d-flex flex-column mx-auto text-center mb-5 wow fadeInUp" data-wow-delay="0.2s"
                style="max-width: 800px;">
                <h4 class="text-primary">Hizmetlerimiz</h4>
                <h1 class="display-4 mb-4">Sizin İçin En İyi Hizmet</h1>
                <p class="mb-0">Müşterilerimizin ihtiyaçlarına yönelik, en yüksek güvenlik ve kalite standartlarında
                    sunduğumuz profesyonel hizmet kategorilerimiz.
                </p>
            </div>
            <div class="row g-5 align-items-center">
                <div class="col-lg-3 wow fadeInLeft" data-wow-delay="0.2s">
                    <ul class="nav">
                        <li class="nav-item me-lg-0 mb-4">
                            <a class="py-3 px-5 active" data-bs-toggle="pill" href="#ServiceTab-1">
                                <span>Ticari</span>
                            </a>
                        </li>
                        <li class="nav-item me-lg-0 mb-4">
                            <a class="py-3 px-5" data-bs-toggle="pill" href="#ServiceTab-2">
                                <span>Mesken</span>
                            </a>
                        </li>
                        <li class="nav-item me-lg-0 mb-4 mb-lg-0">
                            <a class="py-3 px-5" data-bs-toggle="pill" href="#ServiceTab-3">
                                <span>Endüstriyel</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-9 wow fadeInRight" data-wow-delay="0.3s">
                    <div class="tab-content">
                        <div id="ServiceTab-1" class="tab-pane fade show p-0 active">
                            <div class="service-carousel owl-carousel">
                                <div class="service-item">
                                    <img src="img/commercial-1.jpg" class="img-fluid w-100" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Acil Arıza ve Çözüm Hizmetleri</h4>
                                        <p class="mb-4">Ticari işletmeler ve ofisler için periyodik elektrik altyapı
                                            bakımı ve güvenli kurulum hizmetleri sunuyoruz.
                                        </p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Detaylar</a>
                                    </div>
                                </div>
                                <div class="service-item">
                                    <img src="img/commercial-2.jpg" class="img-fluid w-100" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Enerji Tasarruf Paketleri</h4>
                                        <p class="mb-4">İş yerlerinizde enerji tüketimini optimize eden, maliyetlerinizi
                                            düşüren ve verimliliği artıran modern enerji çözümleri sunuyoruz.
                                        </p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Detaylar</a>
                                    </div>
                                </div>
                                <div class="service-item">
                                    <img src="img/commercial-3.jpg" class="img-fluid w-100" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Electra Elektrik Bakım Paketleri</h4>
                                        <p class="mb-4">Ticari işletmeler ve ofisler için periyodik elektrik altyapı
                                            bakımı ve güvenli kurulum hizmetleri sunuyoruz.
                                        </p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Detaylar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="ServiceTab-2" class="tab-pane fade show p-0">
                            <div class="service-carousel owl-carousel">
                                <div class="service-item">
                                    <img src="img/residential-1.jpg" class="img-fluid w-100" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Ev Tipi Elektrik Hizmetleri</h4>
                                        <p class="mb-4"> Ev içi aydınlatma, priz yenileme, sigorta kutusu değişimi ve
                                            güvenli kablolama çözümleri.
                                        </p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Detaylar</a>
                                    </div>
                                </div>
                                <div class="service-item">
                                    <img src="img/residential-2.jpg" class="img-fluid w-100" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Güvenlik ve Kamera Sistemleri</h4>
                                        <p class="mb-4">Mülkünüzün güvenliği için modern kamera, alarm ve akıllı ev
                                            kilit sistemlerinin kurulum ve entegrasyonu.
                                        </p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Detaylar</a>
                                    </div>
                                </div>
                                <div class="service-item">
                                    <img src="img/residential-3.jpg" class="img-fluid w-100" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Klima ve İklimlendirme Sistemleri</h4>
                                        <p class="mb-4"> Evleriniz için enerji tasarruflu klima montajı, elektrik
                                            altyapısı ve periyodik bakım hizmetleri sunuyoruz.
                                        </p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Detaylar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="ServiceTab-3" class="tab-pane fade show p-0">
                            <div class="service-carousel owl-carousel">
                                <div class="service-item">
                                    <img src="img/industrial-1.jpg" class="img-fluid w-100" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Fabrika Otomasyon ve Üretim Sistemleri</h4>
                                        <p class="mb-4">Üretim hatlarındaki makine elektrik altyapıları, otomasyon
                                            sistemleri ve periyodik arıza bakım çözümleri.
                                        </p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Detaylar</a>
                                    </div>
                                </div>
                                <div class="service-item">
                                    <img src="img/industrial-2.jpg" class="img-fluid w-100" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Genel Endüstriyel Elektrik</h4>
                                        <p class="mb-4">Fabrika, atölye ve sanayi tesisleri için yüksek gerilim hatları,
                                            pano kurulumları ve genel altyapı hizmetleri.
                                        </p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Detaylar</a>
                                    </div>
                                </div>
                                <div class="service-item">
                                    <img src="img/industrial-3.jpg" class="img-fluid w-100" alt="">
                                    <div class="border border-top-0 p-4">
                                        <h4 class="mb-3">Elektrik Projelendirme ve Planlama</h4>
                                        <p class="mb-4">Sanayi tesislerinin enerji ihtiyacına uygun, uluslararası
                                            standartlarda mühendislik ve proje çizim hizmetleri.
                                        </p>
                                        <a class="btn btn-primary py-2 px-4" href="#">Detaylar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->

    

    <!-- Team Start -->
    <div class="container-fluid team py-5">
        <div class="container py-5">
            <div class="d-flex flex-column mx-auto text-center mb-5 wow fadeInUp" data-wow-delay="0.2s"
                style="max-width: 800px;">
                <h4 class="text-primary">Uzman Kadromuz</h4>
                <h1 class="display-4 mb-4">Enerjinin Arkasındaki Güç</h1>
                <p class="mb-0">Alanında uzman, gerekli tüm sertifika ve teknik donanıma sahip mühendis ve teknisyen
                    kadromuzla projelerinizi güvenle hayata geçiriyoruz.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-1.jpg" class="img-fluid w-100" alt="">
                            <div class="team-icon">
                                <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary mb-2" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="team-content bg-light text-center p-4">
                            <h4>Caner Yılmaz</h4>
                            <p class="mb-0">Elektrik Teknisyeni</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-2.jpg" class="img-fluid w-100" alt="">
                            <div class="team-icon">
                                <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary mb-2" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="team-content bg-light text-center p-4">
                            <h4>Murat Şahin</h4>
                            <p class="mb-0">Proje Müdürü</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-3.jpg" class="img-fluid w-100" alt="">
                            <div class="team-icon">
                                <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary mb-2" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="team-content bg-light text-center p-4">
                            <h4>Ahmet Demir</h4>
                            <p class="mb-0">Saha Şefi</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-4.jpg" class="img-fluid w-100" alt="">
                            <div class="team-icon">
                                <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square btn-primary mb-2" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square btn-primary mb-2" href=""><i
                                        class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                        <div class="team-content bg-light text-center p-4">
                            <h4>Yusuf Kaya</h4>
                            <p class="mb-0">Yüksek Gerilim Uzmanı</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->


    <!-- Footer Start -->

    <?php include 'footer.php'; ?>

    <!-- Footer End -->
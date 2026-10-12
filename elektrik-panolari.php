<!DOCTYPE html>
<html lang="en">

<head>
    <title>Elektrik Panoları</title>
    <meta content="Elektrik Panoları Sayfası Meta Description" name="description">
    <?php include 'head.php'; ?>
</head>


<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <?php include 'header.php'; ?>

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Elektrik Panoları</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="index.php">Anasayfa</a></li>
                <li class="breadcrumb-item"><a href="hizmetlerimiz.php">Hizmetlerimiz</a></li>
                <li class="breadcrumb-item active text-primary">Elektrik Panoları</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->


    <!-- Services Start -->
    <div class="container-fluid service py-5">
        <div class="container py-5">
            <div class="d-flex flex-column mx-auto text-center mb-5 wow fadeInUp" data-wow-delay="0.2s"
                style="max-width: 800px;">
                <h4 class="text-primary">Elektrik Panoları</h4>
                <h1 class="display-4 mb-4">Güvenli ve Profesyonel Elektrik Pano Çözümleri</h1>
                <p class="mb-0">Endüstriyel ve ticari işletmeler için enerji dağıtımını güvenli, düzenli ve verimli hale getiren elektrik pano çözümleri sunuyoruz.
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
                                        <p class="mb-4">Evleriniz için enerji tasarruflu klima montajı, elektrik
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
                                        <h4 class="mb-3">Elektrik Projelnedirme ve Planlama</h4>
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


    <!-- Footer Start -->

    <?php include 'footer.php'; ?>

    <!-- Footer End -->